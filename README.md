## Laravel 8 Starter Application

Simple Laravel 8 Starter, features:

- UI using CoreUI
- Auth using Laravel Breeze
- CRUD Users with Pagination
- Upload/Change Profile Picture/Avatar

### To do:

- Role Management

## How to use:

- Clone this repository
- run composer install
- copy .env.example to .envAdjust DB connection according to your database server
- php artisan key:generate
- php artisan migrate
- php artisan db:seed (optional, you can register your own user)
- php artisan storage:link   
- php artisan serve

## Tips:

Add new menu in file: 

`resources/views/layouts/includes/sidebar.blade.php`


Create Controller & Model using command

`php artisan make:controller SupplierController --resource --model=Supplier`

https://laravel.com/docs/8.x/controllers

Create Migration

`php artisan make:migration create_supplier_table`

- https://laravel.com/docs/8.x/migrations#generating-migrations
- https://laravel.com/docs/8.x/migrations#available-column-types


Screenshots

![Laravel CRUD User](https://fahmialazhar.com/wp-content/uploads/2021/08/laravel-8-crud-users.png)



![Laravel Upload Profile Picture](https://fahmialazhar.com/wp-content/uploads/2021/08/laravel-8-upload-file.png)


Happy coding

Made with Love ❤️
[fahmialazhar.com](https://fahmialazhar.com)