<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                  ImageColumn::make('mobile_image')
                    ->label('Mobile Image')
                    ->getStateUsing(function ($record) {
                        return $record->getFirstMediaUrl('mobile_image');
                    }),
                TextColumn::make('name.ar')
                    ->label('Name (AR)')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('type')
                    ->label('Type')
                    ->getStateUsing(fn($record) => $record->type === 'service' ? 'Service' : 'Product')
                    ->sortable(),

                BadgeColumn::make('status')
                    ->label('Active')
                    ->getStateUsing(fn($record) => $record->status ? 'Active' : 'Inactive')
                    ->colors([
                        'success' => fn($record) => $record->status == 1,
                        'danger' => fn($record) => $record->status == 0,
                    ])
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
