<?php

namespace App\Services;

use App\DTOs\ProjectShowDTO;
use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;

class ProjectService
{
    private ProjectRepositoryInterface $repo;

    public function __construct(ProjectRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getAllProjects()
    {
        return $this->repo->getAllProjects()->map(fn($project) => ProjectShowDTO::fromModel($project)->toArray())->toArray();
    }
}
