<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('gallery_image')
                    ->label('Slider Image')
                    ->image()
                    ->disk('public')
                    ->directory('gallery')
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
