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
//         protected function afterCreate(): void
// {
//     $category = $this->record;

//     // قائمة الـ media fields اللي عندنا
//     $mediaFields = [
//         'mobile_image',
//         // 'mobile_cover',
//         // 'mobile_icon',
//         // 'web_image',
//         // 'web_cover',
//         // 'web_icon',
//     ];

//     foreach ($mediaFields as $field) {
//         $filePath = $this->form->getState($field)[$field];

//         if ($filePath) {
//             // لو Filament خزنه في storage/app/public
//             $fullPath = storage_path('app/public/' . $filePath);

//             if (file_exists($fullPath)) {
//                 $category
//                     ->addMedia($fullPath)
//                     ->preservingOriginal()
//                     ->toMediaCollection($field);
//             }
//         }
//     }

//     Notification::make()
//         ->title('Category created successfully with Media!')
//         ->success()
//         ->send();
// }
}
