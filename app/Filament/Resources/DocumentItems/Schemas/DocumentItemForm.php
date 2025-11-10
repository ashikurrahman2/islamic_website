<?php

namespace App\Filament\Resources\DocumentItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DocumentItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('document_category_id')
                    ->required()
                    ->numeric(),
                TextInput::make('item_text')
                    ->required(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
