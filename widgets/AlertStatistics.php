<?php

namespace Mujahid\FilamentDashboardWidgets;

use Filament\Widgets\Widget;

abstract class AlertStatistics extends Widget
{
    protected static string $view = 'filament-dashboard-widgets::alert-statistics';


    /**
     * Define alert items.
     *
     * @return array<int, array{
     *     label:string,
     *     value:int|string,
     *     color:string,
     *     icon:string|null
     * }>
     */
    abstract protected function getAlerts(): array;


    protected function getViewData(): array
    {
        return [
            'alerts' => $this->getAlerts(),
        ];
    }
}
