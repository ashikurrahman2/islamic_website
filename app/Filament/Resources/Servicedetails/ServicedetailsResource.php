<?php

namespace App\Filament\Resources\Servicedetails;

use App\Filament\Resources\Servicedetails\Pages\CreateServicedetails;
use App\Filament\Resources\Servicedetails\Pages\EditServicedetails;
use App\Filament\Resources\Servicedetails\Pages\ListServicedetails;
use App\Filament\Resources\Servicedetails\Schemas\ServicedetailsForm;
use App\Filament\Resources\Servicedetails\Tables\ServicedetailsTable;
use App\Models\Servicedetails;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServicedetailsResource extends Resource
{
    protected static ?string $model = Servicedetails::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ServicedetailsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicedetailsTable::configure($table);
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
            'index' => ListServicedetails::route('/'),
            'create' => CreateServicedetails::route('/create'),
            'edit' => EditServicedetails::route('/{record}/edit'),
        ];
    }
}
