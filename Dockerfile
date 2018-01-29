FROM php:5.4-apache

RUN a2enmod rewrite

COPY . /var/www/hackazon

WORKDIR /var/www/hackazon

RUN apt-get update ; php composer.phar install -o --prefer-dist ; php composer.phar self-update ; chown -R www-data:www-data /var/www/hackazon

COPY assets/config/db.sample.php assets/config/db.php

COPY 001-hackazon.conf /etc/apache2/sites-available/001-hackazon.conf

RUN ln -s /etc/apache2/sites-available/001-hackazon.conf /etc/apache2/sites-enabled/001-hackazon.conf




