<?php

namespace Database\Seeders;


use App\Models\ScopeFiveEmissionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScopeFiveEmissionCategoriesSeeder extends Seeder
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
                "id" => 71,
                "group" => "Purchased Goods and Services:  Emissions from the production of goods and services that the company purchases or acquires",
                "name" => "Raw materials (including water).",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:05",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 72,
                "group" => "Purchased Goods and Services:  Emissions from the production of goods and services that the company purchases or acquires",
                "name" => "Manufactured components and parts",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:05",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 73,
                "group" => "Purchased Goods and Services:  Emissions from the production of goods and services that the company purchases or acquires",
                "name" => "Contract manufacturing services",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:05",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 74,
                "group" => "Purchased Goods and Services:  Emissions from the production of goods and services that the company purchases or acquires",
                "name" => "Business services (consulting, legal, marketing)",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:05",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 75,
                "group" => "Capital Goods:  Emissions from the production of capital goods (e.g., buildings, machinery, and equipment) that the company uses",
                "name" => "Buildings and facilities",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 76,
                "group" => "Capital Goods:  Emissions from the production of capital goods (e.g., buildings, machinery, and equipment) that the company uses",
                "name" => "Machinery and equipment",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 77,
                "group" => "Capital Goods:  Emissions from the production of capital goods (e.g., buildings, machinery, and equipment) that the company uses",
                "name" => "Vehicles and transport equipment",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 78,
                "group" => "Capital Goods:  Emissions from the production of capital goods (e.g., buildings, machinery, and equipment) that the company uses",
                "name" => "IT hardware and infrastructure",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 79,
                "group" => "Investments: Emissions associated with investments made by the company, including financing and insurance services",
                "name" => "Mortgages",
                "form" => "forCsvUploadOnly",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "[\"Customer ID\",\"Address\",\"Mortgage Loan\",\"Mortgage LOC\",\"Current Balance\",\"Loan to Value Ratio\"]",
                "factor" => 0.00000,
            ],
            [
                "id" => 80,
                "group" => "Investments: Emissions associated with investments made by the company, including financing and insurance services",
                "name" => "Commercial Real Estate",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 81,
                "group" => "Investments: Emissions associated with investments made by the company, including financing and insurance services",
                "name" => "Business loans and unlisted equity",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 82,
                "group" => "Investments: Emissions associated with investments made by the company, including financing and insurance services",
                "name" => "Listed equity and corporate bonds",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 83,
                "group" => "Investments: Emissions associated with investments made by the company, including financing and insurance services",
                "name" => "Motor vehicle loans",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 84,
                "group" => "Investments: Emissions associated with investments made by the company, including financing and insurance services",
                "name" => "Sovereign debt",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 85,
                "group" => "Fuel- and Energy-Related Activities:  Indirect emissions related to the production of purchased fuels and electricity. This category does not include direct emissions (Scope 1) or indirect emissions from purchased electricity, heat, steam, or cooling (Scope 2)",
                "name" => "Indirect emissions related to the production of purchased fuels and electricity that are not covered in Scope 2",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 86,
                "group" => "Fuel- and Energy-Related Activities:  Indirect emissions related to the production of purchased fuels and electricity. This category does not include direct emissions (Scope 1) or indirect emissions from purchased electricity, heat, steam, or cooling (Scope 2)",
                "name" => "Project finance",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 87,
                "group" => "Fuel- and Energy-Related Activities:  Indirect emissions related to the production of purchased fuels and electricity. This category does not include direct emissions (Scope 1) or indirect emissions from purchased electricity, heat, steam, or cooling (Scope 2)",
                "name" => "Energy used in the production of goods not consumed by the company",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 88,
                "group" => "Upstream Transportation and Distribution:  Emissions from the transportation and distribution of products in the supply chain before they arrive at the reporting company, excluding activities owned or controlled by the company (which would be Scope 1 or 2)",
                "name" => "Transportation of raw materials to manufacturers",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 89,
                "group" => "Upstream Transportation and Distribution:  Emissions from the transportation and distribution of products in the supply chain before they arrive at the reporting company, excluding activities owned or controlled by the company (which would be Scope 1 or 2)",
                "name" => "Distribution of components to assembly plants",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 90,
                "group" => "Upstream Transportation and Distribution:  Emissions from the transportation and distribution of products in the supply chain before they arrive at the reporting company, excluding activities owned or controlled by the company (which would be Scope 1 or 2)",
                "name" => "Delivery of finished goods to warehouses or retail outlets",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 91,
                "group" => "Upstream Transportation and Distribution:  Emissions from the transportation and distribution of products in the supply chain before they arrive at the reporting company, excluding activities owned or controlled by the company (which would be Scope 1 or 2)",
                "name" => "Third-party logistics and freight services",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 92,
                "group" => "Travel:  Emissions from employee commuting or business travel, not controlled by the company.",
                "name" => "Business Travel",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-07-15 14:07:06",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 93,
                "group" => "Travel:  Emissions from employee commuting or business travel, not controlled by the company.",
                "name" => "Employee Commuting",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-07-15 14:07:06",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 94,
                "group" => "Upstream Leased Assets:  Emissions from the operation of assets that are leased by the company in its upstream value chain (i.e., assets leased by the company from another entity)",
                "name" => "Leased office buildings and spaces",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 95,
                "group" => "Upstream Leased Assets:  Emissions from the operation of assets that are leased by the company in its upstream value chain (i.e., assets leased by the company from another entity)",
                "name" => "Leased manufacturing facilities",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 96,
                "group" => "Upstream Leased Assets:  Emissions from the operation of assets that are leased by the company in its upstream value chain (i.e., assets leased by the company from another entity)",
                "name" => "Leased retail spaces",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 97,
                "group" => "Upstream Leased Assets:  Emissions from the operation of assets that are leased by the company in its upstream value chain (i.e., assets leased by the company from another entity)",
                "name" => "Leased vehicles and equipment",
                "form" => "forAll",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 98,
                "group" => "Waste Generated in Operations:  Emissions from the disposal and treatment of waste generated in the companyâ€™s operations",
                "name" => "Solid waste disposal and treatment",
                "form" => "wasteDisposal",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 99,
                "group" => "Waste Generated in Operations:  Emissions from the disposal and treatment of waste generated in the companyâ€™s operations",
                "name" => "Waste water treatment",
                "form" => "wasteDisposal",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 100,
                "group" => "Waste Generated in Operations:  Emissions from the disposal and treatment of waste generated in the companyâ€™s operations",
                "name" => "Hazardous waste treatment and disposal",
                "form" => "wasteDisposal",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 101,
                "group" => "Waste Generated in Operations:  Emissions from the disposal and treatment of waste generated in the companyâ€™s operations",
                "name" => "Recycling and waste reduction initiatives",
                "form" => "wasteDisposal",
                "created_at" => "2024-07-15 14:07:06",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 102,
                "group" => "Travel:  Emissions from employee commuting or business travel, not controlled by the company.",
                "name" => "Business Travel: Emissions from transportation for business-related travel by employees, not owned or controlled by the company.",
                "form" => "forAll",
                "created_at" => "2024-07-18 14:14:11",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
            [
                "id" => 103,
                "group" => "Travel:  Emissions from employee commuting or business travel, not controlled by the company.",
                "name" => "Employee Commuting: Emissions from transportation used by employees for commuting between their homes and their workplace.",
                "form" => "forAll",
                "created_at" => "2024-07-18 14:14:11",
                "updated_at" => "2024-08-21 03:57:27",
                "form_params" => "0",
                "factor" => 0.00000,
            ],
        ];


        foreach ($data as $item) {
            $scope_five = ScopeFiveEmissionCategory::where('name', $item['name'])->first();

            if (!$scope_five) {
                ScopeFiveEmissionCategory::create([
                    'id'=>$item['id'],
                    'group' => $item['group'],
                    'name' => $item['name'],
                    'factor' => $item['factor'],
                    "created_at" => $item['created_at'],
                    "updated_at" => $item['updated_at'],
                ]);
            }
         }
    }
}
