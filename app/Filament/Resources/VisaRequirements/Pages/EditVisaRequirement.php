<?php

namespace App\Filament\Resources\VisaRequirements\Pages;

use App\Filament\Resources\VisaRequirements\VisaRequirementResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVisaRequirement extends EditRecord
{
    protected static string $resource = VisaRequirementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
