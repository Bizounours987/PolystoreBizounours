FROM docker.io/library/php:8.2-apache

RUN apt-get update \
    && apt install -y libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip && docker-php-ext-enable pdo_mysql \
    && apt install -y libyaml-dev && printf "\n" | curl 'https://pecl.php.net/get/yaml-2.2.3.tgz' -o yaml-2.2.3.tgz && pecl install yaml-2.2.3.tgz && docker-php-ext-enable yaml \
    && a2enmod rewrite

