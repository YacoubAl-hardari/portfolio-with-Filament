<?php

namespace App\Filament\Resources\PostCategorieResource\Pages;

use App\Filament\Resources\PostCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePostCategorie extends CreateRecord
{
    protected static string $resource = PostCategorieResource::class;
    
    use CreateRecord\Concerns\Translatable;
    protected function getHeaderActions(): array
{
  return [
      Actions\LocaleSwitcher::make(),
  ];
}


}
