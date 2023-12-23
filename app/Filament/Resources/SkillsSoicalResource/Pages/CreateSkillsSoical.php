<?php

namespace App\Filament\Resources\SkillsSoicalResource\Pages;

use App\Filament\Resources\SkillsSoicalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSkillsSoical extends CreateRecord
{
    protected static string $resource = SkillsSoicalResource::class;
    use CreateRecord\Concerns\Translatable;
    protected function getHeaderActions(): array
{
  return [
      Actions\LocaleSwitcher::make(),
  ];
}
}
