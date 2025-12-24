<?php

namespace App\Services;

use App\Interfaces\Interfaces\StudyRepositoryInterface;

class StudyService
{
    protected final StudyRepositoryInterface $repo;
    public function __construct(StudyRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }
}
