<?php

namespace Database\Seeders;

use App\Models\ExperienceTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpericeTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experience_translations = array(
            array(
                "id" => 1,
                "company_name" => "HIERRONORT SRL",
                "position" => "Programador Pasante",
                "description" => "Descripción en español",
                "experience_id" => 1,
                "language_id" => 2,
                "created_at" => "2025-12-26 19:35:26",
                "updated_at" => "2025-12-26 19:35:26"
            ),
            array(
                "id" => 2,
                "company_name" => "HIERRONORT SRL",
                "position" => "Programmer Intern",
                "description" => "Description in english",
                "experience_id" => 1,
                "language_id" => 1,
                "created_at" => "2025-12-26 20:43:42",
                "updated_at" => "2025-12-26 20:43:42"
            )
        );

        ExperienceTranslation::insert($experience_translations);
    }
}
