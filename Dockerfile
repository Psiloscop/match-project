FROM php:8.3-cli-alpine as symfony_app

RUN apk update
RUN apk add --no-cache bash

RUN docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /app
WORKDIR /app

EXPOSE 3310

CMD ["php", "-S", "0.0.0.0:3310", "-t", "public"]
