<?php

namespace App\Repositories;

use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function getAllProjects(): array
    {
        return Project::all()->toArray();
    }

    public function getAllTranslatedProjects(): array
    {
        return Project::all()->map(function ($project) {
            return array_merge(
                $project->toArray(),
                [
                    'translated_title' => $project->translated_title,
                    'translated_description' => $project->translated_description,
                    'images_urls' => $project->images_urls,
                    'github_link' => $project->github_link,
                ]
            );
        })->toArray();
    }
}
