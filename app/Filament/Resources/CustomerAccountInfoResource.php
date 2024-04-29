<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerAccountInfoResource\Pages;
use App\Filament\Resources\CustomerAccountInfoResource\RelationManagers;
use App\Models\CustomerAccounts;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class CustomerAccountInfoResource extends Resource
{
    protected static ?string $model = CustomerAccounts::class;

    protected static ?string $modelLabel = 'Customer Account';

    protected static ?string $slug = 'Customer Account';

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationGroup = "Accounts";

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vehicle_name'),
                Forms\Components\TextInput::make('chassis')
                    ->unique(),
                Forms\Components\TextInput::make('total_cnf'),
                Forms\Components\Select::make('customer_name')
                    ->options(
                        function (Get $get) {
                            return User::where('type', 'Customer Account')->pluck('name', 'name');
                        }
                    )
                    ->searchable(),
                Forms\Components\TextInput::make('customer_email'),
                Forms\Components\DatePicker::make('payment_recieved'),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->label('Date')
                    ->sortable(),
                Tables\Columns\TextColumn::make('vehicle_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('chassis')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_cnf')
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_email')
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_recieved')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('customer_name')
                    ->options(
                        function (Get $get) {
                            return User::where('type', 'Customer Account')->pluck('name', 'name');
                        }
                    )
                    ->searchable(),
            ], layout: FiltersLayout::Modal)
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
            'index' => Pages\ListCustomerAccountInfos::route('/'),
            'create' => Pages\CreateCustomerAccountInfo::route('/create'),
            'edit' => Pages\EditCustomerAccountInfo::route('/{record}/edit'),
        ];
    }
}
