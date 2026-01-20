<?php

namespace App\Filament\Resources\Categories\Schemas;
use Filament\Forms\Components\TextInput;

use Filament\Schemas\Schema;




use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;

class CategoryForm
{
public static function configure(Schema $schema): Schema
{
    return $schema->components([
        Grid::make(2)
            ->schema([
                TextInput::make('title.en')
                    ->label('Title (EN)')
                    ->required(),

                TextInput::make('title.ar')
                    ->label('Title (AR)')
                    ->required()
                    ->extraAttributes(['dir' => 'rtl']),
            ]),
    ]);
}
}
