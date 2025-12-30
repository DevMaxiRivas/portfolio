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
        $technologies = array(
            array(
                "id" => 1,
                "name" => "PHP",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 2,
                "name" => "JavaScript",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 3,
                "name" => "Laravel",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 4,
                "name" => "MySQL",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 5,
                "name" => "Git",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 6,
                "name" => "Docker",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 7,
                "name" => "HTML5",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 8,
                "name" => "CSS3",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 9,
                "name" => "Python",
                "proficiency_level" => "intermediate",
                "created_at" => null,
                "updated_at" => null
            ),
            array(
                "id" => 10,
                "name" => "C",
                "proficiency_level" => "intermediate",
                "created_at" => "2025-12-29 15:05:51",
                "updated_at" => "2025-12-29 15:05:51"
            ),
            array(
                "id" => 11,
                "name" => "PostgreSQL",
                "proficiency_level" => "intermediate",
                "created_at" => "2025-12-29 15:06:55",
                "updated_at" => "2025-12-29 15:06:55"
            ),
            array(
                "id" => 12,
                "name" => "Django",
                "proficiency_level" => "beginner",
                "created_at" => "2025-12-29 15:15:24",
                "updated_at" => "2025-12-29 15:15:24"
            )
        );
        Technology::insert($technologies);
    }
}
