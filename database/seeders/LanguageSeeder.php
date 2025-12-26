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
                    'proficiency_level' => 1,
                    'acronym' => 'en',
                ],
                [
                    'name' => 'Spanish',
                    'proficiency_level' => 1,
                    'acronym' => 'es',
                ],
            ]
        );
    }
}
