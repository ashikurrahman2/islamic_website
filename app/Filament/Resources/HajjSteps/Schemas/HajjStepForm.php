<?php

namespace App\Filament\Resources\HajjSteps\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HajjStepForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('hajj_significance_id')
                    ->relationship('hajjSignificance', 'title')
                    ->required(),
                TextInput::make('step_number')
                    ->required()
                    ->numeric(),
                TextInput::make('step_icon')
                    ->required(),
                Textarea::make('step_label')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('detail_title')
                    ->required(),
                Textarea::make('detail_description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
