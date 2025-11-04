<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slide_title')
                ->required(),
                TextInput::make('slide_subtitle')
                ->required(),
               FileUpload::make('slide_image')
                ->image()
                ->directory('slides') 
                ->visibility('public')
            ]);
    }
}
