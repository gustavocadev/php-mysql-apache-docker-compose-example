FROM php:8.2-apache

# Install php extensions
RUN docker-php-ext-install pdo pdo_mysql
