<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHero extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = HeroResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

}
