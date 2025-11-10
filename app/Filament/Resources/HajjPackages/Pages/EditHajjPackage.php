<?php

namespace App\Filament\Resources\HajjPackages\Pages;

use App\Filament\Resources\HajjPackages\HajjPackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHajjPackage extends EditRecord
{
    protected static string $resource = HajjPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
