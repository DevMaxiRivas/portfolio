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
                // "description" => "Programming language capable of modeling set and list mathematical structures in such a way that programmers are able to manipulate and operate with these structures.",
                "github_link" => "https://github.com/DevMaxiRivas/ALEPH_Lenguaje_de_Programacion",
                "access_link" => "https://github.com/DevMaxiRivas/ALEPH_Lenguaje_de_Programacion",
            ),
            array(
                "id" => 2,
                "title" => "CRUD made with PHP and PostgreSQL",
                // "description" => "CRUD is the acronym for Create, Read, Update and Delete. This concept is used to describe the basic operations performed in most databases and information management systems.",
                "github_link" => "https://github.com/DevMaxiRivas/CRUD_PHP_PostgreSQL",
                "access_link" => "https://github.com/DevMaxiRivas/CRUD_PHP_PostgreSQL",
            ),
            array(
                "id" => 3,
                "title" => "API Rest made with PHP and PSQL",
                // "description" => "APIs allow you to interact with a computer or system to obtain data or execute a function, so that the system understands the request and fulfills it. ",
                "github_link" => "https://github.com/DevMaxiRivas/API-Rest_PHP-PSQL",
                "access_link" => "https://github.com/DevMaxiRivas/API-Rest_PHP-PSQL",
            ),
            array(
                "id" => 4,
                "title" => "My Website",
                // "description" => "My website is a way for me to introduce myself and showcase my best work in an organized and easily accessible way.",
                "github_link" => "https://github.com/DevMaxiRivas/My_Website",
                "access_link" => "https://github.com/DevMaxiRivas/My_Website",
            ),
            array(
                "id" => 5,
                "title" => "Ticket Reservation System",
                // "description" => "Web application developed for the company Tren A Las Nubes that manages the reservation of tickets and the purchase of products and dishes within their transports.",
                "github_link" => "https://github.com/DevMaxiRivas/Sistema-de-Reserva-de-Boletos",
                "access_link" => "https://github.com/DevMaxiRivas/Sistema-de-Reserva-de-Boletos",
            )
        );

        Project::insert($projects);
    }
}
