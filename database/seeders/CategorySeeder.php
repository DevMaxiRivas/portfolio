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
        Category::insert([
            ['name' => 'Backend Development'],
            ['name' => 'Frontend Development'],
            ['name' => 'Mobile Development'],
            ['name' => 'Data Science'],
            ['name' => 'Machine Learning'],
            ['name' => 'DevOps'],
            ['name' => 'Database Management'],
            ['name' => 'Version Control'],
            ['name' => 'Containerization'],
        ]);
    }
}
