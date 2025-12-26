<?php

namespace Database\Seeders;

use App\Models\StudyTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            array(
                "id" => 1,
                "institution_name" => "National University of Salta",
                "degree" => "Bachelor's Degree in Systems Analysis",
                "field_of_study" => null,
                "description" => "A systems analyst is responsible for analyzing an organization's information needs and designing technology solutions to meet those needs. This involves understanding business processes, identifying areas for improvement, proposing appropriate IT systems and collaborating with developers to implement these solutions.",
                "location" => "Salta City, Argentina",
                "study_id" => 1,
                "language_id" => 1,
            ),
            array(
                "id" => 2,
                "institution_name" => "UNSA",
                "degree" => "Analista de Sisemas",
                "field_of_study" => null,
                "description" => "Descripcion en Español",
                "location" => "Ciudad Salta, Argentina",
                "study_id" => 1,
                "language_id" => 2,
            ),
            array(
                "id" => 3,
                "institution_name" => "UNSA",
                "degree" => "Tecnico en programacion",
                "field_of_study" => null,
                "description" => "Descripcion en spanish",
                "location" => "Salta, Argentina",
                "study_id" => 2,
                "language_id" => 2,
            )
        );
        StudyTranslation::insert($data);
    }
}
