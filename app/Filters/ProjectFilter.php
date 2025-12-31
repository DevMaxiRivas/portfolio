<?php

namespace App\Filters;

class ProjectFilter extends QueryFilter
{
    // WHERE HAS THE TECHNOLOGY ID's
    public function technologiesIds(array $technologies_ids)
    {
        return $this->builder->whereHas('technologies', function ($query) use ($technologies_ids) {
            $query->whereIn('technologies.id', $technologies_ids);
        });
    }
    // WHERE HAS THE LANGUAGE ID
    public function languageId(string $language_id)
    {
        return $this->builder->with(['translations' => function ($query) use ($language_id) {
            $query->where('language_id', $language_id);
        }]);
    }

    public function languageAcronym(string $language_acronym)
    {
        return $this->builder->with(['translations' => function ($query) use ($language_acronym) {
            $query->whereHas('language', function ($query) use ($language_acronym) {
                $query->where('acronym', $language_acronym);
            });
        }]);
    }
}
