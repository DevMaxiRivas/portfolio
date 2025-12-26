<?php

namespace App\Filament\Resources\Studies\RelationManagers;

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

class TranslationsRelationManager extends RelationManager
{
    protected static string $relationship = 'translations';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('database.tables.translation_studies.plural');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution_name')
                    ->label(__('database.tables.translation_studies.columns.institution_name'))
                    ->required(),
                TextInput::make('degree')
                    ->label(__('database.tables.translation_studies.columns.degree'))
                    ->required(),
                TextInput::make('field_of_study')
                    ->label(__('database.tables.translation_studies.columns.field_of_study'))
                    ->required(),
                Textarea::make('description')
                    ->label(__('database.tables.translation_studies.columns.description'))
                    ->columnSpanFull()
                    ->default(null),
                Select::make('language_id')
                    ->label(__('database.tables.translation_studies.columns.language'))
                    ->relationship('language',)
                    ->getOptionLabelFromRecordUsing(fn(Model $record) => strtoupper($record->acronym))
                    ->required(),
                TextInput::make('location')
                    ->label(__('database.tables.translation_studies.columns.location'))
                    ->default(null),
                Hidden::make('study_id')
                    ->default(fn() => $this->ownerRecord->id),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('institution_name')
            ->columns([
                TextColumn::make('institution_name')
                    ->label(__('database.tables.translation_studies.columns.institution_name'))
                    ->searchable(),
                TextColumn::make('language.name')
                    ->label(__('database.tables.translation_studies.columns.language'))
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
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
