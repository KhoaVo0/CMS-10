FROM php:8.1-rc-apache-bullseye
RUN apt-get update && apt-get install -y iputils-ping && apt-get install -y nano
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get install -y libzip-dev zip && docker-php-ext-install zip
RUN apt-get install -y libpng-dev && docker-php-ext-install gd