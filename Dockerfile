FROM php:7.4-apache

# Установка необходимых расширений PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Копирование исходного кода вашего приложения в контейнер
COPY . /var/www/html/
