#!/bin/bash

# Install dependencies
composer install --optimize-autoloader --no-dev

# Build assets
npm install
npm run build

# Clear and cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Create the index.html file
php artisan view:cache
php -r "file_put_contents('public/index.html', view('home')->render());"

echo "Build completed successfully!" 