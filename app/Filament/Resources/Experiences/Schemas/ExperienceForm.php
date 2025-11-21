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
                ->required(),
            Forms\Components\TextInput::make('position')
                ->required(),
            Forms\Components\DatePicker::make('start_date')
                ->default(now()->format('Y-m-d'))
                ->required(),
            Forms\Components\DatePicker::make('end_date')
                ->default(now()->format('Y-m-d')),
            Forms\Components\RichEditor::make('description')
                ->columnSpanFull()
                ->toolbarButtons([
                    'blockquote',
                    'bold',
                    'bulletList',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ]),
        ];
    }
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(self::getFormComponents());
    }
}