<?php

namespace App\Filament\Resources\Experiences\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ExperiencesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_name')
                    ->label(__('database.tables.experiences.columns.company_name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('position')
                    ->label(__('database.tables.experiences.columns.position'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('start_date')
                    ->label(__('database.tables.experiences.columns.start_date'))
                    ->date()
                    ->sortable()
                    ->searchable(),
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
