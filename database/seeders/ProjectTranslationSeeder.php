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
                "id" => 4,
                "title" => "Sistema de Reserva de Boletos",
                "description" => "Aplicación web desarrollada para la empresa Tren A Las Nubes que gestiona la reserva de boletos y la compra de productos y platos dentro de sus transportes.",
                "project_id" => 5,
                "language_id" => 2,
                "created_at" => "2025-12-29 13:53:43",
                "updated_at" => "2025-12-29 13:53:43"
            ),
            array(
                "id" => 5,
                "title" => "Lenguaje de Programación ALEPH",
                "description" => "Lenguaje de programación capaz de modelar estructuras matemáticas de conjuntos y listas de tal forma que los programadores puedan manipular y operar con estas estructuras.",
                "project_id" => 1,
                "language_id" => 2,
                "created_at" => "2025-12-29 13:55:52",
                "updated_at" => "2025-12-29 13:55:52"
            ),
            array(
                "id" => 6,
                "title" => "CRUD realizado con PHP y PostgreSQL",
                "description" => "CRUD es el acrónimo de Create (crear), Read (leer), Update (actualizar) y Delete (eliminar). Este concepto se utiliza para describir las operaciones básicas que se realizan en la mayoría de las bases de datos y sistemas de gestión de la información.",
                "project_id" => 2,
                "language_id" => 2,
                "created_at" => "2025-12-29 13:56:28",
                "updated_at" => "2025-12-29 13:56:28"
            ),
            array(
                "id" => 7,
                "title" => "API Rest realizada con PHP y PSQL",
                "description" => "Las API permiten interactuar con una computadora o sistema para obtener datos o ejecutar una función, de manera que el sistema entienda la solicitud y la cumpla.",
                "project_id" => 3,
                "language_id" => 2,
                "created_at" => "2025-12-29 13:57:31",
                "updated_at" => "2025-12-29 13:57:31"
            ),
            array(
                "id" => 8,
                "title" => "Mi SItio WEB",
                "description" => "Mi sitio web es una forma de presentarme y mostrar mis mejores trabajos de manera organizada y fácilmente accesible.",
                "project_id" => 4,
                "language_id" => 2,
                "created_at" => "2025-12-29 14:01:22",
                "updated_at" => "2025-12-29 14:01:22"
            ),
            array(
                "id" => 9,
                "title" => "ALEPH Programming Language",
                "description" => "<p>Programming language capable of modeling set and list mathematical structures in such a way that programmers are able to manipulate and operate with these structures.<\/p>",
                "project_id" => 1,
                "language_id" => 1,
                "created_at" => "2025-12-29 15:19:05",
                "updated_at" => "2025-12-29 15:19:05"
            ),
            array(
                "id" => 10,
                "title" => "CRUD made with PHP and PostgreSQL",
                "description" => "<p>CRUD is the acronym for Create, Read, Update and Delete. This concept is used to describe the basic operations performed in most databases and information management systems.<\/p>",
                "project_id" => 2,
                "language_id" => 1,
                "created_at" => "2025-12-29 15:19:43",
                "updated_at" => "2025-12-29 15:19:43"
            ),
            array(
                "id" => 11,
                "title" => "API Rest made with PHP and PSQL",
                "description" => "<p>APIs allow you to interact with a computer or system to obtain data or execute a function, so that the system understands the request and fulfills it.<\/p>",
                "project_id" => 3,
                "language_id" => 1,
                "created_at" => "2025-12-29 15:20:13",
                "updated_at" => "2025-12-29 15:20:13"
            ),
            array(
                "id" => 12,
                "title" => "My Website",
                "description" => "<p>My website is a way for me to introduce myself and showcase my best work in an organized and easily accessible way.<\/p>",
                "project_id" => 4,
                "language_id" => 1,
                "created_at" => "2025-12-29 15:20:49",
                "updated_at" => "2025-12-29 15:20:49"
            ),
            array(
                "id" => 13,
                "title" => "Ticket Reservation System",
                "description" => "<p>Web application developed for the company Tren A Las Nubes, which manages ticket reservations and the purchase of products and meals on its trains.<\/p>",
                "project_id" => 5,
                "language_id" => 1,
                "created_at" => "2025-12-29 15:21:37",
                "updated_at" => "2025-12-29 15:21:37"
            )
        );

        ProjectTranslation::insert($project_translations);
    }
}
