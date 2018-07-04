FROM php:7.2-fpm

MAINTAINER Tomasz Tarnawski <tarnawski27@gmail.com>

RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql