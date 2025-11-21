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
                ['name' => 'PHP', 'proficiency_level' => 'Advanced'],
                ['name' => 'JavaScript', 'proficiency_level' => 'Advanced'],
                ['name' => 'Laravel', 'proficiency_level' => 'Advanced'],
                ['name' => 'MySQL', 'proficiency_level' => 'Advanced'],
                ['name' => 'Git', 'proficiency_level' => 'Advanced'],
                ['name' => 'Docker', 'proficiency_level' => 'Intermediate'],
                ['name' => 'HTML5', 'proficiency_level' => 'Advanced'],
                ['name' => 'CSS3', 'proficiency_level' => 'Advanced'],
                ['name' => 'Python', 'proficiency_level' => 'Intermediate'],
            ]
        );
    }
}