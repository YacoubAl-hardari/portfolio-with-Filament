<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SoicalMedai;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use App\Filament\Resources\SoicalMedaiResource\Pages;

class SoicalMedaiResource extends Resource
{
    protected static ?string $model = SoicalMedai::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';
    protected static ?string $navigationGroup = 'setting';
    protected static ?string $modelLabel = 'Social Media';
    protected static ?string $navigationLabel = 'Social Media';
    protected static ?int $navigationSort =1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Section::make()->schema([
                Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('phone')
                ->tel()
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('location')
                ->required()
                ->maxLength(255),
                
                Repeater::make('social_links')
                ->schema([
                    
                    Forms\Components\FileUpload::make('icon')
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull()
                        ->required(),
                    Forms\Components\TextInput::make('link')
                    ->columnSpanFull()
                        ->required(),
                ])->columnSpanFull()
                ->grid(3),
              ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
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
            'index' => Pages\ListSoicalMedais::route('/'),
            'create' => Pages\CreateSoicalMedai::route('/create'),
            'view' => Pages\ViewSoicalMedai::route('/{record}'),
            'edit' => Pages\EditSoicalMedai::route('/{record}/edit'),
        ];
    }    
}
