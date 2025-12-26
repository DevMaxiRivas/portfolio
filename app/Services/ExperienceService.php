<?php

namespace App\Services;

use App\DTOs\ExperienceShowDTO;
use App\Interfaces\ExperienceRepositoryInterface;

class ExperienceService
{
    protected final ExperienceRepositoryInterface $repo;
    public function __construct(ExperienceRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getAllExperiences(): array
    {
        // dd($this->repo->getAllTranslatedStudies());
        return array_map(
            fn($project) => ExperienceShowDTO::fromArray($project)->toArray(),
            $this->repo->getAllTranslated()
        );
    }
}
