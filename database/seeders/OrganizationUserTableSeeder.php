<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationUserTableSeeder extends Seeder
{
    public function run()
    {
        $users_organizations = array(
            array(
                "id" => 1,
                "user_id" => 1,
                "organization_id" => 1,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-03-24 10:25:59",
                "updated_at" => "2024-03-24 10:25:59",
            ),
            array(
                "id" => 2,
                "user_id" => 2,
                "organization_id" => 1,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-03-24 08:36:05",
                "updated_at" => "2024-03-24 08:36:05",
            ),
            array(
                "id" => 3,
                "user_id" => 3,
                "organization_id" => 1,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-03-27 18:08:06",
                "updated_at" => "2024-03-27 18:08:06",
            ),
            array(
                "id" => 4,
                "user_id" => 4,
                "organization_id" => 2,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-03-31 05:04:35",
                "updated_at" => "2024-03-31 05:04:35",
            ),
            array(
                "id" => 5,
                "user_id" => 5,
                "organization_id" => 3,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-17 04:25:31",
                "updated_at" => "2024-04-17 04:25:31",
            ),
            array(
                "id" => 6,
                "user_id" => 6,
                "organization_id" => 4,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-19 12:18:49",
                "updated_at" => "2024-04-19 12:18:49",
            ),
            array(
                "id" => 7,
                "user_id" => 7,
                "organization_id" => 5,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-19 12:24:47",
                "updated_at" => "2024-04-19 12:24:47",
            ),
            array(
                "id" => 8,
                "user_id" => 8,
                "organization_id" => 6,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-19 12:43:27",
                "updated_at" => "2024-04-19 12:43:27",
            ),
            array(
                "id" => 9,
                "user_id" => 9,
                "organization_id" => 7,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-19 12:48:25",
                "updated_at" => "2024-04-19 12:48:25",
            ),
            array(
                "id" => 11,
                "user_id" => 11,
                "organization_id" => 8,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-25 15:45:54",
                "updated_at" => "2024-04-25 15:45:54",
            ),
            array(
                "id" => 12,
                "user_id" => 12,
                "organization_id" => 9,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-26 03:27:29",
                "updated_at" => "2024-04-26 03:27:29",
            ),
            array(
                "id" => 13,
                "user_id" => 13,
                "organization_id" => 10,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-27 16:23:04",
                "updated_at" => "2024-04-27 16:23:04",
            ),
            array(
                "id" => 14,
                "user_id" => 14,
                "organization_id" => 11,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-04-29 05:01:21",
                "updated_at" => "2024-04-29 05:01:21",
            ),
            array(
                "id" => 15,
                "user_id" => 15,
                "organization_id" => 12,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-05-08 17:49:12",
                "updated_at" => "2024-05-08 17:49:12",
            ),
            array(
                "id" => 16,
                "user_id" => 16,
                "organization_id" => 13,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-05-23 17:28:43",
                "updated_at" => "2024-05-23 17:28:43",
            ),
            array(
                "id" => 17,
                "user_id" => 17,
                "organization_id" => 14,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-05-29 14:25:28",
                "updated_at" => "2024-05-29 14:25:28",
            ),
            array(
                "id" => 18,
                "user_id" => 18,
                "organization_id" => 15,
                "status" => "ACTIVE",
                "switched_organization_type" => NULL,
                "created_at" => "2024-06-23 09:37:35",
                "updated_at" => "2024-06-23 09:37:35",
            ),
        );

        foreach ($users_organizations as $data) {
            // Check if the entry exists in the database table organization_user
            $exists = DB::table('organization_user')
                ->where('user_id', $data['user_id'])
                ->where('organization_id', $data['organization_id'])
                ->exists();

            if (!$exists) {
                // Create a new entry if it does not exist
                DB::table('organization_user')->insert(
                   [
                    "id" => $data['id'],
                    "user_id" => $data['user_id'],
                    "organization_id" => $data['organization_id'],
                    "status" => $data['status'],
                    "created_at" => $data['created_at'],
                    "updated_at" => $data['updated_at'],
                   ]
                );
            }
        }


    }
}
