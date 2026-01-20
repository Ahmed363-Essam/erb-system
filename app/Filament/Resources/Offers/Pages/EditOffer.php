<?php

namespace App\Filament\Resources\Offers\Pages;

use App\Filament\Resources\Offers\OfferResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Doriiaan\FilamentAstrotomic\Resources\Pages\EditTranslatable;

class EditOffer extends EditRecord
{
        use EditTranslatable;

    protected static string $resource = OfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
