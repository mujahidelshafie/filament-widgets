# Installation

## Requirements

Before using these widgets, make sure your project has:

- PHP 8.2+
- Laravel 11+
- FilamentPHP 3+

## Installation

Copy the required widget file into your Filament project.

Place widgets inside your application widgets directory:
app/Filament/Widgets

Then extend the widget and provide your own data source.

Example:

```php
class ProjectsChart extends StatusDistributionChartWidget
{
    protected function getQuery()
    {
        return Project::query();
    }
}

Your widget is now ready to use inside your Filament dashboard.
