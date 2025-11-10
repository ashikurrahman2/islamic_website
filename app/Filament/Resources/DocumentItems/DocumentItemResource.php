<?php

namespace App\Filament\Resources\DocumentItems;

use App\Filament\Resources\DocumentItems\Pages\CreateDocumentItem;
use App\Filament\Resources\DocumentItems\Pages\EditDocumentItem;
use App\Filament\Resources\DocumentItems\Pages\ListDocumentItems;
use App\Filament\Resources\DocumentItems\Schemas\DocumentItemForm;
use App\Filament\Resources\DocumentItems\Tables\DocumentItemsTable;
use App\Models\DocumentItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DocumentItemResource extends Resource
{
    protected static ?string $model = DocumentItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return DocumentItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DocumentItemsTable::configure($table);
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
            'index' => ListDocumentItems::route('/'),
            'create' => CreateDocumentItem::route('/create'),
            'edit' => EditDocumentItem::route('/{record}/edit'),
        ];
    }
}
