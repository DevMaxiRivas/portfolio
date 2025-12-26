<?php

namespace App\Services;

use App\DTOs\StudyShowDTO;
use App\Interfaces\StudyRepositoryInterface;

class StudyService
{
    protected final StudyRepositoryInterface $repo;
    public function __construct(StudyRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getAllStudies(): array
    {
        // dd($this->repo->getAllTranslatedStudies());
        return array_map(
            fn($project) => StudyShowDTO::fromArray($project)->toArray(),
            $this->repo->getAllTranslatedStudies()
        );
    }
}
