<?php

namespace Database\Seeders;

use App\Models\Study;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Study::insert([
            [
                'institution_name' => 'National University of Salta',
                'degree' => "Bachelor's Degree in Systems Analysis",
                'field_of_study' => 'Analysis of Systems',
                'start_date' => '2021-03-14',
                'description' => "A systems analyst is responsible for analyzing an organization's information needs and designing technology solutions to meet those needs. This involves understanding business processes, identifying areas for improvement, proposing appropriate IT systems and collaborating with developers to implement these solutions.",
                'location' => 'Salta, Argentina',
            ],
            [
                'institution_name' => 'National University of Salta',
                'degree' => 'University Technician in Programming',
                'field_of_study' => 'Programming',
                'start_date' => '2021-03-14',
                'description' => "A programming technician is responsible for writing, testing and maintaining the computer code that makes up programs and applications. This involves translating software requirements into programming code, debugging and bug fixing, as well as optimizing and improving the performance of existing applications.",
                'location' => 'Salta, Argentina',
            ],
        ]);
    }
}
