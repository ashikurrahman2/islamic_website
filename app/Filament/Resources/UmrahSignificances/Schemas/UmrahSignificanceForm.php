<?php

namespace App\Filament\Resources\UmrahSignificances\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UmrahSignificanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description_one')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description_two')
                    ->columnSpanFull(),
                TextInput::make('guide_title')
                    ->required(),
                TextInput::make('section_title')
                    ->required(),
                Textarea::make('section_description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('congratulation_message')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
