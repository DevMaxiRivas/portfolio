<?php

namespace App\Services;

use App\DTOs\ProjectShowDTO;
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
        // dd($this->repo->getAllTranslatedProjects());
        return array_map(
            fn($project) => ProjectShowDTO::fromArray($project)->toArray(),
            $this->repo->getAllTranslatedProjects()
        );
    }
}
