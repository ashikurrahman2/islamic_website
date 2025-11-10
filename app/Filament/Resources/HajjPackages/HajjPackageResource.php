<?php

namespace App\Filament\Resources\HajjPackages;

use App\Filament\Resources\HajjPackages\Pages\CreateHajjPackage;
use App\Filament\Resources\HajjPackages\Pages\EditHajjPackage;
use App\Filament\Resources\HajjPackages\Pages\ListHajjPackages;
use App\Filament\Resources\HajjPackages\Schemas\HajjPackageForm;
use App\Filament\Resources\HajjPackages\Tables\HajjPackagesTable;
use App\Models\HajjPackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HajjPackageResource extends Resource
{
    protected static ?string $model = HajjPackage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HajjPackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HajjPackagesTable::configure($table);
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
            'index' => ListHajjPackages::route('/'),
            'create' => CreateHajjPackage::route('/create'),
            'edit' => EditHajjPackage::route('/{record}/edit'),
        ];
    }
}
