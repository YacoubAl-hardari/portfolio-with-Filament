<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\ProjectResource\Pages;

class ProjectResource extends Resource
{
    use Translatable;
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';
    protected static ?string $navigationGroup = 'project';
    protected static ?string $modelLabel = 'project';
    protected static ?string $navigationLabel = 'project';
    protected static ?int $navigationSort =2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Section::make()->schema([
                Forms\Components\Select::make('category_id')
                ->relationship('categories','name')
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
                 }),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(255),
            Forms\Components\TextInput::make('description')
            ->columnSpanFull()
                ->required(),
            Forms\Components\TagsInput::make('tags')
            ->columnSpanFull()

                ->required(),
            Forms\Components\FileUpload::make('images')
            ->image()
            ->imageEditor()
            ->columnSpanFull()
                ->required(),
            Forms\Components\Toggle::make('status')
            ->columnSpanFull()

                ->required(),
              ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categories.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('images')
                    ->searchable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }    
}
