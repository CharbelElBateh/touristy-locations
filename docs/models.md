# Models

## `Location` Model

The `Location` model represents a location in the application.

### Table Name

The `locations` table is associated with the `Location` model.

### Properties

The `Location` model has the following properties:

- `$fillable` (type: `array<int, string>`): The attributes that are mass assignable.

## `User` Model

The `User` model represents a user in the application.

### Table Name

The `users` table is associated with the `User` model.

### Properties

The `User` model has the following properties:

- `$fillable` (type: `array<int, string>`): The attributes that are mass assignable.
- `$hidden` (type: `array<int, string>`): The attributes that should be hidden for serialization.
- `$casts` (type: `array<string, string>`): The attributes that should be cast.
