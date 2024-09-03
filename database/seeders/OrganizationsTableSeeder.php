<?php
namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $org = Organization::where('name', 'Jaba Enterprises')->first();

        if (!$org) {
            Organization::create([
                'name' => 'Jaba Enterprises',
                'admin_user_id' => 1, // or the ID of an existing user
                'created_by' => 1, // or the ID of the user who created this organization
                'last_login' => now(), // or a specific timestamp if needed
                'status' => 'Active',
            ]);
        }
    }
}
