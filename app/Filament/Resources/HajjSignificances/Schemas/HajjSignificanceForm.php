<?php

namespace App\Filament\Resources\HajjSignificances\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HajjSignificanceForm
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
                    ->default('The Hajj Guide'),
                TextInput::make('section_title')
                    ->required()
                    ->default('Step by Step Hajj Guide'),
                Textarea::make('section_description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('congratulation_message')
                    ->required()
                    ->default('Haji Mubarak'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
