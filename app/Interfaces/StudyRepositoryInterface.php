<?php

namespace App\Interfaces;

interface StudyRepositoryInterface
{
    public function getAllStudies(): array;
    public function getAllTranslatedStudies(): array;
}
