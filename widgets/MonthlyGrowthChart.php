<?php

namespace Mujahid\FilamentDashboardWidgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

abstract class MonthlyGrowthChart extends ChartWidget
{
    protected static ?string $heading = 'Monthly Growth';


    /**
     * Query source.
     */
    abstract protected function getQuery(): Builder;


    /**
     * Date column used for grouping.
     */
    protected function getDateColumn(): string
    {
        return 'created_at';
    }


    /**
     * Number of months to display.
     */
    protected function getMonthsRange(): int
    {
        return 12;
    }


    protected function getData(): array
    {
        $dateColumn = $this->getDateColumn();


        $data = $this
            ->getQuery()
            ->selectRaw(
                "MONTH($dateColumn) as month,
                 COUNT(*) as count"
            )
            ->where(
                $dateColumn,
                '>=',
                now()->subMonths(
                    $this->getMonthsRange()
                )
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();


        $labels = [];
        $values = [];


        for ($i = 1; $i <= 12; $i++) {

            $labels[] = now()
                ->month($i)
                ->format('M');

            $values[] = $data[$i] ?? 0;
        }


        return [

            'datasets' => [
                [
                    'label' => 'Records',
                    'data' => $values,
                ],
            ],

            'labels' => $labels,

        ];
    }


    protected function getType(): string
    {
        return 'line';
    }
}
