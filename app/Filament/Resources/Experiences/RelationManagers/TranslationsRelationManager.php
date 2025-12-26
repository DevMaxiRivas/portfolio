<?php

namespace App\Filament\Resources\Experiences\RelationManagers;

use App\Models\ExperienceTranslation;
use App\Models\Language;
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
use Filament\Forms\Components\RichEditor;
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
        return __('database.tables.experience_translations.plural');
    }

    public static function getPluralModelLabel(): string
    {
        return __('database.tables.experience_translations.plural');
    }

    public static function getModelLabel(): string
    {
        return __('database.tables.experience_translations.singular');
    }


    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')
                    ->label(__('database.tables.experience_translations.columns.company_name'))
                    ->required(),
                TextInput::make('position')
                    ->label(__('database.tables.experience_translations.columns.position'))
                    ->required(),
                Select::make('language_id')
                    ->label(__('database.tables.project_translations.columns.language'))
                    ->options(
                        Language::whereNotIn(
                            'id',
                            ExperienceTranslation::where(
                                'experience_id',
                                $this->ownerRecord->id
                            )
                                ->pluck('language_id')
                        )->pluck('acronym', 'id')
                            ->map(function ($language) {
                                return strtoupper($language);
                            })
                    )
                    ->required(),
                Textarea::make('description')
                    ->label(__('database.tables.experience_translations.columns.description'))
                    ->columnSpanFull()
                    ->required(),
                Hidden::make('experience_id')
                    ->default(fn() => $this->ownerRecord->id),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('position')
            ->columns([
                TextColumn::make('language.name')
                    ->label(__('database.tables.project_translations.columns.language')),
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