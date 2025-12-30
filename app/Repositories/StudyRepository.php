<?php

namespace App\Repositories;

use App\Interfaces\StudyRepositoryInterface;
use App\Models\Study;

class StudyRepository implements StudyRepositoryInterface
{

    public function getAllStudies(): array
    {
        return Study::all()->toArray();
    }

    public function getStudiesTranslated()
    {
        return Study::join('study_translations', 'studies.id', '=', 'study_translations.study_id')  // Join con translations
            ->join('languages', 'study_translations.language_id', '=', 'languages.id')  // Join con languages
            ->where('languages.acronym', app()->getLocale())
            ->select(
                'studies.id',
                'studies.start_date',
                'studies.end_date',
                'studies.certificate_link',
                'study_translations.institution_name',
                'study_translations.degree',
                'study_translations.field_of_study',
                'study_translations.description',
                'study_translations.location'
            )
            ->paginate(10);
    }
}
