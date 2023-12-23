<?php

namespace App\Filament\Resources\SkillsTecheResource\Pages;

use App\Filament\Resources\SkillsTecheResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkillsTeche extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = SkillsTecheResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
                  
           Actions\LocaleSwitcher::make(),
        ];
    }
}
