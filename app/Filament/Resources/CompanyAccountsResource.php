<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyAccountsResource\Pages;
use App\Filament\Resources\CompanyAccountsResource\RelationManagers;
use App\Models\CompanyAccounts;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyAccountsResource extends Resource
{
    protected static ?string $model = CompanyAccounts::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = "Accounts";

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('debit')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('credit')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('balance')
                    ->required()
                    ->maxLength(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('debit')
                    ->numeric()
                    ->searchable(),
                Tables\Columns\TextColumn::make('credit')
                    ->numeric()
                    ->searchable(),
                Tables\Columns\TextColumn::make('balance')
                    ->numeric()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListCompanyAccounts::route('/'),
            'create' => Pages\CreateCompanyAccounts::route('/create'),
            'edit' => Pages\EditCompanyAccounts::route('/{record}/edit'),
        ];
    }
}
