<?php

namespace App\Filament\Resources\PostCategorieResource\Pages;

use App\Filament\Resources\PostCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostCategorie extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = PostCategorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
