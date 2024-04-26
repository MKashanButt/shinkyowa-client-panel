<?php

namespace App\Filament\Resources\CompanyAccountsResource\Pages;

use App\Filament\Resources\CompanyAccountsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyAccounts extends ListRecords
{
    protected static string $resource = CompanyAccountsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
