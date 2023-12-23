<?php

namespace App\Filament\Resources\SkillsSoicalResource\Pages;

use App\Filament\Resources\SkillsSoicalResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSkillsSoical extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = SkillsSoicalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
