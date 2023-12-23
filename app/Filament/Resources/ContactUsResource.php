<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\ContactUs;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\ContactUsResource\Pages;

class ContactUsResource extends Resource
{
    use Translatable;
    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'About Me';
    protected static ?string $modelLabel = 'Address';
    protected static ?string $navigationLabel = 'Address';
    protected static ?int $navigationSort =7 ;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make()->schema([
                Forms\Components\TextInput::make('name')
                ->required(),
            Forms\Components\FileUpload::make('image')
            ->image()
            ->imageEditor()
                ->image()
                ->required(),

                Repeater::make('data')
                ->schema([
                Forms\Components\TextInput::make('name')
                ->required(),
                ])->grid(2),
               ]),
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
            'index' => Pages\ListContactUs::route('/'),
            'create' => Pages\CreateContactUs::route('/create'),
            'view' => Pages\ViewContactUs::route('/{record}'),
            'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }    
}
