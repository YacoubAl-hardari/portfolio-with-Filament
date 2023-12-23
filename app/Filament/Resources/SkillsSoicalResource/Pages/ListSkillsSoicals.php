<?php

namespace App\Filament\Resources\SkillsSoicalResource\Pages;

use App\Filament\Resources\SkillsSoicalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkillsSoicals extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = SkillsSoicalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
