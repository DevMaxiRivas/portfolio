<?php

namespace App\Filament\Resources\Studies\RelationManagers;

use App\Models\Language;
use App\Models\StudyTranslation;
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
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class TranslationsRelationManager extends RelationManager
{
    protected static string $relationship = 'translations';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('database.tables.study_translations.plural');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution_name')
                    ->label(__('database.tables.study_translations.columns.institution_name'))
                    ->required(),
                TextInput::make('degree')
                    ->label(__('database.tables.study_translations.columns.degree'))
                    ->required(),
                TextInput::make('field_of_study')
                    ->label(__('database.tables.study_translations.columns.field_of_study'))
                    ->required(),
                Textarea::make('description')
                    ->label(__('database.tables.study_translations.columns.description'))
                    ->columnSpanFull()
                    ->default(null),
                Select::make('language_id')
                    ->label(__('database.tables.study_translations.columns.language'))
                    ->options(
                        Language::whereNotIn(
                            'id',
                            StudyTranslation::where(
                                'study_id',
                                $this->ownerRecord->id
                            )
                                ->pluck('language_id')
                        )->pluck('acronym', 'id')
                            ->map(function ($language) {
                                return strtoupper($language);
                            })
                    )
                    ->hidden(fn(Get $get): bool => !empty($get('id')))
                    ->required(),
                TextInput::make('location')
                    ->label(__('database.tables.study_translations.columns.location'))
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
                    ->label(__('database.tables.study_translations.columns.institution_name'))
                    ->searchable(),
                TextColumn::make('language.name')
                    ->label(__('database.tables.study_translations.columns.language'))
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
