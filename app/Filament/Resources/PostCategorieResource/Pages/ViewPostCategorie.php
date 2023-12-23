<?php

namespace App\Filament\Resources\PostCategorieResource\Pages;

use App\Filament\Resources\PostCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostCategorie extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;
    protected static string $resource = PostCategorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
