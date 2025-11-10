<?php

namespace App\Filament\Resources\HajjDocuments\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HajjDocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->default('Required Documents'),
                TextInput::make('government_fee')
                    ->required()
                    ->numeric()
                    ->default(30000.0),
                Select::make('currency')
                    ->required()
                                    ->default('BDT')
                                    ->options([
                                        'BDT' => 'BDT - Bangladeshi Taka',
                                        'USD' => 'USD - US Dollar',
                                        'EUR' => 'EUR - Euro',
                                        'GBP' => 'GBP - British Pound',
                                        'SAR' => 'SAR - Saudi Riyal',
                                        'AED' => 'AED - UAE Dirham',
                                        'INR' => 'INR - Indian Rupee',
                                        'PKR' => 'PKR - Pakistani Rupee',
                                    ])
                                    ->searchable(),
                FileUpload::make('kaaba_image')
                     ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('hajj-images')
                              ->visibility('public')
                            ->columnSpanFull(),
                TextInput::make('bottom_notice_line1'),
                TextInput::make('bottom_notice_line2'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
