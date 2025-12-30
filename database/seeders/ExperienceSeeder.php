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
        $experiences = array(
            array(
                "id" => 1,
                "company_name" => "HIERRONORT S.R.L.",
                "position" => "Programmer Intern",
                "start_date" => "2024-07-23",
                "end_date" => "2025-07-28",
                "is_visible" => 1,
                "created_at" => "2025-12-29 13:45:01",
                "updated_at" => "2025-12-29 13:45:01"
            )
        );
        Experience::insert($experiences);
    }
}
