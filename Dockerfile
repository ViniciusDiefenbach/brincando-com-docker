FROM php:8.1-apache

RUN docker-php-ext-install mysqli pdo_mysql

COPY src/ /var/www/html/
