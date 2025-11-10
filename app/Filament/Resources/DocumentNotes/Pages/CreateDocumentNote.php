<?php

namespace App\Filament\Resources\DocumentNotes\Pages;

use App\Filament\Resources\DocumentNotes\DocumentNoteResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDocumentNote extends CreateRecord
{
    protected static string $resource = DocumentNoteResource::class;
}
