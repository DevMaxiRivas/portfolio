<?php

namespace App\Filament\Resources\Studies\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution_name')
                    ->required(),
                TextInput::make('degree')
                    ->required(),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date'),
                TextInput::make('field_of_study')
                    ->columnSpanFull()
                    ->default(null),
                Textarea::make('description')
                    ->columnSpanFull()
                    ->default(null),
                TextInput::make('certificate_link')
                    ->default(null),
                TextInput::make('location')
                    ->default(null),
            ]);
    }
}
