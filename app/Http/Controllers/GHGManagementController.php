<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\OrganizationBranch;
use App\Models\ScopeFiveEmissionCategory;
use App\Models\ScopeFiveEmissionData;
use App\Models\ScopeOneEmissionCategory;
use App\Models\ScopeOneEmissionData;
use App\Models\ScopeTwoEmissionCategory;
use App\Models\ScopeTwoEmissionData;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GHGManagementController extends Controller
{

    public function getGrossEmissions(Request $request)
    {
        $data = $this->fetchEmissions($request);
        $emissions = $data['emissions'];

        return response()->json([
            'success' => true,
            'data' => ["total_gross_emissions" => number_format($emissions->sum('emissions_per_month'), 2)],
        ]);
    }

    public function getGrossEmissionsByTime(Request $request)
    {
        $data = $this->fetchEmissions($request);
        $results_emissions = $data['emissions'];

        $start_date = $data['start_date'];
        $end_date = $data['end_date'];
        //for the chart
        $labels = [];
        $values = [];

        // Create an empty array to hold unique emissions.
        $emissions = [];

        // Create an associative array to track IDs that have been encountered
        $seen_ids = [];

        // Loop through each emission
        foreach ($results_emissions as $emission) {
            // Assume each emission has an 'id' field
            $id = $emission['id'];

            // Check if the ID has already been seen
            if (!isset($seen_ids[$id])) {
                // Add the emission to the unique emissions array
                $emissions[] = $emission;

                // Mark this ID as seen
                $seen_ids[$id] = true;
            }
        }

        // Generate all the months between start_date and end_date
        $months = $this->generateMonths($start_date, $end_date);


        // Group months into chunks of 3 (for quarterly grouping)
        $grouped_months = array_chunk($months, 3);

        // Loop through each group of 3 months
        foreach ($grouped_months as $group_month) {
            $total_per_month_per_group = 0;
            // Loop through each month in the group
            foreach ($group_month as $month) {
                $emissions_month_data = [];

                // Loop through each emission and check if it belongs to the current month
                foreach ($emissions as $emission) {
                    if (in_array($month, $emission->available_in_months)) {
                        $total_per_month_per_group += $emission->emissions_per_month;
                        $emissions_month_data[] = $emission;
                    }
                }
            }
            array_push($labels, Carbon::createFromFormat('Y-m', $group_month[2])->format('M Y'));
            array_push($values, number_format($total_per_month_per_group));
        }

        return response()->json([
            'success' => true,
            'data' => ["labels" => $labels, "values" => $values],
        ]);
    }


    public function getGrossEmissionsByCategory(Request $request)
    {
        // Fetch the emissions data
        $data = $this->fetchEmissions($request);
        $emissions = $data['emissions'];
        //for the charts
        $labels = [];
        $values = [];

        // Initialize collections for each scope
        $scope_one_emissions = collect();
        $scope_two_emissions = collect();
        $scope_five_emissions = collect();

        // Separate emissions by scope name and group by category_id
        foreach ($emissions as $emission) {
            if ($emission->scope_name == 'scope_one') {
                $scope_one_emissions->push($emission);
            } elseif ($emission->scope_name == 'scope_two') {
                $scope_two_emissions->push($emission);
            } elseif ($emission->scope_name == 'scope_five') {
                $scope_five_emissions->push($emission);
            }
        }

        // Group each scope's emissions by category_id
        $grouped_scope_one = $scope_one_emissions->groupBy('category_id');
        $grouped_scope_two = $scope_two_emissions->groupBy('category_id');
        $grouped_scope_five = $scope_five_emissions->groupBy('category_id');

        // Merge all grouped emissions into one collection
        $merged_emissions = collect();

        foreach ($grouped_scope_one as $category_id => $emissions) {
            $merged_emissions->push([
                'category_id' => $category_id,
                'category_name' => ScopeOneEmissionCategory::find($category_id)->name,
                'scope_name' => 'scope_one',
                'emissions' => $emissions,
                'total_emissions' => $emissions->sum('emissions_per_month')
            ]);
        }

        foreach ($grouped_scope_two as $category_id => $emissions) {
            $merged_emissions->push([
                'category_id' => $category_id,
                'category_name' => ScopeTwoEmissionCategory::find($category_id)->name,
                'scope_name' => 'scope_two',
                'emissions' => $emissions,
                'total_emissions' => $emissions->sum('emissions_per_month')
            ]);
        }

        foreach ($grouped_scope_five as $category_id => $emissions) {
            $merged_emissions->push([
                'category_id' => $category_id,
                'category_name' => ScopeFiveEmissionCategory::find($category_id)->name,
                'scope_name' => 'scope_five',
                'emissions' => $emissions,
                'total_emissions' => $emissions->sum('emissions_per_month')
            ]);
        }

        // Sort the merged emissions by total_emissions in descending order
        $sorted_emissions = $merged_emissions->sortByDesc('total_emissions')->values();

        // Take the top 5 groups
        $top_emissions = $sorted_emissions->take(5);
        foreach ($top_emissions as $group) {
            $name = $group['category_name'];
            if ($name == "Natural Gas: Heaters, furnaces, and stationary engines.") {
                $name = "Natural Gas";
            } else if ($name == "Average Car - Diesel") {
                $name = "Diesel";
            } else if ($name == "Average Car - Petrol") {
                $name = "Petrol";
            } else if ($name == "British Columbia") {
                $name = "BC";
            }
            array_push($labels, $name);
            array_push($values, number_format($group['total_emissions'], 2));
        }
        return response()->json([
            'success' => true,
            'data' => ["labels" => $labels, "values" => $values],
        ]);
    }
    public function getGrossEmissionsByBranch(Request $request)
{
    // Fetch the emissions data
    $data = $this->fetchEmissions($request);
    $emissions = $data['emissions'];

    // For the charts
    $labels = [];
    $values = [];

    // Group by branch
    $grouped = $emissions->groupBy('organization_branch_id');

    // Aggregate emissions data for each branch
    $merged_emissions = collect();
    foreach ($grouped as $branch_id => $branch_emissions) {
        $total_emissions = $branch_emissions->sum('emissions_per_month');
        $branch_name = OrganizationBranch::find($branch_id)->name; // Assuming 'branch_name' exists
        $merged_emissions->push([
            'branch_id' => $branch_id,
            'branch_name' => $branch_name,
            'total_emissions' => $total_emissions
        ]);
    }

    // Sort the merged emissions by total_emissions in descending order
    $sorted_emissions = $merged_emissions->sortByDesc('total_emissions')->values();

    // Take the top 5 branches
    $top_emissions = $sorted_emissions->take(5);

    // Prepare labels and values for charting
    foreach ($top_emissions as $group) {
        array_push($labels, $group['branch_name']);
        array_push($values, number_format($group['total_emissions'], 2));
    }

    // Return the data as a JSON response
    return response()->json([
        'success' => true,
        'data' => ["labels" => $labels, "values" => $values],
    ]);
}




    public function fetchEmissions(Request $request)
    {
        $emissions = collect();
        $user = Auth::user();
        if ($request->scope == "all") {
            $emissions = $emissions->merge(ScopeOneEmissionData::with('category')->get());
            $emissions = $emissions->merge(ScopeTwoEmissionData::with('category')->get());
            $emissions = $emissions->merge(ScopeFiveEmissionData::with('category')->get());
        } elseif ($request->scope == "scope_one") {
            $emissions = ScopeOneEmissionData::with('category')->get();
        } elseif ($request->scope == "scope_two") {
            $emissions = ScopeTwoEmissionData::with('category')->get();
        } elseif ($request->scope == "scope_five") {
            $emissions = ScopeFiveEmissionData::with('category')->get();
        }
        // Get the latest record after combining
        $latestEmission = $emissions->sortByDesc('to_date')->first();
        // Determine the date 12 months ago from the latest emission date
        $startDate = \Carbon\Carbon::parse($latestEmission->to_date)->subMonths(11);

        // Generate all the months between start_date and end_date
        $months = $this->generateMonths($startDate, $latestEmission->to_date);

        // Filter emissions within the last 12 months
        $filteredEmissions = collect();

        foreach ($months  as $month) {
            foreach ($emissions as $emission) {
                if (in_array($month, $emission->available_in_months)) {
                    $filteredEmissions->push($emission);
                }
            }
        }
        //current org
        $organization = Organization::find($user->current_logged_in_organization)->first();

        //filter by current logged in organization
        $finalFiltered = $filteredEmissions->filter(function ($emission) use ($organization) {
            return $emission->organization_id == $organization->id;
        });

        return [
            "emissions" => $finalFiltered,
            "start_date" => $startDate,
            "end_date" => $latestEmission->to_date
        ];
    }

    public function generateMonths($start_date, $end_date)
    {
        // Create Carbon instances from the start and end dates
        $start = Carbon::parse($start_date)->startOfMonth();
        $end = Carbon::parse($end_date)->endOfMonth();

        // Generate the period of months between the start and end dates
        $period = CarbonPeriod::create($start, '1 month', $end);

        $months = [];

        // Iterate over the period and add each month to the array
        foreach ($period as $date) {
            $months[] = $date->format('Y-m'); // Format as 'YYYY-MM'
        }
        return $months;
    }
}
