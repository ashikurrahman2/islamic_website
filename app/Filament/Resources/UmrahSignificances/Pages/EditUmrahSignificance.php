<?php

namespace App\Filament\Resources\UmrahSignificances\Pages;

use App\Filament\Resources\UmrahSignificances\UmrahSignificanceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmrahSignificance extends EditRecord
{
    protected static string $resource = UmrahSignificanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
