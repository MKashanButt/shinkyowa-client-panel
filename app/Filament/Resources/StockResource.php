<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StockResource\Pages;
use App\Filament\Resources\StockResource\RelationManagers;
use App\Models\Stock;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StockResource extends Resource
{
    protected static ?string $model = Stock::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = "Stock";

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('stock_id')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('make')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('model')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('fob')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('currency')
                    ->maxLength(1)
                    ->default(null),
                Forms\Components\TextInput::make('mileage')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('engine')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('doors')
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('transmission')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('body_type')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('fuel')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(25),
                Forms\Components\Textarea::make('extras')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('buy_link')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required(),
                Forms\Components\FileUpload::make('stock_images')
                    ->multiple()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stock_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('make')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fob')
                    ->searchable(),
                Tables\Columns\TextColumn::make('currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mileage')
                    ->searchable(),
                Tables\Columns\TextColumn::make('engine')
                    ->searchable(),
                Tables\Columns\TextColumn::make('doors')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transmission')
                    ->searchable(),
                Tables\Columns\TextColumn::make('body_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fuel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListStocks::route('/'),
            'create' => Pages\CreateStock::route('/create'),
            'edit' => Pages\EditStock::route('/{record}/edit'),
        ];
    }
}
