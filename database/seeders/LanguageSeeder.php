<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::insert(
            [
                [
                    'name' => 'English',
                    'proficiency_level' => 'Fluent',
                    'acronym' => 'ENG',
                ],
                [
                    'name' => 'Spanish',
                    'proficiency_level' => 'Native',
                    'acronym' => 'ESP',
                ],
            ]
        );
    }
}