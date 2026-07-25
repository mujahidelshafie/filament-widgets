# Filament Dashboard Widgets

A collection of reusable dashboard widgets for **FilamentPHP**, designed to accelerate the development of modern Laravel admin panels.

These widgets are built with clean architecture principles and can be adapted to different business applications including ERP, CRM, SaaS platforms, and management systems.

---

## ✨ Features

- Reusable Filament dashboard components
- Clean and extendable architecture
- Model-independent design
- Easy integration with Laravel applications
- Suitable for ERP, CRM, and SaaS dashboards
- Production-inspired implementations

---

## 📦 Included Widgets

| Widget | Description |
|---|---|
| Status Distribution Chart | Display records grouped by status |
| Statistics Overview | KPI cards for dashboard metrics |
| Latest Records Table | Display recent database records |
| Monthly Growth Chart | Visualize monthly trends |
| Alert Statistics | Display important system indicators |

---

## 🖼 Screenshots

Coming soon.

---

## ⚙️ Requirements

- PHP 8.2+
- Laravel 11+
- FilamentPHP 3+

---

## 🚀 Usage

These widgets are designed to be extended.

Example:

```php
class ProjectsChart extends StatusDistributionChartWidget
{
    protected function getQuery()
    {
        return Project::query();
    }
}
```

Your application provides the data source while the widget handles the dashboard presentation.

---

## 📚 Documentation

Detailed documentation is available:

- [Installation](docs/installation.md)
- [Usage](docs/usage.md)

Widget documentation:

- [Status Distribution Chart](docs/status-distribution-chart.md)
- [Statistics Overview](docs/statistics-overview.md)
- [Latest Records Table](docs/latest-records-table.md)
- [Monthly Growth Chart](docs/monthly-growth-chart.md)
- [Alert Statistics](docs/alert-statistics.md)

---

## 🛣 Roadmap

- Add more Filament widgets
- Add more chart components
- Improve customization options
- Add Composer package support
- Add automated tests

---

## 🤝 Contributing

Contributions, suggestions, and improvements are welcome.

Feel free to open an issue or submit a pull request.

---

## 📄 License

MIT License.

---

## 👨‍💻 Author

**Mujahid Elshafie Ahmed**

Senior Software Engineer  
SaaS | ERP | CRM | Laravel | FilamentPHP

Website:
https://mujahid-elshafie.vercel.app
