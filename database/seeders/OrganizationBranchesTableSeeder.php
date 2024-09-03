<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Organization;
use App\Models\OrganizationBranch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationBranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organization_branches = [
            [
                "id" => 5,
                "organization_id" => 3,
                "name" => "Toronto Branch",
                "city" => "Toronto",
                "size" => "10000",
                "revenue" => 25000000.00,
                "currency" => "CAD",
                "user_id" => 5,
                "other_fields" => "[]",
                "created_at" => "2024-04-27 13:46:09",
                "updated_at" => "2024-04-27 13:46:09",
                "total_employees" => 50,
            ],
            [
                "id" => 7,
                "organization_id" => 3,
                "name" => "BC",
                "city" => "BC",
                "size" => "25000",
                "revenue" => 50000000.00,
                "currency" => "CAD",
                "user_id" => 5,
                "other_fields" => "[]",
                "created_at" => "2024-04-27 13:48:01",
                "updated_at" => "2024-04-27 13:48:01",
                "total_employees" => 70,
            ],
            [
                "id" => 8,
                "organization_id" => 4,
                "name" => "Toronto",
                "city" => "City 1",
                "size" => "1000",
                "revenue" => 10000000.00,
                "currency" => "CAD",
                "user_id" => 6,
                "other_fields" => "[]",
                "created_at" => "2024-05-13 20:58:15",
                "updated_at" => "2024-05-13 20:58:15",
                "total_employees" => 12,
            ],
            [
                "id" => 9,
                "organization_id" => 4,
                "name" => "BC",
                "city" => "City 2",
                "size" => "2500",
                "revenue" => 20000000.00,
                "currency" => "CAD",
                "user_id" => 6,
                "other_fields" => "{\"isUpdate\": 1}",
                "created_at" => "2024-05-13 20:58:46",
                "updated_at" => "2024-05-13 20:59:34",
                "total_employees" => 20,
            ],
            [
                "id" => 10,
                "organization_id" => 4,
                "name" => "Van",
                "city" => "Van city",
                "size" => "3500",
                "revenue" => 15000000.00,
                "currency" => "CAD",
                "user_id" => 6,
                "other_fields" => "[]",
                "created_at" => "2024-05-14 18:46:46",
                "updated_at" => "2024-05-14 18:46:46",
                "total_employees" => 100,
            ],
            [
                "id" => 11,
                "organization_id" => 1,
                "name" => "Sorrento",
                "city" => "Sorrento",
                "size" => "3345",
                "revenue" => 795248333.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => "{\"isUpdate\": 1}",
                "created_at" => "2024-05-21 17:06:35",
                "updated_at" => "2024-05-21 17:26:15",
                "total_employees" => 8,
            ],
            [
                "id" => 12,
                "organization_id" => 1,
                "name" => "Sicamous",
                "city" => "Sicamous",
                "size" => "3435",
                "revenue" => 221925697.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => "[]",
                "created_at" => "2024-05-21 18:40:23",
                "updated_at" => "2024-05-21 18:40:23",
                "total_employees" => 11,
            ],
            [
                "id" => 13,
                "organization_id" => 1,
                "name" => "Uptown",
                "city" => "Salmon Arm",
                "size" => "23901",
                "revenue" => 225814991.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => "[]",
                "created_at" => "2024-05-21 18:45:19",
                "updated_at" => "2024-05-21 18:45:19",
                "total_employees" => 19,
            ],
            [
                "id" => 14,
                "organization_id" => 1,
                "name" => "Downtown",
                "city" => "Salmon Arm",
                "size" => "26116",
                "revenue" => 255814991.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => "[]",
                "created_at" => "2024-05-21 18:46:42",
                "updated_at" => "2024-05-21 18:46:42",
                "total_employees" => 107,
            ],
            [
                "id" => 15,
                "organization_id" => 3,
                "name" => "Vancouver City 2",
                "city" => "Vancouver",
                "size" => "5000",
                "revenue" => 100000000.00,
                "currency" => "CAD",
                "user_id" => 5,
                "other_fields" => "[]",
                "created_at" => "2024-06-04 12:28:05",
                "updated_at" => "2024-06-04 12:28:05",
                "total_employees" => 350,
            ],
            [
                "id" => 20,
                "organization_id" => 14,
                "name" => "Queue",
                "city" => "Nairobi",
                "size" => "100",
                "revenue" => 3100000.00,
                "currency" => "USD",
                "user_id" => 17,
                "other_fields" => "[]",
                "created_at" => "2024-06-07 09:53:38",
                "updated_at" => "2024-06-07 09:53:38",
                "total_employees" => 10,
            ],
            [
                "id" => 21,
                "organization_id" => 1,
                "name" => "Enderby",
                "city" => "British Columbia",
                "size" => "21000",
                "revenue" => 100000000.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => "{\"isUpdate\": 1}",
                "created_at" => "2024-07-04 03:22:16",
                "updated_at" => "2024-07-04 03:22:48",
                "total_employees" => 50,
            ],
            [
                "id" => 22,
                "organization_id" => 1,
                "name" => "Askew Food",
                "city" => "Salmon Arm",
                "size" => "18000",
                "revenue" => 120000000.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => "[]",
                "created_at" => "2024-07-04 03:31:47",
                "updated_at" => "2024-07-04 03:31:47",
                "total_employees" => 30,
            ],
            [
                "id" => 23,
                "organization_id" => 1,
                "name" => "Centenoka",
                "city" => "Salmon Arm",
                "size" => "19000",
                "revenue" => 250000000.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => "[]",
                "created_at" => "2024-07-04 03:32:50",
                "updated_at" => "2024-07-04 03:32:50",
                "total_employees" => 60,
            ],
            [
                "id" => 24,
                "organization_id" => 1,
                "name" => "Skillmind",
                "city" => "Nairobi",
                "size" => "5665",
                "revenue" => 6.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => NULL,
                "created_at" => "2024-08-23 13:09:34",
                "updated_at" => "2024-08-23 13:09:34",
                "total_employees" => 65,
            ],
            [
                "id" => 25,
                "organization_id" => 1,
                "name" => "Skillmind",
                "city" => "Nairobi",
                "size" => "556",
                "revenue" => 565656.00,
                "currency" => "CAD",
                "user_id" => 2,
                "other_fields" => NULL,
                "created_at" => "2024-08-23 13:10:00",
                "updated_at" => "2024-08-23 13:10:00",
                "total_employees" => 65656,
            ],
            [
                "id" => 27,
                "organization_id" => 1,
                "name" => "Hello",
                "city" => "Nice ",
                "size" => "to",
                "revenue" => 0.00,
                "currency" => "your ",
                "user_id" => 2,
                "other_fields" => NULL,
                "created_at" => "2024-08-23 13:11:29",
                "updated_at" => "2024-08-23 13:11:29",
                "total_employees" => 56,
            ],
        ];

        foreach ($organization_branches as $branch) {
            // Check if the branch already exists by name
            $available = OrganizationBranch::where('name', $branch['name'])->first();

            // Fetch the city ID using the city name
            $city = City::where('name', $branch['city'])->first();

            // If the branch does not exist and the city is found, create a new branch
            if (!$available && $city) {
                OrganizationBranch::create([
                    'organization_id' => $branch['organization_id'],
                    'name' => $branch['name'],
                    'city_id' => $city->id, // Use the city ID fetched from the City model
                    'size' => $branch['size'],
                    'revenue' => $branch['revenue'],
                    'total_employees' => $branch['total_employees'],
                ]);
            }
        }
    }
}
