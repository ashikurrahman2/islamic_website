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
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('guide_title')
                    ->required()
                    ->default('The Umrah Guide'),
                TextInput::make('section_title')
                    ->required()
                    ->default('Step by Step Hajj Guide'),
                TextInput::make('section_description')
                    ->required(),
                TextInput::make('congratulation_message')
                    ->required()
                    ->default('Haji Mubarak'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
