<?php

namespace Database\Seeders;

use App\Models\CategoryTechnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_technology = array(
            array(
                "category_id" => 1,
                "technology_id" => 1
            ),
            array(
                "category_id" => 2,
                "technology_id" => 2
            ),
            array(
                "category_id" => 1,
                "technology_id" => 3
            ),
            array(
                "category_id" => 7,
                "technology_id" => 4
            ),
            array(
                "category_id" => 8,
                "technology_id" => 5
            ),
            array(
                "category_id" => 6,
                "technology_id" => 6
            ),
            array(
                "category_id" => 2,
                "technology_id" => 7
            ),
            array(
                "category_id" => 2,
                "technology_id" => 8
            ),
            array(
                "category_id" => 4,
                "technology_id" => 9
            ),
            array(
                "category_id" => 1,
                "technology_id" => 9
            )
        );
        CategoryTechnology::insert($category_technology);
    }
}