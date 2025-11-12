<?php

namespace App\Filament\Resources\HajjSignificances\Pages;

use App\Filament\Resources\HajjSignificances\HajjSignificanceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHajjSignificances extends ListRecords
{
    protected static string $resource = HajjSignificanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
