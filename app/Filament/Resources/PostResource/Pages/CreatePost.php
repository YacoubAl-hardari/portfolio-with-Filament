<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();


        return $data;

    }


    use CreateRecord\Concerns\Translatable;
    protected function getHeaderActions(): array
{
  return [
      Actions\LocaleSwitcher::make(),
  ];
}

protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
