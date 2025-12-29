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
                ['name' => 'PHP', 'proficiency_level' => 'intermediate'],
                ['name' => 'JavaScript', 'proficiency_level' => 'intermediate'],
                ['name' => 'Laravel', 'proficiency_level' => 'intermediate'],
                ['name' => 'MySQL', 'proficiency_level' => 'intermediate'],
                ['name' => 'Git', 'proficiency_level' => 'intermediate'],
                ['name' => 'Docker', 'proficiency_level' => 'Intermediate'],
                ['name' => 'HTML5', 'proficiency_level' => 'intermediate'],
                ['name' => 'CSS3', 'proficiency_level' => 'intermediate'],
                ['name' => 'Python', 'proficiency_level' => 'intermediate'],
            ]
        );
    }
}
