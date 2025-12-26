<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::insert([
            [
                'company_name' => 'HIERRONORT S.R.L.',
                'position' => 'Programmer Intern',
                'start_date' => '2024-07-23',
                'end_date' => '2025-07-28',
                // 'description' => "
                //     I led the analysis, design, and development of three critical systems (Certificate Manager, Visit Scheduling, and Customer Service) that optimized the operations of multiple departments, including Management, Purchasing, and Sales.
                //     I automated data entry and validation in the Certificate Manager system, eliminating written records and reducing the possibility of human error and the time spent on the task.
                //     I automated data entry and validation in the Certificate Manager system, eliminating paper records 
                //     and reducing the possibility of human error and the time spent on the task.
                //     I developed a complete web infrastructure by implementing NGINX as a reverse proxy to manage 
                //     access to multiple systems through subdomains, and I configured a DNS server using Docker and 
                //     BIND9 to manage internal domains.
                //     Designed and implemented the Customer Service system, introducing a banking-style queue system that 
                //     captured service metrics (arrival/departure times, service duration).
                // "
            ]
        ]);
    }
}