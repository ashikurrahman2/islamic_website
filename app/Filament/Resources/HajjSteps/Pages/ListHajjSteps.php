<?php

namespace App\Filament\Resources\HajjSteps\Pages;

use App\Filament\Resources\HajjSteps\HajjStepResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHajjSteps extends ListRecords
{
    protected static string $resource = HajjStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
