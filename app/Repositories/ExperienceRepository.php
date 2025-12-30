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

    public function getExperiencesTranslated()
    {
        return Experience::join('experience_translations', 'experiences.id', '=', 'experience_translations.experience_id')  // Join con translations
            ->join('languages', 'experience_translations.language_id', '=', 'languages.id')  // Join con languages
            ->where('languages.acronym', app()->getLocale())  // Filtra por acronym
            ->select(
                'experiences.id',
                'experiences.start_date',
                'experiences.end_date',
                'experience_translations.company_name as company_name',
                'experience_translations.position as position',
                'experience_translations.description as description'
            )
            ->paginate(4);
    }
}
