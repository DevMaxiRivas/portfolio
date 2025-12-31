<?php

namespace App\Services;

use App\DTOs\ProjectFilterDTO;
use App\DTOs\ProjectShowCardDTO;
use App\Filters\ProjectFilter;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;
use Illuminate\Support\Facades\Log;

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

    public function getProjects(ProjectFilterDTO $filter, ?int $paginate)
    {
        return new ProjectCollection(
            $this->repo->getProjectsByFilter(
                filter: new ProjectFilter(
                    $filter->toArray()
                ),
                paginate: $paginate,
            )
        );
    }
}
