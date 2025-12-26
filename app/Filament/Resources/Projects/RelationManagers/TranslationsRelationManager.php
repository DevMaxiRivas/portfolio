<?php

namespace App\Filament\Resources\Projects\RelationManagers;

use Dom\Text;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class TranslationsRelationManager extends RelationManager
{
    protected static string $relationship = 'translations';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('database.tables.translation_projects.plural');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(__('database.tables.translation_projects.columns.title'))
                    ->required()
                    ->maxLength(255),
                Select::make('language_id')
                    ->label(__('database.tables.translation_projects.columns.language'))
                    ->relationship('language', 'acronym')
                    ->getOptionLabelFromRecordUsing(fn(Model $record) => strtoupper($record->acronym))
                    ->required(),
                Hidden::make('project_id')
                    ->default(fn() => $this->ownerRecord->id),
                Textarea::make('description')
                    ->label(__('database.tables.translation_projects.columns.description'))
                    ->required()
                    ->columnSpanFull()
                    ->nullable(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
                    ->label(__('database.tables.translation_projects.columns.title'))
                    ->searchable(),
                TextColumn::make('language.name')
                    ->label(__('database.tables.translation_projects.columns.language'))
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Registrar'),
            ])
            ->recordActions([
                EditAction::make(),
                DissociateAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
