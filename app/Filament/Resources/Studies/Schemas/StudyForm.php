<?php

namespace App\Filament\Resources\Studies\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution_name')
                    ->label(__('database.tables.studies.columns.institution_name'))
                    ->required(),
                TextInput::make('degree')
                    ->label(__('database.tables.studies.columns.degree'))
                    ->required(),
                DatePicker::make('start_date')
                    ->label(__('database.tables.studies.columns.start_date'))
                    ->required(),
                DatePicker::make('end_date')
                    ->label(__('database.tables.studies.columns.end_date'))
                    ->default(null),
                TextInput::make('certificate_link')
                    ->label(__('database.tables.studies.columns.certificate_link'))
                    ->default(null),
                Toggle::make('is_visible')
                    ->label(__('database.tables.studies.columns.is_visible'))
                    ->default(true),
            ]);
    }
}
