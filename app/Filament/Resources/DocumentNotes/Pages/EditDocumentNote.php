<?php

namespace App\Filament\Resources\DocumentNotes\Pages;

use App\Filament\Resources\DocumentNotes\DocumentNoteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDocumentNote extends EditRecord
{
    protected static string $resource = DocumentNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
