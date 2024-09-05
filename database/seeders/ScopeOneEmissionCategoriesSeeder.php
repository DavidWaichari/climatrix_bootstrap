<?php

namespace Database\Seeders;

use App\Models\ScopeOneEmissionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScopeOneEmissionCategoriesSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $scope_one_emission_inventory_categories = [
            [
                "id" => 1,
                "group" => "Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters",
                "name" => "Natural Gas: Heaters, furnaces, and stationary engines.",
                "form" => "naturalGasCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 53.11451,
            ],
            [
                "id" => 2,
                "group" => "Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters",
                "name" => "Propane",
                "form" => "naturalGasCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 61.70300,
            ],
            [
                "id" => 3,
                "group" => "Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters",
                "name" => "Bituminous Coal",
                "form" => "naturalGasCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 94.01200,
            ],
            [
                "id" => 4,
                "group" => "Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters",
                "name" => "Wood and Wood Residuals",
                "form" => "naturalGasCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 94.95560,
            ],
            [
                "id" => 5,
                "group" => "Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters",
                "name" => "Natural Gasoline",
                "form" => "naturalGasCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 67.12300,
            ],
            [
                "id" => 6,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Average Car - Diesel",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.27682,
            ],
            [
                "id" => 7,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Average Car - Petrol",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.29009,
            ],
            [
                "id" => 8,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Average Car - Hybrid",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.18307,
            ],
            [
                "id" => 9,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Average Car - Plug-in Hybrid Electric Vehicle",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.18455,
            ],
            [
                "id" => 10,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Average Car - Battery Electric Vehicle",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.09626,
            ],
            [
                "id" => 11,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Motorbike",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.18241,
            ],
            [
                "id" => 12,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Taxi - regular",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.14921,
            ],
            [
                "id" => 13,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Local Bus",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.10411,
            ],
            [
                "id" => 14,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Ferry - Average (all passenger)",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.11172,
            ],
            [
                "id" => 15,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Medium- and Heavy-Duty Truck",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 1.47004,
            ],
            [
                "id" => 16,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Aircraft",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 1.31865,
            ],
            [
                "id" => 17,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Vans - Average (up to 3.5 tonnes) - Diesel",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.40357,
            ],
            [
                "id" => 18,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Vans - Average (up to 3.5 tonnes) - Petrol",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.37929,
            ],
            [
                "id" => 19,
                "group" => "Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks",
                "name" => "Vans - Average (up to 3.5 tonnes) - Battery Electric Vehicle",
                "form" => "mobileCombustion",
                "created_at" => "2024-08-21 03:57:27",
                "updated_at" => "2024-08-21 03:57:27",
                "factor" => 0.10049,
            ],
        ];


        foreach ($scope_one_emission_inventory_categories as $item) {
           $scope_one = ScopeOneEmissionCategory::where('name', $item['name'])->first();

           if (!$scope_one) {
            ScopeOneEmissionCategory::create([
                'id'=>$item['id'],
                'group' => $item['group'],
                'name' => $item['name'],
                'factor' => $item['factor'],
            ]);
           }
        }
    }
}
