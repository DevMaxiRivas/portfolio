<?php

namespace App\Repositories;

use App\Filters\ExperienceFilter;
use App\Interfaces\ExperienceRepositoryInterface;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Collection;

class ExperienceRepository implements ExperienceRepositoryInterface
{

    public function getAllStudies(): array
    {
        return Experience::all()->toArray();
    }

    public function getExperiencesByFilter(ExperienceFilter $filter, ?int $paginate = 10)
    {
        return Experience::filter(
            $filter
        )
            ->with('technologies')
            ->paginate($paginate);
    }
}
