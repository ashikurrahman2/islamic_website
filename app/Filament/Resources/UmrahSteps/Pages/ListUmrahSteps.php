<?php

namespace App\Filament\Resources\UmrahSteps\Pages;

use App\Filament\Resources\UmrahSteps\UmrahStepResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUmrahSteps extends ListRecords
{
    protected static string $resource = UmrahStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
