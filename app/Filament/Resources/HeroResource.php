<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Hero;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\HeroResource\Pages;

class HeroResource extends Resource
{
    use Translatable;
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'About Me';
    protected static ?string $modelLabel = 'Hero';
    protected static ?string $navigationLabel = 'Hero';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Section::make()
              ->schema([
                Forms\Components\TextInput::make('title')
                ->translateLabel()
                ->required(),
            Forms\Components\TextInput::make('name')
            ->translateLabel()
                ->required(),
            Forms\Components\TextInput::make('job')
            ->translateLabel()
                ->required(),
            Forms\Components\FileUpload::make('image')
            ->translateLabel()
                ->image()
                ->imageEditor()
                ->columnSpanFull()
                ->required(),
              ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'view' => Pages\ViewHero::route('/{record}'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }    
}
