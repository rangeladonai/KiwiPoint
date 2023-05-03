FROM php:8.1-apache

RUN docker-php-ext-install pdo_mysql

RUN sed -i 's/index.html/index.php/g' /etc/apache2/mods-enabled/dir.conf

COPY . /var/www/html/
