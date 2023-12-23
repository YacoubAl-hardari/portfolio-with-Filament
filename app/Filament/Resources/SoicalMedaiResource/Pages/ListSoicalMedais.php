<?php

namespace App\Filament\Resources\SoicalMedaiResource\Pages;

use App\Filament\Resources\SoicalMedaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoicalMedais extends ListRecords
{
    protected static string $resource = SoicalMedaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
