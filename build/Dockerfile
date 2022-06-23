FROM php:8.1-fpm

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y \
    libzip-dev \
    zip \
  && docker-php-ext-install zip

COPY .. /app
WORKDIR /app

RUN tools/composer install