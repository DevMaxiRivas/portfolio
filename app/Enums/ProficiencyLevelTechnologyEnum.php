<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProficiencyLevelTechnologyEnum: string implements HasLabel
{
    case Beginner = 'beginner';
    case Intermediate = 'intermediate';
    case Advanced = 'advanced';
    case Expert = 'expert';

    public function getLabel(): ?string
    {
        return __('database.enums.tables.languages.proficiency_level.' . $this->value);
    }
}
