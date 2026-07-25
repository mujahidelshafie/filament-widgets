<?php

namespace Mujahid\FilamentDashboardWidgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

abstract class StatisticsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return $this->getStatistics();
    }


    /**
     * Define dashboard statistics here.
     *
     * @return array<Stat>
     */
    abstract protected function getStatistics(): array;
}
