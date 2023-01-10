FROM php:8.1.4-fpm

RUN apt-get update && apt-get install -y \
        zip \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libicu-dev \
        libpq-dev \
        libxpm-dev \
        libvpx-dev \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql intl bcmath\
    && docker-php-ext-configure gd \
            --with-freetype=/usr/include/ \
            --with-jpeg=/usr/include/ \
            --with-xpm=/usr/lib/x86_64-linux-gnu/

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --version=2.1.14 && mv composer.phar /usr/local/bin/composer
