<?php

namespace App\Interfaces;

use App\Filters\ExperienceFilter;

interface ExperienceRepositoryInterface
{
    public function getAllStudies(): array;
    public function getExperiencesByFilter(ExperienceFilter $filter, ?int $paginate = 10);
}
