How to use it

1. Download and install composer
2. Download and install postman
2. Create new database called "restful-laravel"
3. Import restful-laravel.sql to resful-laravel database
4. Copy .env.example to .env
5. Edit .env add mysql connection
6. Open your cmd and set destination to this project
7. Run "composer install"
8. Run "php artisan key:generate"
9. Open you postman and
10. Enjoy

The Router

Get Router
1. localhost:8000/kontak --> Show all data
2. localhost:8000/kontak/id --> Show the data by ID

Post Router
1. localhost:8000/kontak/store --> Create new data
2. localhost:8000/kontak/update/id --> Update the data
3. localhost:8000/kontak/destroy/id --> Delete the data
