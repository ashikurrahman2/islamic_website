<?php

namespace App\Filament\Resources\Steps\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StepForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextInput::make('umrah_significance_id')
                //     ->required()
                //     ->numeric(),
                   Select::make('umrah_significance_id')
                    ->relationship('significance', 'title')
                    ->required(),
                TextInput::make('step_number')
                    ->required()
                    ->numeric(),
                TextInput::make('step_label')
                    ->required(),
                TextInput::make('detail_title')
                    ->required(),
                Textarea::make('detail_description')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
