# Install Laravel
- Open CMD and type
```bash
composer global require laravel/installer
```

# Create a new Laravel app
- Open CMD in the target folder and type
```bash
composer laravel new
```

# Run Laravel App
- Open terminal and type
```bash
php artisan ser
```

# Start downloaded project
- Open terminal and type
```bash
# Insall all packages
composer i

# create database if not exists
php artisan migrate

# OR, replace current database if exists
php artisan migrate:fresh

# Start the server
php artisan ser
```

# List all routes
```bash
php artisan r:l
// OR 
php artisan route:list
```

# Create a new Controller in the command line
```bash
php artisan make:controller PostController
```

# Create a new Controller with 7 resource methods in the command line
```bash
php artisan make:controller PostController -r
# OR
php artisan make:controller PostController --resource
```