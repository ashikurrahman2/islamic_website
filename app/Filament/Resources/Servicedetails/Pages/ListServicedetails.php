<?php

namespace App\Filament\Resources\Servicedetails\Pages;

use App\Filament\Resources\Servicedetails\ServicedetailsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicedetails extends ListRecords
{
    protected static string $resource = ServicedetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
