<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
       FileUpload::make('about_image')
                    ->label('About Image')
                    ->image()
                    ->disk('public')
                    ->directory('about')
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

           Textarea::make('about_paragraph')
                ->label('About Paragraph')
                ->rows(5)
                ->maxLength(1000)
                ->placeholder('Write your paragraph here...'),

                Textarea::make('mission')
                ->label('About Mission')
                ->rows(5)
                ->maxLength(1000)
                ->placeholder('Write your mission here...'),

                Textarea::make('vision')
                ->label('About Vision')
                ->rows(5)
                ->maxLength(1000)
                ->placeholder('Write your vision here...'),

                   Toggle::make('is_active') 
                    ->label('Active Status')
                    ->default(true)
                    ->inline(false)
                    ->helperText('Enable to show this content on the website'),
            ]);
    }
}
