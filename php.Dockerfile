FROM php:5.5-apache

COPY conf/php.ini /usr/local/etc/php/php.ini

COPY conf/docker-php-pecl-install /usr/local/bin/

RUN docker-php-ext-install mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
