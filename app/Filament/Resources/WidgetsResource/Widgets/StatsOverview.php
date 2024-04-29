<?php

namespace App\Filament\Resources\WidgetsResource\Widgets;

use App\Models\CustomerAccounts;
use App\Models\CustomerPayments;
use App\Models\Payments;
use App\Models\Stock;
use App\Models\User;
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
        $count = User::where('type', 'Customer Account')->count();
        return number_format($count);
    }
    protected function getPaymentTotal()
    {
        $payment = Payments::get('amount_in_dollar');
        $total = 0;
        foreach ($payment as $amount) {
            $total += $amount->amount_in_dollar;
        }
        $total = "$" . number_format($total);
        return $total;
    }
    protected function getStats(): array
    {
        return [
            Stat::make('', $this->getVehicleCount())
                ->description('Vehicles Uploaded'),
            Stat::make('', $this->getCustomerCount())
                ->description('Active Customers'),
            Stat::make('', $this->getPaymentTotal())
                ->description('Recieved')
        ];
    }
}
