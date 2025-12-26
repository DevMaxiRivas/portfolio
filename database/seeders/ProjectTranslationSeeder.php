<?php

namespace Database\Seeders;

use App\Models\ProjectTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_translations = array(
            array(
                "id" => 1,
                "title" => "Lenguaje de Programación ALEPH",
                "description" => " Prueba",
                "project_id" => 1,
                "language_id" => 2,
                "created_at" => "2025-12-26 14:42:38",
                "updated_at" => "2025-12-26 14:42:38"
            ),
            array(
                "id" => 2,
                "title" => "ALEPH Language Programming",
                "description" => "Description in english",
                "project_id" => 1,
                "language_id" => 1,
                "created_at" => "2025-12-26 17:50:32",
                "updated_at" => "2025-12-26 17:50:32"
            ),
            array(
                "id" => 3,
                "title" => "CRUD hecho con PHP y PostgreSQL",
                "description" => "Descripcion en español",
                "project_id" => 2,
                "language_id" => 2,
                "created_at" => "2025-12-26 17:53:07",
                "updated_at" => "2025-12-26 17:53:07"
            )
        );

        ProjectTranslation::insert($project_translations);
    }
}
