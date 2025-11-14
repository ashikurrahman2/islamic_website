<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('address')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('number')
                    ->label('Phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('subject')
                //     ->searchable()
                //     ->sortable()
                //     ->badge()
                //     ->color('info'),
                // TextColumn::make('status')
                //     ->badge()
                //     ->color(fn (string $state): string => match ($state) {
                //         'new' => 'danger',
                //         'read' => 'warning',
                //         'replied' => 'success',
                //         'archived' => 'gray',
                //     })
                //     ->sortable(),
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
                // SelectFilter::make('status')
                //     ->options([
                //         'new' => 'New',
                //         'read' => 'Read',
                //         'replied' => 'Replied',
                //         'archived' => 'Archived',
                //     ]),

                    // SelectFilter::make('subject')
                    // ->options([
                    //     'Surah-Fatiha' => 'Surah-Fatiha',
                    //     'Al-Baqarah' => 'Al-Baqarah',
                    //     'Aal-E-Imran' => 'Aal-E-Imran',
                    //     'An-Nisa' => 'An-Nisa',
                    // ]),
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
