<?php

namespace App\Filament\Resources\SkillsTecheResource\Pages;

use App\Filament\Resources\SkillsTecheResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkillsTeches extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = SkillsTecheResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
                  
           Actions\LocaleSwitcher::make(),
        ];
    }
}
