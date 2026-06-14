FROM richarvey/nginx-php-fpm:latest

# Copy application files
COPY . .

# Configuration environment variables
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV COMPOSER_ALLOW_SUPERUSER 1

# Expose port
EXPOSE 80

# Copy startup scripts
COPY .docker/run.sh /var/www/html/scripts/run.sh
RUN chmod +x /var/www/html/scripts/run.sh
