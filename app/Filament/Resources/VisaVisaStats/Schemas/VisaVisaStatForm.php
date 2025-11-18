<?php

namespace App\Filament\Resources\VisaVisaStats\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VisaVisaStatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                       Textarea::make('header_description')
                    ->label('Header Description')
                    ->rows(3)
                    ->columnSpanFull(),

                         Textarea::make('guidence_description')
                    ->label('Guidance Description')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('applicants')
                    ->label('Total Applicants')
                    ->numeric()
                    ->placeholder('e.g., 10000'),

                TextInput::make('serving_countries')
                    ->label('Serving Countries')
                    ->numeric()
                    ->placeholder('e.g., 50'),

                TextInput::make('satisfied_clients')
                    ->label('Satisfied Clients')
                    ->placeholder('e.g., 95%'),

                TextInput::make('experience_year')
                    ->label('Years of Experience')
                    ->numeric()
                    ->placeholder('e.g., 15'),

                Toggle::make('is_active')
                    ->label('Active Status')
                    ->default(true)
                    ->inline(false),
            ]);
    }
}
