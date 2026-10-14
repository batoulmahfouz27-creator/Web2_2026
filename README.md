# CINÉRA - Movie Discovery & Social Platform

CINÉRA is a web application developed using Laravel and MySQL for our Web2 university project.

The platform will allow users to discover movies, manage watchlists, write reviews, receive recommendations and interact with other users.

## Requirements

- PHP 8.2 or higher
- Composer
- MySQL
- XAMPP
- Node.js and npm
- Git

## Installation

1. Clone the repository:

   `git clone https://github.com/batoulmahfouz27-creator/Web2_2026.git`

2. Navigate to the project folder:

   `cd Web2_2026`

3. Install PHP dependencies:

   `composer install`

4. Create the environment file:

   `cp .env.example .env`

5. Generate the application key:

   `php artisan key:generate`

6. Create a MySQL database named `cinera`.

7. Configure the database connection in `.env`:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=cinera
   DB_USERNAME=root
   DB_PASSWORD=
   ```

   Adjust the port, username and password according to your local MySQL configuration.

8. Run database migrations:

   `php artisan migrate`

9. Install frontend dependencies:

   `npm install`

10. Start the Laravel application:

    `php artisan serve`

11. Open `http://127.0.0.1:8000` in your browser.

For frontend development, run `npm run dev` in a separate terminal.

## Project Structure

- `app/Models` - Eloquent models
- `app/Http/Controllers` - Controllers
- `database/migrations` - Database migrations
- `routes` - Application routes
- `resources/views` - Blade views
- `tests` - Application tests

## Team Collaboration

Development follows a Git branching workflow.

Each developer works on a separate feature branch. Completed features are reviewed and merged into the shared `develop` branch according to the team's workflow.

## Security

The `.env` file contains local configuration and must not be committed to GitHub. Use `.env.example` as a template without real passwords, application keys or API secrets.