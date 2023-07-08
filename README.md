<h1 align="middle">Touristy Locations</h1>

This is a full stack webapp that allows user to discover Touristy locations in Lebanon.
By default the application has 10 locations and more could be added through logging in. Signing up (which seems counterproductive) is also set up for an easier trial.

## Technologies used

<p align="middle">
  <a href="https://developer.mozilla.org/en-US/docs/Glossary/LARAVEL" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/laravel-colored.svg" width="36" height="36" alt="Laravel" /></a>
  <a href="https://developer.mozilla.org/en-US/docs/Glossary/PHP" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/php-colored.svg" width="36" height="36" alt="PHP" /></a>
    <a href="https://developer.mozilla.org/en-US/docs/Glossary/Bootstrap" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/bootstrap-colored.svg" width="36" height="36" alt="Bootstrap" /></a>
    <a href="https://developer.mozilla.org/en-US/docs/Glossary/Git" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/git-colored.svg" width="36" height="36" alt="Git" /></a>
  <a href="https://developer.mozilla.org/en-US/docs/Glossary/MYSQL" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/mysql-colored.svg" width="36" height="36" alt="MySQL" /></a>
</p>

## Main Page

![full-webpage](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/1508884f-04b9-46d1-90cd-8730c8460c1a)

## Admin Dashboard for Users
### Main view
![localhost_8000_admin_users](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/6599638e-a026-43be-afe8-ccba5c6f466a)

### Create view
![localhost_8000_admin_users_create](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/1742f43d-fde6-4c7b-b689-61b2e5772e77)

### Single view
![localhost_8000_admin_users_1](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/ae98a396-5f9a-4dda-8804-adfbffc39a38)

### Edit view
![localhost_8000_admin_users_1_edit](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/42a898b8-2557-4ed2-bf37-84e9c6cff7ef)

## Admin Dashboard for Locations
### Main view
![localhost_8000_admin_locations](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/45bdf599-3f02-4e37-ab40-795ff9f67a6d)

### Create view
![localhost_8000_admin_locations_create](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/8dee8e54-0fa9-489e-8399-287c9c2c6bb7)

### Single view
![localhost_8000_admin_locations_1](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/ab042ad0-59a9-48e6-bd6e-e4d8e24e392a)

### Edit view
![localhost_8000_admin_locations_1_edit](https://github.com/CharbelElBateh/touristy-locations/assets/99130418/113128ff-e082-4016-b7e4-9a77f83c5342)

## Prerequisites

Before running the application, make sure you have the following installed:

- PHP (version 7.4 or later)
- Composer
- MySQL (or any other compatible database)
- Node.js (version 14 or later)

## Installation

1. Navigate to the project directory:

   ```bash
   cd touristy-locations
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

