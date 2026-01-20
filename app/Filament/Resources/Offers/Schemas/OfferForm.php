<?php

namespace App\Filament\Resources\Offers\Schemas;

use Filament\Forms\Components\TextInput;
use App\Models\Offer;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ImageColumn;
use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DateTimePicker;
use App\Classes\FilamentUtility;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Forms\Components\ToggleButtons;

class OfferForm
{
    public static function configure(Schema $schema): Schema
    {


        return $schema->components([

            TranslatableTabs::make()
                ->columnSpan(2)
                ->localeTabSchema(fn(TranslatableTab $tab) => [
                    Section::make(__('Content'))
                        ->schema([
                            FilamentUtility::statusInput(Offer::class),
                            TextInput::make($tab->makeName('title'))
                                ->label(__("Title"))
                                ->required()
                                ->maxLength(500)
                                // generate slug for the item based on the main locale

                                ->notRegex('/<[^b][^r][^>]*>/')
                                ->validationMessages([
                                    'not_regex' => 'HTML is invalid',
                                ]),

                            Textarea::make($tab->makeName('brief'))
                                ->label(__("Brief[" . $tab->getLocale() . "]"))
                                ->maxLength(1000)
                                ->rows(6)
                                ->notRegex('/<[^b][^r][^>]*>/')
                                ->validationMessages([
                                    'not_regex' => 'HTML is invalid',
                                ]),
                            RichEditor::make('content'),
                        ])->columns(1),

                    Section::make(__('Images And Media'))
                        ->schema([
                            FileUpload::make('web_image'),
                            FileUpload::make('mobile_image'),

                        ])->columns(2),
                    Section::make(__('Date And Info'))

                    ->schema([
                            DateTimePicker::make('start_date'),
                            DateTimePicker::make('end_date')


                        ])->columns(2),
                ])
















        ]);
    }
}
