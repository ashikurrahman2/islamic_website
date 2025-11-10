<?php

namespace App\Filament\Resources\HajjDocuments\Pages;

use App\Filament\Resources\HajjDocuments\HajjDocumentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHajjDocument extends EditRecord
{
    protected static string $resource = HajjDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
