<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SkillsSoical;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SkillsSoicalResource\Pages;

class SkillsSoicalResource extends Resource
{
    use Translatable;
    protected static ?string $model = SkillsSoical::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';


    protected static ?string $navigationGroup = 'About Me';
    protected static ?string $modelLabel = 'Skills Soical';
    protected static ?string $navigationLabel = 'Skills Soical';
    protected static ?int $navigationSort =4 ;
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
                Tables\Columns\TextColumn::make('title')
                    ->sortable(),
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
            'index' => Pages\ListSkillsSoicals::route('/'),
            'create' => Pages\CreateSkillsSoical::route('/create'),
            'view' => Pages\ViewSkillsSoical::route('/{record}'),
            'edit' => Pages\EditSkillsSoical::route('/{record}/edit'),
        ];
    }    
}
