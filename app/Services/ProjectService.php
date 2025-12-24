<?php

namespace App\Services;

use App\DTOs\ProjectShowDTO;
use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;

class ProjectService
{
    private final ProjectRepositoryInterface $repo;

    public function __construct(ProjectRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    // public function getAllProjects()
    // {
    //     return $this->repo->getAllProjects()->map(fn($project) => ProjectShowDTO::fromModel($project)->toArray())->toArray();
    // }
    public function getAllProjects(): array
    {
        return array_map(
            fn($project) => ProjectShowDTO::fromArray($project)->toArray(),
            $this->repo->getAllTranslatedProjects()
        );
    }
}
