<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(ProvicesCitiesTablesSeeder::class);
        $this->call(IndustriesTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(OrganizationBranchesTableSeeder::class);
        $this->call(ScopeOneEmissionCategoriesSeeder::class);
        $this->call(ScopeOneEmissionDataTableSeeder::class);
        $this->call(ScopeTwoEmissionCategoriesSeeder::class);
        $this->call(ScopeTwoEmissionDataTableSeeder::class);
        $this->call(ScopeFiveEmissionCategoriesSeeder::class);
        $this->call(ScopeFiveEmissionDataTableSeeder::class);

    }
}
