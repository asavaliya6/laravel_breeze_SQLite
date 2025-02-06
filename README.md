## Laravel breeze

- If created a new Laravel project without choosing a starter kit, install Laravel Breeze as any other package using Composer :
```
composer require laravel/breeze
```

- Generate a new seeder class :
```
php artisan make:seeder AdminSeeder
```

- Run the seeder manually :
```
php artisan db:seed
```

- CRUD with actions for the list, create, edit, and delete, use a Resource Controller :
```
php artisan make:controller CategoryController --resource --model=Category
```

## N+1 query problem

- How many queries are executed use a package :
```
composer require barryvdh/laravel-debugbar --dev
```

## Summary of this lesson:

- Understanding starter kits for authentication
- Installing and configuring Laravel Breeze
- Managing authentication routes
- Setting up user dashboard
- Understanding factories and seeders
- Creating admin user with migrations
- Using database seeders
- Managing user roles
- Implementing resource controllers
- Creating CRUD operations for categories
- Managing form submissions
- Handling route model binding
- Understanding middleware concept
- Creating custom admin middleware
- Implementing route groups
- Managing user authorization
- Implementing Eloquent relationships
- Understanding N+1 query problem
- Using Laravel Debugbar
- Managing eager loading
- Implementing form validation rules
- Using Form Request classes
- Displaying validation errors
- Handling form submissions
- Reviewing Laravel fundamentals
- Understanding learning roadmap
- Suggesting next steps
- Exploring additional resources
