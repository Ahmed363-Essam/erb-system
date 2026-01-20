<?php

namespace App\Classes;

use App\Classes\CustomPackage\CustomComponent\CustomCuratorPicker;
use App\Filament\Resources\Seo\Model\Seo;

use Awcodes\Curator\PathGenerators\DatePathGenerator;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Cache;

class FilamentUtility
{





        public static function statusInput($model)
        {



                return
                    Select::make('status')
                    ->label(__("Status"))
                    ->required()
                    ->options($model::getStatusList())
                    ->default($model::STATUS_PUBLISHED)
                    ->native(false)
                    ->selectablePlaceholder(false)
                    ->notRegex('/<[^b][^r][^>]*>/')
                    ->validationMessages([
                        'not_regex' => 'HTML is invalid',
                    ]);




        }











}
