FROM php:8.1.0-fpm
 
# RUN docker-php-ext-install mysqli
# RUN docker-php-ext-install pdo_mysql

# Install composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# INSTALL ZIP TO USE COMPOSER
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql


# INSTALL AND UPDATE COMPOSER
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer self-update
WORKDIR /srv/www/api
COPY . /srv/www/api
