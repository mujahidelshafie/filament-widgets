<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Mujahid\FilamentDashboardWidgets\StatisticsOverviewWidget;


class UsersStatisticsExample extends StatisticsOverviewWidget
{

    protected function getStatistics(): array
    {
        return [

            Stat::make(
                'Total Users',
                User::count()
            ),


            Stat::make(
                'Active Users',
                User::where(
                    'active',
                    true
                )->count()
            ),


            Stat::make(
                'New Users',
                User::where(
                    'created_at',
                    '>=',
                    now()->startOfMonth()
                )->count()
            ),

        ];
    }

}
