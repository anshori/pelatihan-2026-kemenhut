# Install & Run

1. Clone this repository
2. Copy `.env.example` to `.env`
3. Edit `.env` file to set your database connection and other settings
4. Run `composer install` to install dependencies
5. Run `npm install` to install frontend dependencies
6. Run `php artisan key:generate` to generate application key
7. Run `php artisan migrate --seed` to create database tables and seed initial data
8. Run `composer run dev` to start the development server
9. Open your POSTMAN and go to `http://localhost:8000/login` to login
10. Open your POSTMAN and go to `http://localhost:8000/register` to register new user
11. Open your POSTMAN and go to `http://localhost:8000/kotayogyakarta` to get GeoJSON data of Kota Yogyakarta (you need to login first to get the token)
12. Open your POSTMAN and go to `http://localhost:8000/logout` to logout (you need to login first to get the token)

# Requirements
1. PHP >= 8.3
2. Composer
3. Node.js >= 22 LTS
4. PostgreSQL >= 18
5. PostGIS >= 3.4