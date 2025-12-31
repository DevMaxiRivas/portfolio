<?php

namespace App\Interfaces;

use App\Filters\ProjectFilter;
use Illuminate\Database\Eloquent\Collection;

interface ProjectRepositoryInterface
{
    public function getAllProjects(): array;
    public function getTranslatedProjects();
    public function getProjectsByFilter(ProjectFilter $filter): Collection;
}
