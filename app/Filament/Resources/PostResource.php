<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\PostResource\Pages;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    use Translatable;
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';

    protected static ?string $navigationGroup = 'blog';
    protected static ?string $modelLabel = 'post category';
    protected static ?string $navigationLabel = 'post category';
    protected static ?int $navigationSort =2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
               
                    Section::make()
                    ->schema([
                        Forms\Components\Select::make('post_category_id')
                        ->relationship('post_categories','name')
                            ->required()
                            ->getOptionLabelFromRecordUsing(fn($record, $livewire) => $record->hasTranslation('name', $livewire->activeLocale)
                            ? $record->getTranslation('name', $livewire->activeLocale)
                            : $record->name)
                            ,
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->debounce(2000)
                            ->afterStateUpdated(function(Set $set,Get $get){
                               $slug = Str::slug($get('name'));
                               $set('url',$slug);
                            })
                            ,
                            Forms\Components\TextInput::make('url')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\DatePicker::make('date')
                                ->required(),

                                Forms\Components\FileUpload::make('images')
                        ->image()
                        ->imageEditor()
                        ->columnSpanFull()
                            ->required(),
                        Forms\Components\Toggle::make('status')
                        ->columnSpanFull()
                            ->required(),
                    ])->columnSpan(1)->columns(1),


                    Section::make()
                   ->schema(
                    [
                        Forms\Components\TextInput::make('samll_description')
                        ->columnSpanFull()
                            ->required(),
                            TinyEditor::make('long_description')
                        ->columnSpanFull()
                            ->required(),
                        
                    ]
                   )->columnSpan(3),

                ])->columns(4),

              
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable(),
                    Tables\Columns\ImageColumn::make('images')
                        ->searchable(),
                        Tables\Columns\TextColumn::make('users.name')
                        ->sortable(),
                        Tables\Columns\TextColumn::make('post_categories.name')
                        ->sortable(),
                        Tables\Columns\TextColumn::make('url')
                        ->toggleable(isToggledHiddenByDefault: true)
                        ->searchable(),
                        Tables\Columns\ToggleColumn::make('status'),
                        Tables\Columns\TextColumn::make('date')
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
                Tables\Actions\ReplicateAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }    
}
