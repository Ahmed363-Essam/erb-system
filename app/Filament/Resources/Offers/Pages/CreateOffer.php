<?php

namespace App\Filament\Resources\Offers\Pages;

use App\Filament\Resources\Offers\OfferResource;
use Filament\Resources\Pages\CreateRecord;
use Doriiaan\FilamentAstrotomic\Resources\Pages\CreateTranslatable;

class CreateOffer extends CreateRecord
{
        use CreateTranslatable;


    protected static string $resource = OfferResource::class;
}
