<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array(
                "id" => 1,
                "title" => "ALEPH Programming Language",
                "github_link" => "https://github.com/DevMaxiRivas/ALEPH_Lenguaje_de_Programacion",
                "access_link" => "https://github.com/DevMaxiRivas/ALEPH_Lenguaje_de_Programacion",
                "relevance_level" => 1,
                "is_visible" => 1,
                "created_at" => null,
                "updated_at" => "2025-12-30 14:13:15"
            ),
            array(
                "id" => 2,
                "title" => "CRUD made with PHP and PostgreSQL",
                "github_link" => "https://github.com/DevMaxiRivas/CRUD_PHP_PostgreSQL",
                "access_link" => "https://github.com/DevMaxiRivas/CRUD_PHP_PostgreSQL",
                "relevance_level" => 1,
                "is_visible" => 1,
                "created_at" => null,
                "updated_at" => "2025-12-30 14:15:50"
            ),
            array(
                "id" => 3,
                "title" => "API Rest made with PHP and PSQL",
                "github_link" => "https://github.com/DevMaxiRivas/API-Rest_PHP-PSQL",
                "access_link" => "https://github.com/DevMaxiRivas/API-Rest_PHP-PSQL",
                "relevance_level" => 1,
                "is_visible" => 1,
                "created_at" => null,
                "updated_at" => "2025-12-30 14:16:00"
            ),
            array(
                "id" => 4,
                "title" => "My Website",
                "github_link" => "https://github.com/DevMaxiRivas/My_Website",
                "access_link" => "https://github.com/DevMaxiRivas/My_Website",
                "relevance_level" => 1,
                "is_visible" => 1,
                "created_at" => null,
                "updated_at" => "2025-12-29 14:01:30"
            ),
            array(
                "id" => 5,
                "title" => "Ticket Reservation System",
                "github_link" => "https://github.com/DevMaxiRivas/Sistema-de-Reserva-de-Boletos",
                "access_link" => "https://github.com/DevMaxiRivas/Sistema-de-Reserva-de-Boletos",
                "relevance_level" => 1,
                "is_visible" => 1,
                "created_at" => null,
                "updated_at" => "2025-12-29 13:53:48"
            )
        );

        Project::insert($projects);
    }
}
