<?php

namespace App\Filament\Resources\WidgetsResource\Widgets;

use App\Models\CustomerAccounts;
use App\Models\CustomerPayments;
use App\Models\Payments;
use App\Models\Stock;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;

    protected function getVehicleCount(): int
    {
        $count = Stock::count();
        return number_format($count);
    }

    protected function getCustomerCount(): int
    {
        $count = CustomerAccounts::count();
        return number_format($count);
    }
    protected function getPaymentTotal()
    {
        $payment = Payments::get('amount');
        $total = 0;
        foreach ($payment as $amount) {
            $total += $amount->amount;
        }
        $total = "$" . number_format($total);
        return $total;
    }
    protected function getStats(): array
    {
        return [
            Stat::make('Total Vehicles', $this->getVehicleCount())
                ->description('Uploaded'),
            Stat::make('Total Customers', $this->getCustomerCount())
                ->description('Active'),
            Stat::make('Total Payments', $this->getPaymentTotal())
                ->description('Recieved')
        ];
    }
}
