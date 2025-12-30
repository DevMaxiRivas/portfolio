<?php

namespace App\Services;

use App\DTOs\ProjectShowCardDTO;
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

    public function getProjectsTranslated()
    {
        return new ProjectCollection(
            $this->repo->getTranslatedProjects()
        );
    }
}
