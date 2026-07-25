<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Mujahid\FilamentDashboardWidgets\StatusDistributionChartWidget;
use Illuminate\Database\Eloquent\Builder;

class ProjectsStatusExample extends StatusDistributionChartWidget
{
    protected static ?string $heading = 'Projects Status';


    protected function getQuery(): Builder
    {
        return Project::query();
    }


    protected function getStatusColumn(): string
    {
        return 'status';
    }
}
