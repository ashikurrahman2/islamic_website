<?php

namespace App\Filament\Resources\VisaVisaStats\Pages;

use App\Filament\Resources\VisaVisaStats\VisaVisaStatResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVisaVisaStats extends ListRecords
{
    protected static string $resource = VisaVisaStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
