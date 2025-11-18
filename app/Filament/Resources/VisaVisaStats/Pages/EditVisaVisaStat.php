<?php

namespace App\Filament\Resources\VisaVisaStats\Pages;

use App\Filament\Resources\VisaVisaStats\VisaVisaStatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVisaVisaStat extends EditRecord
{
    protected static string $resource = VisaVisaStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
