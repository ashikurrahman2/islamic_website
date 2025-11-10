<?php

namespace App\Filament\Resources\DocumentNotes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DocumentNoteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('hajj_document_id')
                    ->relationship('hajjDocument', 'title')
                    ->required(),
                TextInput::make('note_text')
                    ->required(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
