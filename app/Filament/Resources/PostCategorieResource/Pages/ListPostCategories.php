<?php

namespace App\Filament\Resources\PostCategorieResource\Pages;

use App\Filament\Resources\PostCategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostCategories extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PostCategorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
