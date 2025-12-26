<?php

namespace App\Repositories;

use App\Interfaces\ExperienceRepositoryInterface;
use App\Models\Experience;

class ExperienceRepository implements ExperienceRepositoryInterface
{

    public function getAllStudies(): array
    {
        return Experience::all()->toArray();
    }

    public function getAllTranslated(): array
    {
        return Experience::join('experience_translations', 'experiences.id', '=', 'experience_translations.experience_id')  // Join con translations
            ->join('languages', 'experience_translations.language_id', '=', 'languages.id')  // Join con languages
            ->where('languages.acronym', app()->getLocale())  // Filtra por acronym
            ->select('experience_translations.*', 'experiences.start_date', 'experiences.end_date')
            ->get()
            ->toArray();
    }
}
