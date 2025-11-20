<?php

namespace App\Filament\Resources\Umrahpackages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Table;

class UmrahpackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('price')
                    ->money()
                    ->sortable(),
                TextColumn::make('duration')
                    ->searchable(),
                TextColumn::make('flight')
                    ->searchable(),
                TextColumn::make('hotel_makkah')
                    ->searchable(),
                TextColumn::make('hotel_madinah')
                    ->searchable(),
                TextColumn::make('food')
                    ->searchable(),
                TextColumn::make('icon_class')
                    ->searchable(),
                TextColumn::make('pdf_path')
                    ->label('PDF')
                    ->formatStateUsing(fn ($state) => $state ? 'PDF' : '—') // টেক্সট দেখাবে
                    ->url(fn ($record) => $record->pdf_path ? Storage::url($record->pdf_path) : null)
                    ->openUrlInNewTab()
                    ->color(fn ($record) => $record->pdf_path ? 'primary' : 'gray')
                    ->alignCenter()
                    ->tooltip(fn ($record) => $record->pdf_path ? 'Download PDF' : 'No PDF'),
                  ToggleColumn::make('is_active')
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            ]);
    }
}
