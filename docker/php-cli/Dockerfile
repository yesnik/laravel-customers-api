FROM composer:latest AS composer

FROM php:8.2-cli-alpine

RUN apk add --no-cache mariadb-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY --from=composer /usr/bin/composer /usr/bin/composer
