<?php

namespace App\Filament\Resources\VisaRequirements\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VisaRequirementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->default('Required Documents'),
                 Textarea::make('documents')
                    ->required()
                    ->rows(10)
                    ->helperText('Enter each document requirement on a new line')
                    ->columnSpanFull(),
                Textarea::make('note')
                    ->columnSpanFull(),
                     FileUpload::make('image')
                     ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('visa-images')
                              ->visibility('public')
                            ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
