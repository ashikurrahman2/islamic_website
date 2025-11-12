<?php

namespace App\Filament\Resources\HajjSteps\Pages;

use App\Filament\Resources\HajjSteps\HajjStepResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHajjStep extends EditRecord
{
    protected static string $resource = HajjStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
