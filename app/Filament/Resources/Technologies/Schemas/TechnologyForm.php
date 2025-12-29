<?php

namespace App\Filament\Resources\Technologies\Schemas;

use App\Enums\ProficiencyLevelTechnologyEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TechnologyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('database.tables.technologies.columns.name'))
                    ->required(),
                Select::make('proficiency_level')
                    ->label(__('database.tables.technologies.columns.proficiency_level'))
                    ->required()
                    ->options(ProficiencyLevelTechnologyEnum::class),
                Select::make('categories')
                    ->label(__('database.tables.technologies.columns.categories'))
                    ->multiple()
                    ->preload()
                    ->relationship('categories', 'name')
                    ->required(),
            ]);
    }
}
