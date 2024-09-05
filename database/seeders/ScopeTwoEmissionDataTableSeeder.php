<?php

namespace Database\Seeders;

use App\Models\ScopeOneEmissionData;
use App\Models\ScopeTwoEmissionData;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScopeTwoEmissionDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scope_two_emission_inventory = [
            [
                "id" => 1,
                "from_date" => "2023-01-01",
                "to_date" => "2023-06-01",
                "units" => 5000.00,
                "unit_of_measurements" => "kWh",
                "location" => "5",
                "organization_id" => 3,
                "user_id" => 5,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-01-01T03:21:00.000Z\", \"2023-06-01T03:21:00.000Z\"]}",
                "created_at" => "2024-06-28 02:22:14",
                "updated_at" => "2024-06-28 02:22:14",
                "total_ghg" => 0.0750000000,
            ],
            [
                "id" => 2,
                "from_date" => "2024-01-01",
                "to_date" => "2024-06-28",
                "units" => 25000.00,
                "unit_of_measurements" => "kWh",
                "location" => "7",
                "organization_id" => 3,
                "user_id" => 5,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2024-01-01T03:23:00.000Z\", \"2024-06-28T03:23:00.000Z\"]}",
                "created_at" => "2024-06-28 02:23:59",
                "updated_at" => "2024-06-28 02:23:59",
                "total_ghg" => 0.3750000000,
            ],
            [
                "id" => 3,
                "from_date" => "2024-01-01",
                "to_date" => "2024-06-28",
                "units" => 10000.00,
                "unit_of_measurements" => "MWh",
                "location" => "5",
                "organization_id" => 3,
                "user_id" => 5,
                "category_id" => 2,
                "other_fields" => "{\"date\": [\"2024-01-01T03:24:00.000Z\", \"2024-06-28T03:24:00.000Z\"]}",
                "created_at" => "2024-06-28 02:24:41",
                "updated_at" => "2024-06-28 02:24:41",
                "total_ghg" => 5400.0000000000,
            ],
            [
                "id" => 5,
                "from_date" => "2023-07-01",
                "to_date" => "2024-06-30",
                "units" => 140767.00,
                "unit_of_measurements" => "kWh",
                "location" => "11",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-07-01T03:35:00.000Z\", \"2024-06-30T03:35:00.000Z\"]}",
                "created_at" => "2024-07-04 02:36:09",
                "updated_at" => "2024-07-04 02:36:09",
                "total_ghg" => 2.1115050000,
            ],
            [
                "id" => 6,
                "from_date" => "2023-07-01",
                "to_date" => "2024-06-30",
                "units" => 82287.00,
                "unit_of_measurements" => "kWh",
                "location" => "22",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-07-01T04:35:00.000Z\", \"2024-06-30T04:35:00.000Z\"]}",
                "created_at" => "2024-07-04 03:35:23",
                "updated_at" => "2024-07-04 03:35:23",
                "total_ghg" => 1.2343050000,
            ],
            [
                "id" => 7,
                "from_date" => "2023-07-01",
                "to_date" => "2024-06-30",
                "units" => 25870.00,
                "unit_of_measurements" => "kWh",
                "location" => "23",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-07-01T04:36:00.000Z\", \"2024-06-30T04:36:00.000Z\"]}",
                "created_at" => "2024-07-04 03:36:55",
                "updated_at" => "2024-07-04 03:36:55",
                "total_ghg" => 0.3880500000,
            ],
            [
                "id" => 8,
                "from_date" => "2023-07-01",
                "to_date" => "2024-06-30",
                "units" => 941881.00,
                "unit_of_measurements" => "kWh",
                "location" => "14",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-07-01T04:37:00.000Z\", \"2024-06-30T04:37:00.000Z\"]}",
                "created_at" => "2024-07-04 03:38:01",
                "updated_at" => "2024-07-04 03:38:01",
                "total_ghg" => 14.1282150000,
            ],
            [
                "id" => 9,
                "from_date" => "2023-07-01",
                "to_date" => "2024-06-30",
                "units" => 48726.00,
                "unit_of_measurements" => "kWh",
                "location" => "21",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-07-01T04:38:00.000Z\", \"2024-06-30T04:38:00.000Z\"]}",
                "created_at" => "2024-07-04 03:38:54",
                "updated_at" => "2024-07-04 03:38:54",
                "total_ghg" => 0.7308900000,
            ],
            [
                "id" => 10,
                "from_date" => "2023-07-01",
                "to_date" => "2024-06-30",
                "units" => 131952.00,
                "unit_of_measurements" => "kWh",
                "location" => "12",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-07-01T04:39:00.000Z\", \"2024-06-30T04:39:00.000Z\"]}",
                "created_at" => "2024-07-04 03:39:43",
                "updated_at" => "2024-07-04 03:39:43",
                "total_ghg" => 1.9792800000,
            ],
            [
                "id" => 11,
                "from_date" => "2023-07-01",
                "to_date" => "2024-06-30",
                "units" => 480191.00,
                "unit_of_measurements" => "kWh",
                "location" => "13",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => "{\"date\": [\"2023-07-01T04:40:00.000Z\", \"2024-06-30T04:40:00.000Z\"]}",
                "created_at" => "2024-07-04 03:40:43",
                "updated_at" => "2024-07-04 03:40:43",
                "total_ghg" => 7.2028650000,
            ],
            [
                "id" => 15,
                "from_date" => "2024-08-15",
                "to_date" => "2024-08-16",
                "units" => 4554545.00,
                "unit_of_measurements" => "kWh",
                "location" => "13",
                "organization_id" => 1,
                "user_id" => 2,
                "category_id" => 1,
                "other_fields" => NULL,
                "created_at" => "2024-08-26 13:27:54",
                "updated_at" => "2024-08-26 13:28:23",
                "total_ghg" => 68.3181750000,
            ],
        ];

        //truncate all Scope One Data
        ScopeTwoEmissionData::truncate();
        foreach ($scope_two_emission_inventory as $data) {
            // Calculate the number of months between from_date and to_date
            $from_date = Carbon::parse($data['from_date']);
            $to_date = Carbon::parse($data['to_date']);
            $months = $from_date->diffInMonths($to_date) + 1; // +1 to include the start month

            // Calculate emissions per month
            $emissions_per_month = $months > 0 ? $data['total_ghg'] / $months : $data['total_ghg'];

            // Insert data into ScopeTwoEmissionData model
            ScopeTwoEmissionData::create([
                'id'=> $data['id'],
                'organization_id'=> $data['organization_id'],
                'organization_branch_id' => $data['location'],
                'category_id' => $data['category_id'],
                'user_id' => $data['user_id'],
                'from_date' => $data['from_date'],
                'to_date' => $data['to_date'],
                'units' => $data['units'],
                'unit_of_measurement' => $data['unit_of_measurements'],
                'emissions_per_month' => $emissions_per_month,
                'total_ghg' => $data['total_ghg'],
                "created_at" => $data['created_at'],
                "updated_at" => $data['updated_at'],
            ]);
        }

    }
}
