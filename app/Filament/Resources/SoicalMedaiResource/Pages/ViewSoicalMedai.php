<?php

namespace App\Filament\Resources\SoicalMedaiResource\Pages;

use App\Filament\Resources\SoicalMedaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSoicalMedai extends ViewRecord
{
    protected static string $resource = SoicalMedaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
