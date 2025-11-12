<?php

namespace App\Filament\Resources\HajjSteps;

use App\Filament\Resources\HajjSteps\Pages\CreateHajjStep;
use App\Filament\Resources\HajjSteps\Pages\EditHajjStep;
use App\Filament\Resources\HajjSteps\Pages\ListHajjSteps;
use App\Filament\Resources\HajjSteps\Schemas\HajjStepForm;
use App\Filament\Resources\HajjSteps\Tables\HajjStepsTable;
use App\Models\HajjStep;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HajjStepResource extends Resource
{
    protected static ?string $model = HajjStep::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HajjStepForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HajjStepsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHajjSteps::route('/'),
            'create' => CreateHajjStep::route('/create'),
            'edit' => EditHajjStep::route('/{record}/edit'),
        ];
    }
}
