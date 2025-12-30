<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            array(
                "id" => 1,
                "name" => "Backend Development",
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            ),
            array(
                "id" => 2,
                "name" => "Frontend Development",
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            ),
            array(
                "id" => 3,
                "name" => "Mobile Development",
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            ),
            array(
                "id" => 4,
                "name" => "Data Science",
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            ),
            array(
                "id" => 5,
                "name" => "Machine Learning",
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            ),
            array(
                "id" => 6,
                "name" => "DevOps",
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            ),
            array(
                "id" => 7,
                "name" => "Database Management",
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            ),
            array(
                "id" => 8,
                "name" => "Version Control",
                "created_at" => "2025-12-29 13:45:46",
                "updated_at" => "2025-12-29 13:45:46"
            ),
            array(
                "id" => 9,
                "name" => "Programming",
                "created_at" => "2025-12-29 15:04:46",
                "updated_at" => "2025-12-29 15:04:46"
            )
        );
        Category::insert($categories);
    }
}
