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
        return Project::join('project_translations', 'projects.id', '=', 'project_translations.project_id')  // Join con translations
            ->join('languages', 'project_translations.language_id', '=', 'languages.id')  // Join con languages
            ->where('languages.acronym', app()->getLocale())  // Filtra por acronym
            ->select(
                'project_translations.title as translated_title',
                'project_translations.description as translated_description',
                'projects.*'
            )
            ->get()
            ->map(function ($project) {
                return array_merge(
                    $project->toArray(),
                    [
                        'images_urls' => $project->images_urls,
                        'tags' => $project->technologies->pluck('name')->toArray()
                    ]
                );
            })
            ->toArray();
    }
}
