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
        $study_translations = array(
            array(
                "id" => 4,
                "institution_name" => "Universidad Nacional de Salta",
                "degree" => "Licenciado en Análisis de Sistemas",
                "field_of_study" => "Análisis de Sistemas",
                "description" => "Un analista de sistemas es responsable de analizar las necesidades de información de una organización y diseñar soluciones tecnológicas para satisfacer esas necesidades. Esto implica comprender los procesos de negocio, identificar áreas de mejora, proponer sistemas informáticos apropiados y colaborar con los desarrolladores para implementar estas soluciones.",
                "location" => "Salta, Argentina",
                "study_id" => 1,
                "language_id" => 2,
                "created_at" => "2025-12-29 13:52:26",
                "updated_at" => "2025-12-29 14:03:30"
            ),
            array(
                "id" => 5,
                "institution_name" => "Universidad Nacional de Salta",
                "degree" => "Técnico Universitario en Programación",
                "field_of_study" => "Programación",
                "description" => "Un técnico en programación es responsable de escribir, probar y mantener el código informático que compone los programas y aplicaciones. Esto implica traducir los requisitos del software en código de programación, depurar y corregir errores, así como optimizar y mejorar el rendimiento de las aplicaciones existentes.",
                "location" => "Salta, Argentina",
                "study_id" => 2,
                "language_id" => 2,
                "created_at" => "2025-12-29 13:53:08",
                "updated_at" => "2025-12-29 13:53:08"
            )
        );
        StudyTranslation::insert($study_translations);
    }
}
