# Touristy Locations

This is a full stack webapp that allows user to discover Touristy locations in Lebanon.
By default the application has 10 locations and more could be added through logging in. Signing up (which seems counterproductive) is also set up for an easier trial.

## Prerequisites

Before running the application, make sure you have the following installed:

- PHP (version 7.4 or later)
- Composer
- MySQL (or any other compatible database)
- Node.js (version 14 or later)

## Installation

1. Navigate to the project directory:

   ```bash
   cd laravel-application
   ```

2. Install the project dependencies using Composer:

   ```bash
   composer install
   ```

3. Install the frontend dependencies using Node Package Manager (NPM):

   ```bash
   npm install
   ```

4. Create a new `.env` file by duplicating the `.env.example` file:

   ```bash
   cp .env.example .env
   ```

5. Generate a new application key:

   ```bash
   php artisan key:generate
   ```

6. Configure the database connection by updating the `.env` file with your database credentials:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

7. Run the database migrations to create the necessary tables:

   ```bash
   php artisan migrate
   ```

8. Link the storage directory to the public directory:

   ```bash
   php artisan storage:link
   ```

9. Run the database seeder

    ```bash 
        php artisan db:seed
    ```

10. Run the following commands simultaneously in two separate terminals:

    ```bash
    npm run dev
    ```

    ```bash
    php artisan serve
    ```

    The application will be accessible at `http://localhost:8000`.

## Usage

- To access the application, open your web browser and visit `http://localhost:8000`.
- You can sign up for a new account or use the default admin account (the one created by the seeder and has a password `admin`) to log in.
- Once logged in, you can manage locations and users through their respective sections in the application.

## Additional Notes

- The uploaded images are stored in the `public/storage/uploads` directory.
- To view an uploaded image, access the URL `http://localhost:8000/storage/uploads/<filename>`, where `<filename>` is the name of the image file.
- Make sure to keep the `storage` directory writable by the web server for successful image uploads.

