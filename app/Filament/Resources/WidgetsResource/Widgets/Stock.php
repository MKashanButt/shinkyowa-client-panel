<?php

namespace App\Filament\Resources\WidgetsResource\Widgets;

use App\Models\Stock as ModelsStock;
use Blueprint\Builder;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Stock extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(ModelsStock::query())
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('chassis'),
                Tables\Columns\TextColumn::make('make'),
                Tables\Columns\TextColumn::make('model'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('fob'),
                Tables\Columns\TextColumn::make('mileage'),
                Tables\Columns\TextColumn::make('doors'),
                Tables\Columns\TextColumn::make('body_type'),
                Tables\Columns\TextColumn::make('fuel'),
                Tables\Columns\TextColumn::make('category'),
            ]);
    }
}
