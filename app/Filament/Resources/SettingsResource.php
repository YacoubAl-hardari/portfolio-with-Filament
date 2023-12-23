<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Settings;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SettingsResource\Pages;


class SettingsResource extends Resource
{
    use Translatable;
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'setting';
    protected static ?string $modelLabel = 'Setting';
    protected static ?string $navigationLabel = 'Setting';
    protected static ?int $navigationSort =1;
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()
                ->schema([
                    Section::make(__('Basic Information'))
                    ->schema([
                        TextInput::make('email')->label(__('Email')),
                        TextInput::make('phone')->label(__('Phone')),
                        TextInput::make('location')->label(__('Address')),
                        Toggle::make('maintenance')->label(__('Maintenance')),
                        
                        FileUpload::make('favicon')
                            ->label(__('favicon'))
                            ->required()
                            ->acceptedFileTypes(['image/png','image/jpg','image/jpeg'])
                            ->directory('settingImages/favIcon')
                            ->visibility('public')
                            ->disk('public')
                            ->imageEditor(),
                        
                        FileUpload::make('footerlogo')
                            ->label(__('Footer Logo'))
                            ->required()
                            ->acceptedFileTypes(['image/png','image/jpg','image/jpeg'])
                            ->directory('settingImages/favIcon')
                            ->visibility('public')
                            ->disk('public')
                            ->imageEditor()
                    
                    ])
                    ->columnSpan(
                        [  
                          'default' => 1,
                          'sm' => 3,
                          'md' => 3,
                          'lg' => 3,
                          'xl' => 3,
                          '2xl' => 1,
                          ]
                      ),

                      Section::make(__('Colors'))
                      ->schema([
                          Repeater::make('color')->label(__('Color'))
                              ->schema([
                                  TextInput::make('primary_name')->required()->label(__('Primary Color Name')),
                                  ColorPicker::make('primary_value')->required()->label(__('Primary Color Value')),
                                  TextInput::make('secondary_name')->required()->label(__('Secondary Color Name')),
                                  ColorPicker::make('secondary_value')->required()->label(__('Secondary Color Value')),
                              ])
                              ->disableItemCreation()
                              ->disableItemDeletion()
                              ->columns(2),
                          
                          Repeater::make('social_links')->label(__('Social Media Links'))
                              ->schema([
                                  TextInput::make('name')->required()->label(__('Social Media Name')),
                                  TextInput::make('url')->rules('url')->required()->label(__('Social Media URL')),
                                  FileUpload::make('icon')
                                      ->label(__('Social Media Icon'))
                                      ->required()
                                      ->directory('settingImages/socialIcon')
                                      ->visibility('public')
                                      ->disk('public')
                                      ->imageEditor()
                                      ->imageEditor(),
                              ])
                              ->columns(1)
                              ->grid(3),
                      ])
                    ->columnSpan(
                      [  
                        'default' => 1,
                        'sm' => 3,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 2,
                        ]
                    ),

                ])->columns(3),


             

                Section::make(__('SEO - Google Search Engine Data'))
                ->schema([
                 TextInput::make('meta_title'),
                 FileUpload::make('meta_image')
                 ->image()
                 ->imageEditor(),
                 TagsInput::make('meta_keywords'),
                 TextInput::make('meta_description'),
                ]),


        ]);
    }
    public static function table(Table $table): Table
    {   
        return $table
            ->columns([

                ToggleColumn::make('maintenance')->label(__('Maintenance Mode')),
                ImageColumn::make('favicon')->label(__('Favicon')),
                TextColumn::make('created_at')->label(__('Creation Date'))->dateTime()
                    ->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->label(__('Modification Date'))->dateTime()
                    ->sortable()->toggleable(isToggledHiddenByDefault: true)
            ])

            ->filters([
               //
            ])
            ->actions([
                ActionGroup::make(
                    [
                        Tables\Actions\ViewAction::make(),
                        Tables\Actions\EditAction::make(),
                        Tables\Actions\DeleteAction::make(),
                    ]
                )
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'view' => Pages\ViewSettings::route('/{record}'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}
