<?php

namespace App\Filament\Resources\SoicalMedaiResource\Pages;

use App\Filament\Resources\SoicalMedaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoicalMedai extends EditRecord
{
    protected static string $resource = SoicalMedaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
