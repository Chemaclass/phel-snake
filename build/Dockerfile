FROM php:8.1-fpm

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN useradd -m dev
COPY . /app
WORKDIR /app
