<?php

namespace App\Interfaces\Interfaces;

interface StudyRepositoryInterface
{
    public function getAllStudies(): array;
    public function getAllTranslatedStudies(): array;
}
