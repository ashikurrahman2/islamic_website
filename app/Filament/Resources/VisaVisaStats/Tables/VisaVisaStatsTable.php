<?php

namespace App\Filament\Resources\VisaVisaStats\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class VisaVisaStatsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('header_description')
                    ->label('Header Description')
                    ->limit(50)
                    ->searchable()
                    ->wrap(),

                      TextColumn::make('guidence_description')
                    ->label('Guidance Description')
                    ->limit(50)
                    ->searchable()
                    ->wrap(),

                TextColumn::make('applicants')
                    ->label('Applicants')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('serving_countries')
                    ->label('Countries')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('satisfied_clients')
                    ->label('Satisfied Clients')
                    ->searchable(),

                TextColumn::make('experience_year')
                    ->label('Experience (Years)')
                    ->numeric()
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('Status')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('is_active')
                    ->label('Status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
    }
}