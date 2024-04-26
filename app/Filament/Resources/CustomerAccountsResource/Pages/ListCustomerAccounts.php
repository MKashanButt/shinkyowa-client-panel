<?php

namespace App\Filament\Resources\CustomerAccountsResource\Pages;

use App\Filament\Resources\CustomerAccountsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerAccounts extends ListRecords
{
    protected static string $resource = CustomerAccountsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
