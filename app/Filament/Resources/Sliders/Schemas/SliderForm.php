<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
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
            //    FileUpload::make('slide_image')
            //     ->image()
            //     ->directory('slides') 
            //     ->visibility('public')

                   FileUpload::make('slide_image')
                    ->label('Slider Image')
                    ->image()
                    ->disk('public')
                    ->directory('slides')
                    ->visibility('public')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend(now()->timestamp . '_')
                    )
                    ->downloadable()
                    ->openable()
                    ->imagePreviewHeight('250')
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(5120), 
            ]);
    }
}
