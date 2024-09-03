<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScopeOneEmissionDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 11,
                'from_date' => '2023-06-28',
                'to_date' => '2023-12-31',
                'units' => 40000.00,
                'unit_of_measurements' => 'mmBtu',
                'location' => '7',
                'organization_id' => 3,
                'user_id' => 5,
                'other_fields' => json_encode([
                    'date' => [
                        '2023-06-28T07:24:00.000Z',
                        '2023-12-31T07:24:00.000Z'
                    ],
                    'isUpdate' => 1
                ]),
                'created_at' => '2024-06-27 06:24:59',
                'updated_at' => '2024-06-27 06:38:10',
                'category_id' => 1,
                'total_ghg' => 2124.5804000000,
            ],
            [
                'id' => 12,
                'from_date' => '2024-01-01',
                'to_date' => '2024-06-27',
                'units' => 25000.00,
                'unit_of_measurements' => 'mmBtu',
                'location' => '5',
                'organization_id' => 3,
                'user_id' => 5,
                'other_fields' => json_encode([
                    'date' => [
                        '2024-01-01T07:25:00.000Z',
                        '2024-06-27T07:25:00.000Z'
                    ],
                    'isUpdate' => 1
                ]),
                'created_at' => '2024-06-27 06:26:10',
                'updated_at' => '2024-06-27 06:36:46',
                'category_id' => 1,
                'total_ghg' => 1327.8627500000,
            ],
            [
                'id' => 13,
                'from_date' => '2023-05-01',
                'to_date' => '2023-06-27',
                'units' => 10000.00,
                'unit_of_measurements' => 'mmBtu',
                'location' => '7',
                'organization_id' => 3,
                'user_id' => 5,
                'other_fields' => json_encode([
                    'date' => [
                        '2023-05-01T07:38:00.000Z',
                        '2023-06-27T07:38:00.000Z'
                    ]
                ]),
                'created_at' => '2024-06-27 06:39:28',
                'updated_at' => '2024-06-27 06:39:28',
                'category_id' => 1,
                'total_ghg' => 531.1451000000,
            ],
            [
                'id' => 15,
                'from_date' => '2023-07-31',
                'to_date' => '2024-06-01',
                'units' => 337.00,
                'unit_of_measurements' => 'GJ',
                'location' => '11',
                'organization_id' => 1,
                'user_id' => 2,
                'other_fields' => json_encode([
                    'date' => [
                        '2023-07-31T03:29:00.000Z',
                        '2024-06-01T03:29:00.000Z'
                    ]
                ]),
                'created_at' => '2024-07-04 02:30:18',
                'updated_at' => '2024-07-04 02:30:18',
                'category_id' => 1,
                'total_ghg' => 16.9655377198,
            ],
            [
                'id' => 16,
                'from_date' => '2023-07-01',
                'to_date' => '2024-06-30',
                'units' => 139.00,
                'unit_of_measurements' => 'GJ',
                'location' => '21',
                'organization_id' => 1,
                'user_id' => 2,
                'other_fields' => json_encode([
                    'date' => [
                        '2023-07-01T04:24:00.000Z',
                        '2024-06-30T04:24:00.000Z'
                    ]
                ]),
                'created_at' => '2024-07-04 03:25:45',
                'updated_at' => '2024-07-04 03:25:45',
                'category_id' => 1,
                'total_ghg' => 6.9976550239,
            ],
            [
                'id' => 17,
                'from_date' => '2023-07-01',
                'to_date' => '2024-06-30',
                'units' => 2028.00,
                'unit_of_measurements' => 'GJ',
                'location' => '14',
                'organization_id' => 1,
                'user_id' => 2,
                'other_fields' => json_encode([
                    'date' => [
                        '2023-07-01T04:27:00.000Z',
                        '2024-06-30T04:27:00.000Z'
                    ]
                ]),
                'created_at' => '2024-07-04 03:28:00',
                'updated_at' => '2024-07-04 03:28:00',
                'category_id' => 1,
                'total_ghg' => 102.0952833700,
            ],
            [
                'id' => 18,
                'from_date' => '2023-07-01',
                'to_date' => '2024-06-30',
                'units' => 1035.00,
                'unit_of_measurements' => 'GJ',
                'location' => '13',
                'organization_id' => 1,
                'user_id' => 2,
                'other_fields' => json_encode([
                    'date' => [
                        '2023-07-01T04:28:00.000Z',
                        '2024-06-30T04:28:00.000Z'
                    ]
                ]),
                'created_at' => '2024-07-04 03:28:59',
                'updated_at' => '2024-07-04 03:28:59',
                'category_id' => 1,
                'total_ghg' => 52.1048413649,
            ],
            [
                'id' => 23,
                'from_date' => '2024-04-02',
                'to_date' => '2024-05-01',
                'units' => 10000.00,
                'unit_of_measurements' => 'km',
                'location' => '13',
                'organization_id' => 1,
                'user_id' => 2,
                'other_fields' => json_encode([
                    'date' => [
                        '2024-04-02T06:27:00.000Z',
                        '2024-05-01T06:27:00.000Z'
                    ]
                ]),
                'created_at' => '2024-07-18 05:27:51',
                'updated_at' => '2024-07-18 05:27:51',
                'category_id' => 6,
                'total_ghg' => 1.7200797337,
            ],
            [
                'id' => 24,
                'from_date' => '2024-07-02',
                'to_date' => '2024-07-17',
                'units' => 10000.00,
                'unit_of_measurements' => 'km',
                'location' => '13',
                'organization_id' => 1,
                'user_id' => 2,
                'other_fields' => json_encode([
                    'date' => [
                        '2024-07-02T06:27:00.000Z',
                        '2024-07-17T06:27:00.000Z'
                    ]
                ]),
                'created_at' => '2024-07-18 05:28:07',
                'updated_at' => '2024-07-18 05:28:07',
                'category_id' => 7,
                'total_ghg' => 1.8025356909,
            ],
            [
                'id' => 25,
                'from_date' => '2024-07-02',
                'to_date' => '2024-07-17',
                'units' => 10000.00,
                'unit_of_measurements' => 'km',
                'location' => '13',
                'organization_id' => 1,
                'user_id' => 2,
                'other_fields' => json_encode([
                    'date' => [
                        '2024-07-02T06:27:00.000Z',
                        '2024-07-17T06:27:00.000Z'
                    ]
                ]),
                'created_at' => '2024-07-18 05:28:25',
                'updated_at' => '2024-07-18 05:28:25',
                'category_id' => 9,
                'total_ghg' => 0.8490357011,
            ],
        ];
    }
}
