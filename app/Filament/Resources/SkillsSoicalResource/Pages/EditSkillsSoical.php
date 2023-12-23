<?php

namespace App\Filament\Resources\SkillsSoicalResource\Pages;

use App\Filament\Resources\SkillsSoicalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkillsSoical extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = SkillsSoicalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
