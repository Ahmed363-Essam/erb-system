<?php

namespace App\Filament\Resources\Offers\Pages;

use App\Filament\Resources\Offers\OfferResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Doriiaan\FilamentAstrotomic\Resources\Pages\ListTranslatable;

class ListOffer extends ListRecords
{

    use ListTranslatable;
    protected static string $resource = OfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
