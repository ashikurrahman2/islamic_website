<?php

namespace App\Filament\Resources\UmrahSignificances;

use App\Filament\Resources\UmrahSignificances\Pages\CreateUmrahSignificance;
use App\Filament\Resources\UmrahSignificances\Pages\EditUmrahSignificance;
use App\Filament\Resources\UmrahSignificances\Pages\ListUmrahSignificances;
use App\Filament\Resources\UmrahSignificances\Schemas\UmrahSignificanceForm;
use App\Filament\Resources\UmrahSignificances\Tables\UmrahSignificancesTable;
use App\Models\UmrahSignificance;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UmrahSignificanceResource extends Resource
{
    protected static ?string $model = UmrahSignificance::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return UmrahSignificanceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UmrahSignificancesTable::configure($table);
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
            'index' => ListUmrahSignificances::route('/'),
            'create' => CreateUmrahSignificance::route('/create'),
            'edit' => EditUmrahSignificance::route('/{record}/edit'),
        ];
    }
}
