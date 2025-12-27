<?php

namespace App\Filament\Resources\Languages\Schemas;

use App\Enums\ProficiencyLevelLanguageEnum;
use App\Models\Language;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LanguageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('database.tables.languages.columns.name'))
                    ->required(),
                Select::make('proficiency_level')
                    ->label(__('database.tables.languages.columns.proficiency_level'))
                    ->options(ProficiencyLevelLanguageEnum::class),
                Textarea::make('acronym')
                    ->label(__('database.tables.languages.columns.acronym'))
                    ->columnSpanFull(),
            ]);
    }
}
