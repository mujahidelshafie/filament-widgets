<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Mujahid\FilamentDashboardWidgets\MonthlyGrowthChartWidget;


class SalesGrowthExample extends MonthlyGrowthChartWidget
{

    protected static ?string $heading = 'Monthly Orders';


    protected function getQuery(): Builder
    {
        return Order::query();
    }


}
