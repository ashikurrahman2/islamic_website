<?php

namespace App\Filament\Resources\Umrahpackages\Pages;

use App\Filament\Resources\Umrahpackages\UmrahpackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUmrahpackages extends ListRecords
{
    protected static string $resource = UmrahpackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
