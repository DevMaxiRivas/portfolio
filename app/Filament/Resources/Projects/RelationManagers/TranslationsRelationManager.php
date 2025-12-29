<?php

namespace App\Filament\Resources\Projects\RelationManagers;

use App\Models\Language;
use App\Models\ProjectTranslation;
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
use Filament\Schemas\Components\Utilities\Get;
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
        return __('database.tables.project_translations.plural');
    }

    public static function getPluralModelLabel(): string
    {
        return __('database.tables.project_translations.plural');
    }

    public static function getModelLabel(): string
    {
        return __('database.tables.project_translations.singular');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(__('database.tables.project_translations.columns.title'))
                    ->required()
                    ->maxLength(255),
                Select::make('language_id')
                    ->label(__('database.tables.project_translations.columns.language'))
                    ->options(
                        Language::whereNotIn(
                            'id',
                            ProjectTranslation::where(
                                'project_id',
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
                Hidden::make('project_id')
                    ->default(fn() => $this->ownerRecord->id),
                RichEditor::make('description')
                    ->label(__('database.tables.project_translations.columns.description'))
                    ->columnSpanFull()
                    ->toolbarButtons([ // Optional: customize the toolbar
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
                    ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('language.name')
            ->columns([
                TextColumn::make('language.name')
                    ->label(__('database.tables.project_translations.columns.language'))
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
