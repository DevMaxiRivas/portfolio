<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Schemas\Schema;

// Filament
use Filament\Forms;

class ExperienceForm
{
    public static function getFormComponents(): array
    {
        return [
            Forms\Components\TextInput::make('company_name')
                ->label(__('database.tables.experiences.columns.company_name'))
                ->required(),
            Forms\Components\TextInput::make('position')
                ->label(__('database.tables.experiences.columns.position'))
                ->required(),
            Forms\Components\DatePicker::make('start_date')
                ->label(__('database.tables.experiences.columns.start_date'))
                ->default(now()->format('Y-m-d'))
                ->required(),
            Forms\Components\DatePicker::make('end_date')
                ->label(__('database.tables.experiences.columns.end_date'))
                ->default(now()->format('Y-m-d')),
            Forms\Components\Toggle::make('is_visible')
                ->label(__('database.tables.experiences.columns.is_visible'))
                ->default(true),
            Forms\Components\Select::make('technologies')
                ->label(__('database.tables.experiences.columns.technologies'))
                ->multiple()
                ->preload()
                ->relationship('technologies', 'name')
                ->required()
        ];
    }
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(self::getFormComponents());
    }
}
