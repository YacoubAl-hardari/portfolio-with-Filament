<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AboutMe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\AboutMeResource\Pages;

class AboutMeResource extends Resource
{
    use Translatable;
    protected static ?string $model = AboutMe::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'About Me';
    protected static ?string $modelLabel = 'About Me';
    protected static ?string $navigationLabel = 'About Me';
    protected static ?int $navigationSort =2 ;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
             Section::make()->schema([
                Forms\Components\TextInput::make('title')
                ->required(),
                Forms\Components\TagsInput::make('tags')
                    ->required(),
            Forms\Components\TextInput::make('description')
            ->columnSpanFull()
                ->required(),
            Forms\Components\FileUpload::make('image')
                ->image()
            ->imageEditor()
                ->required(),
            Forms\Components\FileUpload::make('cv')
            ->image()
            ->downloadable()
            ->imageEditor()
                ->required(),
             ])->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('cv')
                    ->searchable(),
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
            'index' => Pages\ListAboutMes::route('/'),
            'create' => Pages\CreateAboutMe::route('/create'),
            'view' => Pages\ViewAboutMe::route('/{record}'),
            'edit' => Pages\EditAboutMe::route('/{record}/edit'),
        ];
    }    
}
