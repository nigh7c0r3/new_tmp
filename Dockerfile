FROM php:7.4-apache

MAINTAINER Nightcore

RUN apt-get update 
RUN docker-php-ext-install mysqli
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN a2enmod rewrite


RUN echo "KCSC{h3ll0_AT22_<3333}" > /flag.txt

WORKDIR /var/www/html
COPY ./src /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html
RUN mkdir -p /var/www/html/uploads
RUN chmod -R 777 /var/www/html/uploads
EXPOSE 80
