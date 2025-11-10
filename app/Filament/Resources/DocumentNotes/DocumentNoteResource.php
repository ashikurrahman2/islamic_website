<?php

namespace App\Filament\Resources\DocumentNotes;

use App\Filament\Resources\DocumentNotes\Pages\CreateDocumentNote;
use App\Filament\Resources\DocumentNotes\Pages\EditDocumentNote;
use App\Filament\Resources\DocumentNotes\Pages\ListDocumentNotes;
use App\Filament\Resources\DocumentNotes\Schemas\DocumentNoteForm;
use App\Filament\Resources\DocumentNotes\Tables\DocumentNotesTable;
use App\Models\DocumentNote;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DocumentNoteResource extends Resource
{
    protected static ?string $model = DocumentNote::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return DocumentNoteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DocumentNotesTable::configure($table);
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
            'index' => ListDocumentNotes::route('/'),
            'create' => CreateDocumentNote::route('/create'),
            'edit' => EditDocumentNote::route('/{record}/edit'),
        ];
    }
}
