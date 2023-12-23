<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SkillsTeche;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SkillsTecheResource\Pages;

class SkillsTecheResource extends Resource
{
    use Translatable;
    protected static ?string $model = SkillsTeche::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-vertical';
    protected static ?string $navigationGroup = 'About Me';
    protected static ?string $modelLabel = 'Skill Teche';
    protected static ?string $navigationLabel = 'Skill Teche';
    protected static ?int $navigationSort =5 ;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make()->schema([
                Forms\Components\TextInput::make('title')
                ->required(),
            Forms\Components\TextInput::make('percentage')
                ->required()
                ->numeric(),
            Forms\Components\Toggle::make('status')
                ->required(),
               ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('status'),
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
            'index' => Pages\ListSkillsTeches::route('/'),
            'create' => Pages\CreateSkillsTeche::route('/create'),
            'view' => Pages\ViewSkillsTeche::route('/{record}'),
            'edit' => Pages\EditSkillsTeche::route('/{record}/edit'),
        ];
    }    
}
