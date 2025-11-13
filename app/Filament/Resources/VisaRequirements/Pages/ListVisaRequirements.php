<?php

namespace App\Filament\Resources\VisaRequirements\Pages;

use App\Filament\Resources\VisaRequirements\VisaRequirementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVisaRequirements extends ListRecords
{
    protected static string $resource = VisaRequirementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
