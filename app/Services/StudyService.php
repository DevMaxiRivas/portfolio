<?php

namespace App\Services;

use App\DTOs\StudyShowCardDTO;
use App\Http\Resources\StudyCollection;
use App\Interfaces\StudyRepositoryInterface;

class StudyService
{
    protected StudyRepositoryInterface $repo;
    public function __construct(StudyRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getStudies(): StudyCollection
    {
        return new StudyCollection($this->repo->getStudiesTranslated());
    }
}
