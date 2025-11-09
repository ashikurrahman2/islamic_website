<?php

namespace App\Filament\Resources\Servicedetails\Schemas;

use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class ServicedetailsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 FileUpload::make('service_image')
                    ->label('Service Image')
                    ->image()
                    ->disk('public')
                    ->directory('servicedetails')
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
                 RichEditor::make('service_description')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                    'h2',
                    'h3',
                    'bulletList',
                    'orderedList',
                    'link',
                    'blockquote',
                    'codeBlock',
                ])
                ->extraAttributes([
                    'style' => 'min-height: 300px;'  
                ])
                ->columnSpanFull(),

            ]);
    }
}
