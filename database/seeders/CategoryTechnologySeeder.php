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
                "id" => 1,
                "category_id" => 1,
                "technology_id" => 1
            ),
            array(
                "id" => 2,
                "category_id" => 2,
                "technology_id" => 2
            ),
            array(
                "id" => 3,
                "category_id" => 1,
                "technology_id" => 3
            ),
            array(
                "id" => 4,
                "category_id" => 7,
                "technology_id" => 4
            ),
            array(
                "id" => 5,
                "category_id" => 8,
                "technology_id" => 5
            ),
            array(
                "id" => 6,
                "category_id" => 6,
                "technology_id" => 6
            ),
            array(
                "id" => 7,
                "category_id" => 2,
                "technology_id" => 7
            ),
            array(
                "id" => 8,
                "category_id" => 2,
                "technology_id" => 8
            ),
            array(
                "id" => 9,
                "category_id" => 4,
                "technology_id" => 9
            ),
            array(
                "id" => 10,
                "category_id" => 1,
                "technology_id" => 9
            ),
            array(
                "id" => 11,
                "category_id" => 9,
                "technology_id" => 10
            ),
            array(
                "id" => 12,
                "category_id" => 7,
                "technology_id" => 11
            ),
            array(
                "id" => 13,
                "category_id" => 1,
                "technology_id" => 12
            )
        );
        CategoryTechnology::insert($category_technology);
    }
}
