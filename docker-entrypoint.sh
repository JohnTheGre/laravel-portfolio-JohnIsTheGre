#!/bin/bash
set -e

# Run Laravel migrations and seeders
php artisan migrate --force
php artisan db:seed --force

# Start Apache
exec "$@"
