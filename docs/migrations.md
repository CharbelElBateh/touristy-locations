# Migrations

## Migration: `locations`

The `locations` migration creates the `locations` table in the database.

### Table: `locations`

The `locations` table has the following columns:

- `id`: The primary key column for the table.
- `name`: A string column representing the name of the location.
- `description`: A text column representing the description of the location.
- `image`: A string column representing the image path or URL of the location.
- `created_at`: The timestamp column indicating when the record was created.
- `updated_at`: The timestamp column indicating when the record was last updated.

### Sample Usage

To create the `locations` table, you can run the migration using Laravel's migration commands.