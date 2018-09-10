How to use it

1. Download and install composer
2. Download and install postman
2. Create new database called "restful-laravel"
3. Import restful-laravel.sql to resful-laravel database
4. Copy .env.example to .env
5. Edit .env add mysql connection
6. Open you cmd and set destination to this project
7. Run "composer install"
8. Run "php artisan key:generate"
9. Enjoy

The Router

Get Router
localhost:8000/kontak --> Show all data
localhost:8000/kontak/id --> Show the data by ID

Post Router
localhost:8000/kontak/store --> Create new data
localhost:8000/kontak/update/id --> Update the data
localhost:8000/kontak/destroy/id --> Delete the data
