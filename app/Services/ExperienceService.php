<?php

namespace App\Services;

use App\DTOs\ExperienceFilterDTO;
use App\Filters\ExperienceFilter;
use App\Http\Resources\ExperienceCollection;
use App\Interfaces\ExperienceRepositoryInterface;

class ExperienceService
{
    protected final ExperienceRepositoryInterface $repo;
    public function __construct(ExperienceRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getExperiences(ExperienceFilterDTO $filter, ?int $paginate)
    {
        return new ExperienceCollection(
            $this->repo->getExperiencesByFilter(
                filter: new ExperienceFilter(
                    $filter->toArray()
                ),
                paginate: $paginate,
            )
        );
    }
}
