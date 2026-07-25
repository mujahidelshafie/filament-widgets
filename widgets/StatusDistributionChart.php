<?php

namespace Mujahid\FilamentDashboardWidgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Database\Eloquent\Builder;

abstract class StatusDistributionChart extends ChartWidget
{
    protected static ?string $heading = 'Status Distribution';

    /**
     * Model query source.
     */
    abstract protected function getQuery(): Builder;


    /**
     * Column used for grouping.
     */
    protected function getStatusColumn(): string
    {
        return 'status';
    }


    protected function getData(): array
    {
        $data = $this
            ->getQuery()
            ->selectRaw(
                $this->getStatusColumn() . ', COUNT(*) as count'
            )
            ->groupBy($this->getStatusColumn())
            ->pluck('count', $this->getStatusColumn())
            ->toArray();


        return [
            'datasets' => [
                [
                    'label' => 'Records',
                    'data' => array_values($data),
                ],
            ],

            'labels' => array_keys($data),
        ];
    }


    protected function getType(): string
    {
        return 'bar';
    }
}
