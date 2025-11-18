<?php

namespace App\Filament\Resources\Consultations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ConsultationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
             TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('icon')
                    ->label('Icon Class')
                    ->placeholder('e.g., fa-kaaba')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                     ->placeholder('Only text, not a string')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
