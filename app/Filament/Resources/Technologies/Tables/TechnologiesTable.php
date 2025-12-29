<?php

namespace App\Filament\Resources\Technologies\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TechnologiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('database.tables.technologies.columns.name'))
                    ->searchable(),
                TextColumn::make('proficiency_level')
                    ->label(__('database.tables.technologies.columns.proficiency_level'))
                    ->searchable(),
                TextColumn::make('categories.name')
                    ->label(__('database.tables.technologies.columns.categories'))
                    ->badge(),
                TextColumn::make('created_at')
                    ->label(__('database.tables.technologies.columns.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('database.tables.technologies.columns.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
