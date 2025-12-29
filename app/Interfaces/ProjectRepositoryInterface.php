<?php

namespace App\Interfaces;

interface ProjectRepositoryInterface
{
    public function getAllProjects(): array;
    public function getAllTranslatedProjects();
}
