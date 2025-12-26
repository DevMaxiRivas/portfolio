<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(__('database.tables.projects.columns.title'))
                    ->unique()
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('github_link')
                    ->label(__('database.tables.projects.columns.github_link')),
                TextInput::make('access_link')
                    ->label(__('database.tables.projects.columns.access_link')),
                Toggle::make('is_visible')
                    ->default(true)
                    ->label(__('database.tables.projects.columns.is_visible')),
                FileUpload::make('image_paths')
                    ->preserveFilenames()
                    ->label(__('database.tables.projects.columns.image_paths'))
                    ->storeFileNamesIn('image_names')
                    ->multiple()
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(20480) // 20 MB
                    ->disk('local')
                    ->directory(function (Get $get) {
                        return 'projects\\imagenes\\' . str_replace(" ",  "", $get('title'));
                    })
                    ->downloadable()
                    ->columnSpanFull(),
            ]);
    }
}
