#!/bin/sh

# Install composer dependencies at startup (prevents missing vendor errors)
echo "Installing composer dependencies..."
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Run database migrations
echo "Running database migrations..."
php /var/www/html/artisan migrate --force

# Run database seeders (using firstOrCreate to prevent overwriting existing data)
echo "Running database seeder..."
php /var/www/html/artisan db:seed --force

# Generate symlink for storage
echo "Generating storage symlink..."
php /var/www/html/artisan storage:link
