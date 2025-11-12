<?php

namespace App\Filament\Resources\Umrahpackages;

use App\Filament\Resources\Umrahpackages\Pages\CreateUmrahpackage;
use App\Filament\Resources\Umrahpackages\Pages\EditUmrahpackage;
use App\Filament\Resources\Umrahpackages\Pages\ListUmrahpackages;
use App\Filament\Resources\Umrahpackages\Schemas\UmrahpackageForm;
use App\Filament\Resources\Umrahpackages\Tables\UmrahpackagesTable;
use App\Models\Umrahpackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UmrahpackageResource extends Resource
{
    protected static ?string $model = Umrahpackage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return UmrahpackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UmrahpackagesTable::configure($table);
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
            'index' => ListUmrahpackages::route('/'),
            'create' => CreateUmrahpackage::route('/create'),
            'edit' => EditUmrahpackage::route('/{record}/edit'),
        ];
    }
}
