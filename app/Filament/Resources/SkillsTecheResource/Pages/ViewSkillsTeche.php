<?php

namespace App\Filament\Resources\SkillsTecheResource\Pages;

use App\Filament\Resources\SkillsTecheResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSkillsTeche extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = SkillsTecheResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
                  
            Actions\LocaleSwitcher::make(),
        ];
    }
}
