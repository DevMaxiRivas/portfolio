<?php

namespace App\Interfaces;

interface ExperienceRepositoryInterface
{
    public function getAllStudies(): array;
    public function getAllTranslated(): array;
}
