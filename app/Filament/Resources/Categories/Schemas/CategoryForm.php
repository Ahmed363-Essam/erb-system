<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms\Components\Select;




use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Basic Info')
                ->schema([
                    TextInput::make('name.ar')->label('Name (AR)')->required(),
                    TextInput::make('name.en')->label('Name (EN)')->required(),

                    TextInput::make('summary.ar')
                        ->label('Summary (AR)')
                        ->extraInputAttributes(['style' => 'border-radius:8px;']),
                    TextInput::make('summary.en')
                        ->label('Summary (EN)')
                        ->extraInputAttributes(['style' => 'border-radius:8px;']),

                    RichEditor::make('description.ar')->label('Description (AR)'),
                    RichEditor::make('description.en')->label('Description (EN)'),

                    Select::make('type')
                        ->label('Type')
                        ->options([
                            'service' => 'Service',
                            'product' => 'Product',
                        ])
                        ->required(),

                    Toggle::make('status')->label('Active'),

                ])->columns(2)->columnSpanFull(),


            Section::make('Mobile')
                ->schema([
                    FileUpload::make('mobile_image')
                        ->label('Mobile Image')
                        ->image()
                        ->directory('categories/mobile_images'),

                    FileUpload::make('mobile_icon')
                        ->label('Mobile Icon')
                        ->image()
                        ->directory('categories/mobile_icons'),

                    FileUpload::make('mobile_cover')
                        ->label('Mobile Cover')
                        ->image()
                        ->directory('categories/mobile_covers'),
                        TextInput::make('youtube_link')->label('YouTube Link')->columnSpanFull(),
                ])->columns(3)->columnSpanFull(),


            Section::make('Web')
                ->schema([
                    FileUpload::make('web_image')
                        ->label('Web Image')
                        ->image()
                        ->directory('categories/web_images'),

                    FileUpload::make('web_icon')
                        ->label('Web Icon')
                        ->image()
                        ->directory('categories/web_icons'),

                    FileUpload::make('web_cover')
                        ->label('Web Cover')
                        ->image()
                        ->directory('categories/web_covers'),
                ])->columns(3)->columnSpanFull(),


            // Section::make('SEO')
            //     ->schema([
            //         TextInput::make('seo_title.ar')->label('SEO Title Ar'),
            //         TextInput::make('seo_title.en')->label('SEO Title Ar'),
            //         Textarea::make('seo_description.ar')->label('SEO Description Ar'),
            //         Textarea::make('seo_description.en')->label('SEO Description Ar'),
            //         TagsInput::make('seo_keywords')
            //             ->label('SEO Keywords')
            //             ->placeholder('Add keywords'),

            //         TagsInput::make('seo_tags')
            //             ->label('SEO Tags')
            //             ->placeholder('Add tags'),
            //     ])->columns(2)->columnSpanFull(),
        ]);
    }
}
