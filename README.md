## Laravel breeze

- If created a new Laravel project without choosing a starter kit, install Laravel Breeze as any other package using Composer :
```composer require laravel/breeze```

- Generate a new seeder class :
```php artisan make:seeder AdminSeeder```

- Run the seeder manually :
```php artisan db:seed```

- CRUD with actions for the list, create, edit, and delete, use a Resource Controller :
```php artisan make:controller CategoryController --resource --model=Category```

## N+1 query problem

- How many queries are executed use a package :
```composer require barryvdh/laravel-debugbar --dev```