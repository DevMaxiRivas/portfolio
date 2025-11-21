<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('github_link'),
                TextInput::make('access_link'),
                Textarea::make('image_paths')
                    ->columnSpanFull(),
                Textarea::make('image_names')
                    ->columnSpanFull(),
            ]);
    }
}
