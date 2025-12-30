<?php

namespace Database\Seeders;

use App\Models\ExperienceTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceTranslationSeeder extends Seeder
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
                "description" => "<ul><li><p><strong>Lideré<\/strong> el análisis, diseño y desarrollo de tres sistemas críticos (Gestor de Certificados, Programación de Visitas y Atención al Cliente) que optimizaron la operatividad de múltiples departamentos, incluyendo Gerencia, Ventas y Despacho.<\/p><\/li><li><p><strong>Automatizé<\/strong> el registro y validación de datos en el sistema Gestor de Certificados, eliminando el registro por escrito y reduciendo la posibilidad de errores humanos y el tiempo dedicado a la tarea.<\/p><\/li><li><p><strong>Desarrollé<\/strong> una infraestructura web completa implementando NGINX como proxy inverso para gestionar el acceso a múltiples sistemas mediante subdominios, y configuré un servidor DNS mediante Docker y BIND9 para el manejo de dominios internos.<\/p><\/li><li><p><strong>Diseñé e implementé<\/strong> el sistema de Atención al Cliente, introduciendo un Turnero similar al bancario que capturó métricas de servicio (tiempos de llegada\/salida, duración de atención).<\/p><\/li><\/ul>",
                "experience_id" => 1,
                "language_id" => 2,
                "created_at" => "2025-12-26 19:35:26",
                "updated_at" => "2025-12-29 14:13:36"
            ),
            array(
                "id" => 2,
                "company_name" => "HIERRONORT SRL",
                "position" => "Programmer Intern",
                "description" => "<ul><li><p>I led the analysis, design, and development of three critical systems (Certificate Manager, Visit Scheduling, and Customer Service) that optimized the operations of multiple departments, including Management, Sales, and Dispatch.<\/p><\/li><li><p>I automated data entry and validation in the Certificate Manager system, eliminating paper records and reducing the possibility of human error and the time spent on the task.<\/p><\/li><li><p>I developed a complete web infrastructure by implementing NGINX as a reverse proxy to manage access to multiple systems through subdomains, and I configured a DNS server using Docker and BIND9 to manage internal domains.<\/p><\/li><li><p>I designed and implemented the Customer Service system, introducing a banking-style queue system that captured service metrics (arrival\/departure times, service duration).<\/p><\/li><\/ul>",
                "experience_id" => 1,
                "language_id" => 1,
                "created_at" => "2025-12-26 20:43:42",
                "updated_at" => "2025-12-29 15:22:22"
            )
        );

        ExperienceTranslation::insert($experience_translations);
    }
}
