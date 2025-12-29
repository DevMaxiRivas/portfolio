<?php

namespace App\Services;

use App\DTOs\ProjectShowDTO;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;

class ProjectService
{
    protected final ProjectRepositoryInterface $repo;

    public function __construct(ProjectRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }
    public function getAllProjects(): array
    {
        return array_map(
            fn($project) => ProjectShowDTO::fromArray($project)->toArray(),
            $this->repo->getAllTranslatedProjects()
        );
    }

    public function getAllProjectsTranslated()
    {
        return new ProjectCollection(
            $this->repo->getAllTranslatedProjects()
        );
    }
}
