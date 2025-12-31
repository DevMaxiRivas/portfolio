<?php

namespace App\Repositories;

use App\Filters\ProjectFilter;
use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectRepository implements ProjectRepositoryInterface
{
    public function getAllProjects(): array
    {
        return Project::all()->toArray();
    }

    public function getTranslatedProjects()
    {
        return Project::join('project_translations', 'projects.id', '=', 'project_translations.project_id')  // Join con translations
            ->join('languages', 'project_translations.language_id', '=', 'languages.id')  // Join con languages
            ->where('languages.acronym', app()->getLocale())  // Filtra por acronym
            ->select(
                'project_translations.title as translated_title',
                'project_translations.description as translated_description',
                'projects.*'
            )
            ->paginate(4);
    }

    public function getProjectsByFilter(ProjectFilter $filter): Collection
    {
        return Project::filter(
            $filter
        )
            ->with('technologies')
            ->get();
    }
}
