<?php

namespace App\Filament\Resources\VisaRequirements;

use App\Filament\Resources\VisaRequirements\Pages\CreateVisaRequirement;
use App\Filament\Resources\VisaRequirements\Pages\EditVisaRequirement;
use App\Filament\Resources\VisaRequirements\Pages\ListVisaRequirements;
use App\Filament\Resources\VisaRequirements\Schemas\VisaRequirementForm;
use App\Filament\Resources\VisaRequirements\Tables\VisaRequirementsTable;
use App\Models\VisaRequirement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VisaRequirementResource extends Resource
{
    protected static ?string $model = VisaRequirement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return VisaRequirementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VisaRequirementsTable::configure($table);
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
            'index' => ListVisaRequirements::route('/'),
            'create' => CreateVisaRequirement::route('/create'),
            'edit' => EditVisaRequirement::route('/{record}/edit'),
        ];
    }
}
