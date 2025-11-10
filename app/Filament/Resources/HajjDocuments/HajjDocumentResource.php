<?php

namespace App\Filament\Resources\HajjDocuments;

use App\Filament\Resources\HajjDocuments\Pages\CreateHajjDocument;
use App\Filament\Resources\HajjDocuments\Pages\EditHajjDocument;
use App\Filament\Resources\HajjDocuments\Pages\ListHajjDocuments;
use App\Filament\Resources\HajjDocuments\Schemas\HajjDocumentForm;
use App\Filament\Resources\HajjDocuments\Tables\HajjDocumentsTable;
use App\Models\HajjDocument;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HajjDocumentResource extends Resource
{
    protected static ?string $model = HajjDocument::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return HajjDocumentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HajjDocumentsTable::configure($table);
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
            'index' => ListHajjDocuments::route('/'),
            'create' => CreateHajjDocument::route('/create'),
            'edit' => EditHajjDocument::route('/{record}/edit'),
        ];
    }
}
