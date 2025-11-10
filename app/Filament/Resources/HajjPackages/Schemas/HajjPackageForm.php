<?php

namespace App\Filament\Resources\HajjPackages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HajjPackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('title')->required(),
            TextInput::make('type')->required(),
            Textarea::make('description')->required(),
            TextInput::make('price')->numeric()->required(),
            TextInput::make('duration')->required(),
            TextInput::make('flight')->required(),
            TextInput::make('hotel_makkah')->required(),
            TextInput::make('hotel_madinah')->required(),
            TextInput::make('food')->required(),
            Textarea::make('special_services')->required(),
            TextInput::make('icon_class')->required(),
        ]);
    }
}
