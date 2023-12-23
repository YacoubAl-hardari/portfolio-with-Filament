<?php

namespace App\Filament\Resources\ContactUsResource\Pages;

use App\Filament\Resources\ContactUsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContactUs extends CreateRecord
{
    protected static string $resource = ContactUsResource::class;
    
    use CreateRecord\Concerns\Translatable;
    protected function getHeaderActions(): array
{
  return [
      Actions\LocaleSwitcher::make(),
  ];
}
}
