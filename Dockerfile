FROM php:7.4-apache

RUN apt-get update 
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN a2enmod rewrite

WORKDIR /var/www/html
COPY ./src /var/www/html/

EXPOSE 80