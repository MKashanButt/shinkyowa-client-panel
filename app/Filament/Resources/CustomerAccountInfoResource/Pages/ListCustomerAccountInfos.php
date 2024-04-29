<?php

namespace App\Filament\Resources\CustomerAccountInfoResource\Pages;

use App\Filament\Resources\CustomerAccountInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerAccountInfos extends ListRecords
{
    protected static string $resource = CustomerAccountInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
