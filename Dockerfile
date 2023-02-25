FROM php:7.2-apache
WORKDIR /var/www/html/
COPY /webapp/ .
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt update -y && apt upgrade -y
