<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Mujahid\FilamentDashboardWidgets\LatestRecordsTableWidget;


class RecentRecordsExample extends LatestRecordsTableWidget
{

    protected function getQuery(): Builder
    {
        return Order::query();
    }


    protected function getColumns(): array
    {
        return [

            TextColumn::make('id'),

            TextColumn::make('status')
                ->badge(),

            TextColumn::make('created_at')
                ->date(),

        ];
    }

}
