FROM php:8.2-fpm-alpine

RUN apk add --no-cache mariadb-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
