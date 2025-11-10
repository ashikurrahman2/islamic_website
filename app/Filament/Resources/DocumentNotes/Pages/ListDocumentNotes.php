<?php

namespace App\Filament\Resources\DocumentNotes\Pages;

use App\Filament\Resources\DocumentNotes\DocumentNoteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDocumentNotes extends ListRecords
{
    protected static string $resource = DocumentNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
