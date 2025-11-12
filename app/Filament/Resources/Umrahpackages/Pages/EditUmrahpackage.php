<?php

namespace App\Filament\Resources\Umrahpackages\Pages;

use App\Filament\Resources\Umrahpackages\UmrahpackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmrahpackage extends EditRecord
{
    protected static string $resource = UmrahpackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
