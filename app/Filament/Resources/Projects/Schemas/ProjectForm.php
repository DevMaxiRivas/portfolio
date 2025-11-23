<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Get;
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
                FileUpload::make('image_paths')
                    ->preserveFilenames()
                    ->label('Imagenes')
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