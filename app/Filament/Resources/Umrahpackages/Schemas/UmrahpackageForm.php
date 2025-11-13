<?php

namespace App\Filament\Resources\Umrahpackages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UmrahpackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('৳'),
                TextInput::make('duration')
                    ->required(),
                TextInput::make('flight')
                    ->required(),
                TextInput::make('hotel_makkah')
                    ->tel()
                    ->required(),
                TextInput::make('hotel_madinah')
                    ->tel()
                    ->required(),
                TextInput::make('food')
                    ->required(),
                Textarea::make('special_services')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('icon_class')
                    ->required(),
                 FileUpload::make('pdf_path')
                ->label('Package PDF (Upload)')
                ->directory('hajj-packages')
                ->disk('public')
                ->acceptedFileTypes(['application/pdf'])
                ->maxSize(10240) // 10MB
                ->preserveFilenames()
                ->required(false)
                ->helperText('Upload a beautiful Hajj package statement in PDF format.'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
