# Usage

These widgets are designed to be extended, not used directly.

Each widget provides reusable dashboard functionality while allowing developers to define their own:

- Models
- Queries
- Columns
- Statistics
- Business logic

## Basic Concept

The package separates:

### Widget Structure

Provided by this repository.

### Application Data

Provided by your Laravel application.

Example:

The widget knows how to display a chart.

Your application decides:

- Which model to query
- Which column to group
- Which filters to apply

This keeps widgets reusable across different projects.
