<?php

namespace App\Repositories;

use App\Interfaces\Interfaces\StudyRepositoryInterface;
use App\Models\Study;

class StudyRepository implements StudyRepositoryInterface
{

    public function getAllStudies(): array
    {
        return Study::all()->toArray();
    }
}
