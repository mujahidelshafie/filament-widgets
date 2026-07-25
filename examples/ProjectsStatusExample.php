<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Mujahid\FilamentDashboardWidgets\StatusDistributionChart;
use Illuminate\Database\Eloquent\Builder;

class ProjectsStatusExample extends StatusDistributionChart
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
