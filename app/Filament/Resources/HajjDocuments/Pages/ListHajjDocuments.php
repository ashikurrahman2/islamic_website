<?php

namespace App\Filament\Resources\HajjDocuments\Pages;

use App\Filament\Resources\HajjDocuments\HajjDocumentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHajjDocuments extends ListRecords
{
    protected static string $resource = HajjDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
