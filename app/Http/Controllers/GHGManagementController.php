<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\ScopeFiveEmissionData;
use App\Models\ScopeOneEmissionData;
use App\Models\ScopeTwoEmissionData;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GHGManagementController extends Controller
{

    public function getGrossEmissionsByTime(Request $request)
    {
        $data = $this->fetchEmissions($request);
        $results_emissions = $data['emissions'];

        $start_date = $data['start_date'];
        $end_date = $data['end_date'];
        $gross_emissions_total = 0;

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
        $response = [];

        // Group months into chunks of 3 (for quarterly grouping)
        $grouped_months = array_chunk($months, 3);

        // Loop through each group of 3 months
        foreach ($grouped_months as $group_month) {
            $group_data = [];

            // Loop through each month in the group
            foreach ($group_month as $month) {
                $emissions_month_data = [];

                // Loop through each emission and check if it belongs to the current month
                foreach ($emissions as $emission) {
                    if (in_array($month, $emission->available_in_months)) {
                        $gross_emissions_total += $emission->emissions_per_month;
                        $emissions_month_data[] = $emission;
                    }
                }

                // Add the month's data to the group
                $group_data[] = [
                    "month" => $month,
                    "emissions" => $emissions_month_data,
                    "total_emissions" => collect($emissions_month_data)->sum('emissions_per_month')
                ];
            }

            // Add the group data to the response
            $response[] = $group_data;
        }

        return response()->json([
            'success' => true,
            'total_gross_emissions' => number_format($gross_emissions_total, 2),
            'data' => $response,
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
