FROM php:7.2-fpm
RUN apt-get update && apt-get install -y \
        nodejs npm \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/laravel-docker

ADD . /var/www/laravel-docker
RUN npm install npm@latest -g
RUN chown -R www-data:www-data /var/www/laravel-docker
RUN chmod 755 /var/www/laravel-docker
