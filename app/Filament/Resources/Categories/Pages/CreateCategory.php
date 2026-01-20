<?php

namespace App\Filament\Resources\Categories\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Notification;
use App\Filament\Resources\Categories\CategoryResource;
use Doriiaan\FilamentAstrotomic\Resources\Pages\CreateTranslatable;

class CreateCategory extends CreateRecord
{
    use CreateTranslatable;
    protected static string $resource = CategoryResource::class;
//             protected function mutateFormDataBeforeCreate(array $data): array
// {
//     dd($data);
// }

// protected function afterCreate(): void
// {
//     $category = $this->record;

//     $mediaFields = [
//         'mobile_image',
//         'mobile_cover',
//         'mobile_icon',
//         'web_image',
//         'web_cover',
//         'web_icon',
//     ];

//     foreach ($mediaFields as $field) {
//         $state = $this->form->getState($field);

//         // لو الحقل عبارة عن array بسبب الترجمة، نجيب القيمة الحقيقية
//         if (is_array($state) && isset($state[$field])) {
//             $filePath = $state[$field];
//         } else {
//             $filePath = $state; // لو string مباشرة
//         }

//         if ($filePath) {
//             $fullPath = storage_path('app/public/' . $filePath);

//             if (file_exists($fullPath)) {
//                 $category
//                     ->addMedia($fullPath)
//                     ->preservingOriginal()
//                     ->toMediaCollection($field);
//             }
//         }
//     }

//     \Filament\Notifications\Notification::make()
//         ->title('Category created successfully with Media!')
//         ->success()
//         ->send();
// }

}
