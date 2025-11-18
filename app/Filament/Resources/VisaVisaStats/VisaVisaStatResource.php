<?php

namespace App\Filament\Resources\VisaVisaStats;

use App\Filament\Resources\VisaVisaStats\Pages\CreateVisaVisaStat;
use App\Filament\Resources\VisaVisaStats\Pages\EditVisaVisaStat;
use App\Filament\Resources\VisaVisaStats\Pages\ListVisaVisaStats;
use App\Filament\Resources\VisaVisaStats\Schemas\VisaVisaStatForm;
use App\Filament\Resources\VisaVisaStats\Tables\VisaVisaStatsTable;
use App\Models\VisaStat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VisaVisaStatResource extends Resource
{
    protected static ?string $model = VisaStat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return VisaVisaStatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VisaVisaStatsTable::configure($table);
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
            'index' => ListVisaVisaStats::route('/'),
            'create' => CreateVisaVisaStat::route('/create'),
            'edit' => EditVisaVisaStat::route('/{record}/edit'),
        ];
    }
}
