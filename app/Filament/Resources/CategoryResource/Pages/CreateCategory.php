<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
    use CreateRecord\Concerns\Translatable;
    protected function getHeaderActions(): array
{
  return [
      Actions\LocaleSwitcher::make(),
  ];
}

}
