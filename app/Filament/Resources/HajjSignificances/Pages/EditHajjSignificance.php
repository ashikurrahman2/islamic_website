<?php

namespace App\Filament\Resources\HajjSignificances\Pages;

use App\Filament\Resources\HajjSignificances\HajjSignificanceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHajjSignificance extends EditRecord
{
    protected static string $resource = HajjSignificanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
