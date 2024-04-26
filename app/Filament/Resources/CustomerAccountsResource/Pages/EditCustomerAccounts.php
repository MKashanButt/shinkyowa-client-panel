<?php

namespace App\Filament\Resources\CustomerAccountsResource\Pages;

use App\Filament\Resources\CustomerAccountsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerAccounts extends EditRecord
{
    protected static string $resource = CustomerAccountsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
