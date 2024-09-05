<?php

namespace Database\Seeders;

use App\Models\ScopeOneEmissionData;
use App\Models\ScopeFiveEmissionData;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScopeFiveEmissionDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $scope_five_emission_inventory = [
            [
                "id" => 13,
                "from_date" => "2023-05-01",
                "to_date" => "2024-04-30",
                "units" => 50000.00,
                "unit_of_measurements" => "km",
                "vehicle_type" => NULL,
                "location" => "13",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 93,
                "other_fields" => NULL,
                "created_at" => "2024-07-15 14:43:25",
                "updated_at" => "2024-07-15 14:43:25",
                "total_ghg" => 31.07,
            ],
            [
                "id" => 14,
                "from_date" => "2023-05-01",
                "to_date" => "2024-04-30",
                "units" => 107500.00,
                "unit_of_measurements" => "km",
                "vehicle_type" => NULL,
                "location" => "14",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 93,
                "other_fields" => NULL,
                "created_at" => "2024-07-15 14:44:14",
                "updated_at" => "2024-07-15 14:44:14",
                "total_ghg" => 66.80,
            ],
            [
                "id" => 15,
                "from_date" => "2024-05-01",
                "to_date" => "2023-04-30",
                "units" => 13750.00,
                "unit_of_measurements" => "km",
                "vehicle_type" => NULL,
                "location" => "12",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 93,
                "other_fields" => NULL,
                "created_at" => "2024-07-15 14:45:03",
                "updated_at" => "2024-07-15 14:45:03",
                "total_ghg" => 8.54,
            ],
            [
                "id" => 16,
                "from_date" => "2024-05-01",
                "to_date" => "2023-04-30",
                "units" => 10000.00,
                "unit_of_measurements" => "km",
                "vehicle_type" => NULL,
                "location" => "11",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 93,
                "other_fields" => NULL,
                "created_at" => "2024-07-15 14:45:56",
                "updated_at" => "2024-07-15 14:45:56",
                "total_ghg" => 6.21,
            ],
            [
                "id" => 21,
                "from_date" => "2024-01-23",
                "to_date" => "2024-09-23",
                "units" => 899565.00,
                "unit_of_measurements" => "km",
                "vehicle_type" => NULL,
                "location" => "13",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 93,
                "other_fields" => NULL,
                "created_at" => "2024-08-26 15:58:46",
                "updated_at" => "2024-08-26 15:58:46",
                "total_ghg" => 558.99,
            ],
        ];


        //truncate all Scope One Data
        ScopeFiveEmissionData::truncate();
        foreach ($scope_five_emission_inventory as $data) {
            // Calculate the number of months between from_date and to_date
            $from_date = Carbon::parse($data['from_date']);
            $to_date = Carbon::parse($data['to_date']);
            $months = $from_date->diffInMonths($to_date) + 1; // +1 to include the start month

            // Calculate emissions per month
            $emissions_per_month = $months > 0 ? $data['total_ghg'] / $months : $data['total_ghg'];

            // Insert data into ScopeFiveEmissionData model
            ScopeFiveEmissionData::create([
                'id'=> $data['id'],
                'organization_branch_id' => $data['location'],
                'category_id' => $data['category_id'],
                'user_id' => $data['user_id'],
                'from_date' => $data['from_date'],
                'to_date' => $data['to_date'],
                'units' => $data['units'],
                'unit_of_measurement' => $data['unit_of_measurements'],
                'emissions_per_month' => $emissions_per_month,
                'total_ghg' => $data['total_ghg'],
            ]);
        }

    }
}
