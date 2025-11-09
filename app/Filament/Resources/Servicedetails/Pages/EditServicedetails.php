<?php

namespace App\Filament\Resources\Servicedetails\Pages;

use App\Filament\Resources\Servicedetails\ServicedetailsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicedetails extends EditRecord
{
    protected static string $resource = ServicedetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
