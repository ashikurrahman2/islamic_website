<?php

namespace App\Filament\Resources\HajjSignificances;

use App\Filament\Resources\HajjSignificances\Pages\CreateHajjSignificance;
use App\Filament\Resources\HajjSignificances\Pages\EditHajjSignificance;
use App\Filament\Resources\HajjSignificances\Pages\ListHajjSignificances;
use App\Filament\Resources\HajjSignificances\Schemas\HajjSignificanceForm;
use App\Filament\Resources\HajjSignificances\Tables\HajjSignificancesTable;
use App\Models\HajjSignificance;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HajjSignificanceResource extends Resource
{
    protected static ?string $model = HajjSignificance::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HajjSignificanceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HajjSignificancesTable::configure($table);
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
            'index' => ListHajjSignificances::route('/'),
            'create' => CreateHajjSignificance::route('/create'),
            'edit' => EditHajjSignificance::route('/{record}/edit'),
        ];
    }
}
