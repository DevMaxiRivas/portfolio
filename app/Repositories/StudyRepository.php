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

    public function getAllTranslatedStudies(): array
    {
        return Study::join('study_translations', 'studies.id', '=', 'study_translations.study_id')  // Join con translations
            ->join('languages', 'study_translations.language_id', '=', 'languages.id')  // Join con languages
            ->where('languages.acronym', app()->getLocale())  // Filtra por acronym
            ->select('study_translations.*', 'studies.start_date', 'studies.end_date', 'studies.certificate_link')
            ->get()
            ->toArray();
    }
}
