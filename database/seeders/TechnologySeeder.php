<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::insert(
            [
                ['category_id' => 1, 'name' => 'PHP', 'proficiency_level' => 'intermediate'],
                ['category_id' => 1, 'name' => 'JavaScript', 'proficiency_level' => 'intermediate'],
                ['category_id' => 1, 'name' => 'Laravel', 'proficiency_level' => 'intermediate'],
                ['category_id' => 1, 'name' => 'MySQL', 'proficiency_level' => 'intermediate'],
                ['category_id' => 1, 'name' => 'Git', 'proficiency_level' => 'intermediate'],
                ['category_id' => 1, 'name' => 'Docker', 'proficiency_level' => 'Intermediate'],
                ['category_id' => 1, 'name' => 'HTML5', 'proficiency_level' => 'intermediate'],
                ['category_id' => 1, 'name' => 'CSS3', 'proficiency_level' => 'intermediate'],
                ['category_id' => 1, 'name' => 'Python', 'proficiency_level' => 'intermediate'],
            ]
        );
    }
}
