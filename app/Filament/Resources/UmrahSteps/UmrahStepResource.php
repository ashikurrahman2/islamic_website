<?php

namespace App\Filament\Resources\UmrahSteps;

use App\Filament\Resources\UmrahSteps\Pages\CreateUmrahStep;
use App\Filament\Resources\UmrahSteps\Pages\EditUmrahStep;
use App\Filament\Resources\UmrahSteps\Pages\ListUmrahSteps;
use App\Filament\Resources\UmrahSteps\Schemas\UmrahStepForm;
use App\Filament\Resources\UmrahSteps\Tables\UmrahStepsTable;
use App\Models\UmrahStep;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UmrahStepResource extends Resource
{
    protected static ?string $model = UmrahStep::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return UmrahStepForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UmrahStepsTable::configure($table);
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
            'index' => ListUmrahSteps::route('/'),
            'create' => CreateUmrahStep::route('/create'),
            'edit' => EditUmrahStep::route('/{record}/edit'),
        ];
    }
}
