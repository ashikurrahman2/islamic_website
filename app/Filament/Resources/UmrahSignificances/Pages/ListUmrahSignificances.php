<?php

namespace App\Filament\Resources\UmrahSignificances\Pages;

use App\Filament\Resources\UmrahSignificances\UmrahSignificanceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUmrahSignificances extends ListRecords
{
    protected static string $resource = UmrahSignificanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
