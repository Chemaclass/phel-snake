FROM composer as builder
WORKDIR /app/
COPY composer.* ./
RUN composer install

FROM php:8.1-fpm
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

COPY --from=builder /app/vendor /app/phel-snake/vendor

RUN useradd -m dev
WORKDIR /app/phel-snake
