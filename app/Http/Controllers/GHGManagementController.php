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

        $emissions = collect();

        if ($request->scope == "all") {
            $emissions = $emissions->merge(ScopeOneEmissionData::with('category')->get());
            $emissions = $emissions->merge(ScopeTwoEmissionData::with('category')->get());
            $emissions = $emissions->merge(ScopeFiveEmissionData::with('category')->get());
        }
        elseif ($request->scope == "scope_one") {
            // If only scope two data is requested
            $emissions = ScopeOneEmissionData::with('category')->get();
        }
        elseif ($request->scope == "scope_two") {
            // If only scope two data is requested
            $emissions = ScopeTwoEmissionData::with('category')->get();
        }
        elseif ($request->scope == "scope_five") {
            // If only scope five data is requested
            $emissions = ScopeFiveEmissionData::with('category')->get();
        }

         // Get the latest record after combining
        return $latestEmission = $emissions->sortByDesc('to_date')->first();

    }

}
