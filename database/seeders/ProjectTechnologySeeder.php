<?php

namespace Database\Seeders;

use App\Models\ProjectTechnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_technology = array(
            array(
                "project_id" => 1,
                "technology_id" => 10
            ),
            array(
                "project_id" => 2,
                "technology_id" => 6
            ),
            array(
                "project_id" => 2,
                "technology_id" => 3
            ),
            array(
                "project_id" => 2,
                "technology_id" => 11
            ),
            array(
                "project_id" => 3,
                "technology_id" => 8
            ),
            array(
                "project_id" => 3,
                "technology_id" => 6
            ),
            array(
                "project_id" => 3,
                "technology_id" => 5
            ),
            array(
                "project_id" => 3,
                "technology_id" => 7
            ),
            array(
                "project_id" => 3,
                "technology_id" => 2
            ),
            array(
                "project_id" => 3,
                "technology_id" => 3
            ),
            array(
                "project_id" => 3,
                "technology_id" => 1
            ),
            array(
                "project_id" => 3,
                "technology_id" => 11
            ),
            array(
                "project_id" => 2,
                "technology_id" => 8
            ),
            array(
                "project_id" => 2,
                "technology_id" => 5
            ),
            array(
                "project_id" => 2,
                "technology_id" => 7
            ),
            array(
                "project_id" => 2,
                "technology_id" => 2
            ),
            array(
                "project_id" => 2,
                "technology_id" => 1
            ),
            array(
                "project_id" => 4,
                "technology_id" => 8
            ),
            array(
                "project_id" => 4,
                "technology_id" => 6
            ),
            array(
                "project_id" => 4,
                "technology_id" => 5
            ),
            array(
                "project_id" => 4,
                "technology_id" => 7
            ),
            array(
                "project_id" => 4,
                "technology_id" => 2
            ),
            array(
                "project_id" => 4,
                "technology_id" => 3
            ),
            array(
                "project_id" => 4,
                "technology_id" => 4
            ),
            array(
                "project_id" => 5,
                "technology_id" => 12
            ),
            array(
                "project_id" => 5,
                "technology_id" => 8
            ),
            array(
                "project_id" => 5,
                "technology_id" => 5
            ),
            array(
                "project_id" => 5,
                "technology_id" => 7
            ),
            array(
                "project_id" => 5,
                "technology_id" => 2
            ),
            array(
                "project_id" => 5,
                "technology_id" => 11
            ),
            array(
                "project_id" => 5,
                "technology_id" => 9
            )
        );
        ProjectTechnology::insert($project_technology);
    }
}
