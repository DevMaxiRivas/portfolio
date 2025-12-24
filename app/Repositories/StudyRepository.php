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
        #No resuelve el problema con una traduccion por defecto
        // return Study::with(['translations.language'])
        //     ->whereHas('translations.language', function ($query) {
        //         $query->where('acronym', app()->getLocale());
        //     })
        //     ->get()
        //     ->toArray();
        return Study::join('study_translations', 'studies.id', '=', 'study_translations.study_id')  // Join con translations
            ->leftjoin('languages', 'study_translations.language_id', '=', 'languages.id')  // Join con languages
            ->where('languages.acronym', app()->getLocale())  // Filtra por acronym
            ->select('studies.*')  // Selecciona solo columnas de studies para evitar duplicados
            ->with(['translations.language'])  // Carga relaciones (opcional, pero recomendado si necesitas los datos)
            ->distinct()  // Evita duplicados si hay múltiples traducciones por estudio
            ->get()
            ->toArray();
    }
}
