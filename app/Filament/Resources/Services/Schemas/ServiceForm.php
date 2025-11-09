<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
              TextInput::make('service_title')
                ->required(),
            RichEditor::make('service_subtitle')
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
