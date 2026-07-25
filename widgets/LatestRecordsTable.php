<?php

namespace Mujahid\FilamentDashboardWidgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

abstract class LatestRecordsTable extends BaseWidget
{
    protected static int $limit = 5;


    abstract protected function getQuery(): Builder;


    /**
     * Columns displayed in the table.
     */
    abstract protected function getColumns(): array;


    public function table(Table $table): Table
    {
        return $table
            ->query(
                $this->getQuery()
                    ->latest()
                    ->limit(static::$limit)
            )
            ->columns(
                $this->getColumns()
            );
    }


    protected function getTableHeading(): ?string
    {
        return 'Latest Records';
    }
}
