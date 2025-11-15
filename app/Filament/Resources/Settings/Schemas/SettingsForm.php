<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class SettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
              ->components([
           FileUpload::make('web_logo')
    ->label('Website Logo')
    ->image()
    ->disk('public')
    ->directory('settings/logos')
    ->imageEditor()
    ->imagePreviewHeight('200')
    ->panelLayout('integrated')
    ->maxSize(2048)
    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg', 'image/webp'])
    ->helperText('Upload website logo (Max: 2MB)')
    ->downloadable()
    ->openable()
    ->columnSpan(1),

                FileUpload::make('favicon')
                    ->label('Favicon')
                    ->image()
                    ->directory('settings/favicons')
                    ->visibility('public')
                    ->imageEditor()
                    ->imagePreviewHeight('100')
                    ->panelLayout('integrated')
                    ->maxSize(512) // 512KB
                    ->acceptedFileTypes(['image/png', 'image/x-icon', 'image/vnd.microsoft.icon'])
                    ->helperText('Upload favicon (32x32 or 64x64 px, Max: 512KB)')
                    ->columnSpan(1),

                Textarea::make('address')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull()
                    ->autosize()                
                    ->placeholder('Enter full address...')
                    ->helperText('Enter the complete mosque address'),

                TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->placeholder('+880 1XXX-XXXXXX')
                    ->columnSpan(1),

                TextInput::make('alt_phone_number')
                    ->label('Alternative Phone Number')
                    ->tel()
                    ->placeholder('+880 1XXX-XXXXXX')
                    ->columnSpan(1),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->placeholder('example@mosque.com')
                    ->columnSpan(1),

                TextInput::make('alt_email')
                    ->label('Alternative Email')
                    ->email()
                    ->placeholder('info@mosque.com')
                    ->columnSpan(1),

                Textarea::make('map_embed_url')
                    ->label('Google Map Embed URL')
                    ->rows(5)
                    ->columnSpanFull()
                    ->placeholder('Paste Google Map iframe embed code here')
                    ->helperText('Go to Google Maps → Share → Embed a map → Copy HTML code'),
            ])
            ->columns(2); 
    }
}
