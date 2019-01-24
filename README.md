System Requirement (Laravel 5.6)
1. PHP >= 7.1.3

How to use this

1. Download and install composer
2. Download and install postmant
3. Import laravel-restful-api.sql in phpmyadmin
4. Copy .env.example to .env
5. Edit .env add mysql connection
6. Open you cmd and set destination to this project
7. Run "composer install"
8. Run "php artisan key:generate"
9. Run "php artisan serve"
10. Enjoy

The Router

Post Router
1. localhost:8000/kontak --> Show all data
2. localhost:8000/kontak/id --> Show the data by ID
3. localhost:8000/kontak/store --> Create new data
4. localhost:8000/kontak/update/id --> Update the data
5. localhost:8000/kontak/destroy/id --> Delete the data
