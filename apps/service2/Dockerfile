FROM php:8.0-apache

RUN apt-get update && apt-get install -y \
        libzip-dev \
    && docker-php-ext-install zip

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY apps/service2/composer.json composer.json
COPY packages /packages

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist



COPY apps/service2/src/ /var/www/html