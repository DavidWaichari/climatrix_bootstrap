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


        $data = [
            [
                'group' => 'Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters',
                'name' => 'Natural Gas: Heaters, furnaces, and stationary engines.',
                'factor' => 53.11451,
            ],
            [
                'group' => 'Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters',
                'name' => 'Propane',
                'factor' => 61.70300,
            ],
            [
                'group' => 'Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters',
                'name' => 'Bituminous Coal',
                'factor' => 94.01200,
            ],
            [
                'group' => 'Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters',
                'name' => 'Wood and Wood Residuals',
                'factor' => 94.95560,
            ],
            [
                'group' => 'Stationary Combustion: Combustion of Fuels in Owned or Controlled Boilers, Furnaces, and Heaters',
                'name' => 'Natural Gasoline',
                'factor' => 67.12300,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Average Car - Diesel',
                'factor' => 0.27682,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Average Car - Petrol',
                'factor' => 0.29009,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Average Car - Hybrid',
                'factor' => 0.18307,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Average Car - Plug-in Hybrid Electric Vehicle',
                'factor' => 0.18455,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Average Car - Battery Electric Vehicle',
                'factor' => 0.09626,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Motorbike',
                'factor' => 0.18241,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Taxi - regular',
                'factor' => 0.14921,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Local Bus',
                'factor' => 0.10411,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Ferry - Average (all passenger)',
                'factor' => 0.11172,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Medium- and Heavy-Duty Truck',
                'factor' => 1.47004,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Aircraft',
                'factor' => 1.31865,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Vans - Average (up to 3.5 tonnes) - Diesel',
                'factor' => 0.40357,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Vans - Average (up to 3.5 tonnes) - Petrol',
                'factor' => 0.37929,
            ],
            [
                'group' => 'Mobile Combustion: Emissions from the combustion of fuels in company-owned or controlled mobile sources, such as cars, trucks',
                'name' => 'Vans - Average (up to 3.5 tonnes) - Battery Electric Vehicle',
                'factor' => 0.10049,
            ],
        ];

        foreach ($data as $item) {
           $scope_one = ScopeOneEmissionCategory::where('name', $item['name'])->first();

           if (!$scope_one) {
            ScopeOneEmissionCategory::create([
                'group' => $item['group'],
                'name' => $item['name'],
                'factor' => $item['factor'],
            ]);
           }
        }
    }
}
