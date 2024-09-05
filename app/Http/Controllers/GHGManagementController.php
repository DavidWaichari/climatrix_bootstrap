<?php

namespace App\Http\Controllers;

use App\Models\ScopeFiveEmissionData;
use App\Models\ScopeOneEmissionData;
use App\Models\ScopeTwoEmissionData;
use Illuminate\Http\Request;

class GHGManagementController extends Controller
{

    public function getGrossEmissions(Request $request)
    {
        return $emissions = $this->grossEmissionsCalculator($request);
    }


    public function grossEmissionsCalculator(Request $request)
{
    $emissions = $this->fetchEmissions($request);



    if ($latestEmission) {


        // Group the emissions by month
        $groupedEmissions = $filteredEmissions->groupBy(function ($date) {
            return \Carbon\Carbon::parse($date->to_date)->format('Y-m');
        });

        // Calculate the total emissions
        $totalEmissions = $filteredEmissions->sum('emissions_per_month');

        // Return the grouped emissions along with the total emissions
        return response()->json([
            'success' => true,
            'data' => $groupedEmissions,
            'total_emissions' => $totalEmissions,
        ]);
    } else {
        // Handle the case where no emissions were found
        return response()->json([
            'success' => false,
            'message' => 'No emissions data found.',
        ]);
    }
}


    public function fetchEmissions(Request $request)
    {
        $emissions = collect();
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
        $startDate = \Carbon\Carbon::parse($latestEmission->to_date)->subMonths(12);

        // Filter emissions within the last 12 months
        $filteredEmissions = $emissions->filter(function ($emission) use ($startDate, $latestEmission) {
            return \Carbon\Carbon::parse($emission->to_date)->between($startDate, $latestEmission->to_date);
        });

        return $filteredEmissions ;
    }
}
