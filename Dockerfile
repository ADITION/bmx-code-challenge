FROM php:7.4-apache

ENV TZ=Europe/Berlin
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y libicu-dev git libzip-dev zip
RUN sed -ri 's#(DocumentRoot) .+$#\1 /var/www/html/web#' /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install zip
## Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY composer.json .
COPY composer.lock .
COPY phpunit.xml .
