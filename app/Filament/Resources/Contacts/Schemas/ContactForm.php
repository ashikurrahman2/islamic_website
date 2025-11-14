<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('address')
                    ->required()
                     ->maxLength(255),
                TextInput::make('number')
                   ->tel()
                   ->maxLength(255)
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                //   Select::make('subject')
                //       ->options([
                //         'Surah-Fatiha' => 'Surah-Fatiha',
                //         'Al-Baqarah' => 'Al-Baqarah',
                //         'Aal-E-Imran' => 'Aal-E-Imran',
                //         'An-Nisa' => 'An-Nisa',
                //     ])
                //     ->required(),
                //   Textarea::make('message')
                //     ->required()
                //     ->rows(5)
                //     ->columnSpanFull(),
                // Select::make('status')
                //      ->options([
                //         'new' => 'New',
                //         'read' => 'Read',
                //         'replied' => 'Replied',
                //         'archived' => 'Archived',
                //     ])
                //     ->default('new')
                //     ->required(),

                    Textarea::make('map_embed_url')
                            ->label('Map Embed URL')
                            ->rows(3)
                            ->placeholder('https://www.google.com/maps/embed?pb=...')
                            ->helperText('Go to Google Maps → Share → Embed a map → Copy the URL from the iframe src')
                            ->columnSpanFull(),
            ]);
    }
}
