#!/bin/bash
set -e

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Run Laravel migrations and seeders
php artisan migrate --force
php artisan db:seed --force

# Start Apache
exec "$@"
