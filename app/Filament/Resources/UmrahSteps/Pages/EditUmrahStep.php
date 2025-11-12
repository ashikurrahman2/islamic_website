<?php

namespace App\Filament\Resources\UmrahSteps\Pages;

use App\Filament\Resources\UmrahSteps\UmrahStepResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmrahStep extends EditRecord
{
    protected static string $resource = UmrahStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
