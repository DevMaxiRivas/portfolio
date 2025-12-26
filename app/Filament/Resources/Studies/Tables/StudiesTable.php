<?php

namespace App\Filament\Resources\Studies\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('institution_name')
                    ->label(__('database.tables.studies.columns.institution_name'))
                    ->searchable(),
                TextColumn::make('degree')
                    ->label(__('database.tables.studies.columns.degree'))
                    ->searchable(),
                TextColumn::make('start_date')
                    ->label(__('database.tables.studies.columns.start_date'))
                    ->date()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label(__('database.tables.studies.columns.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('database.tables.studies.columns.updated_at'))
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
