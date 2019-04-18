System Requirement (Laravel 5.6)
1. PHP >= 7.1.3

How to use this

1. Download and install composer
2. Download and install postmant
4. Copy .env.example to .env
5. Edit .env add mysql connection
6. Open your cmd and set destination to this project
7. Run "composer install"
8. Run "php artisan key:generate"
9. Run "php artisan migrate"
10. Run "php artisan db:seed"
11. Run "php artisan serve"
12. Open you postman and
13. Enjoy

Route

1. #GET localhost:8000/api/users --> Show all user
2. #GET localhost:8000/api/user/{id} --> Show user by ID
3. #POST localhost:8000/api/user --> Create new user
4. #PUT localhost:8000/api/user/{id} --> Update data by ID
5. #DELETE localhost:8000/api/user/[id} --> Delete data by ID
