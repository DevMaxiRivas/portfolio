<?php

namespace App\Services;

use App\Http\Resources\ExperienceCollection;
use App\Interfaces\ExperienceRepositoryInterface;

class ExperienceService
{
    protected final ExperienceRepositoryInterface $repo;
    public function __construct(ExperienceRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getExperiences(): ExperienceCollection
    {
        return new ExperienceCollection(
            $this->repo->getExperiencesTranslated()
        );
    }
}
