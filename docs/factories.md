# Factories

## `UserFactory`

The `UserFactory` class is a factory class used to generate fake user instances for testing or seeding the database.

The password is set to a hashed value of 'admin' by default

### Class Hierarchy

- `Illuminate\Database\Eloquent\Factories\Factory`

### Methods

#### `definition()`

- **Description**: Defines the default state of the model.
- **Access**: Public
- **Returns**: `array<string, mixed>`

#### `unverified()`

- **Description**: Indicates that the model's email address should be unverified.
- **Access**: Public
- **Returns**: `static`

Please note that the provided code assumes the usage of Laravel's model factories. The `UserFactory` class defines the default state of the `User` model, including the generation of fake data such as the name, email, password, and remember token. The `unverified()` method allows you to indicate that the user's email address should be unverified by setting the `email_verified_at` attribute to null.