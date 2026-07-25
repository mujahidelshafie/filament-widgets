# Status Distribution Chart Widget

Displays records grouped by status.

Useful for:

- Projects
- Orders
- Tasks
- Tickets
- Requests


## Example

A project management system:
Pending 15
Processing 30
Completed 80
Cancelled 5


## Customization

You can define:

- Query source
- Status column
- Chart type

Example:

```php
protected function getQuery()
{
    return Project::query();
}
{
    return Project::query();
}
