FROM php:7.3-apache

RUN apt-get update && \
    apt-get install -y --no-install-recommends libxml2-dev && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    rm -rf /var/lib/apt/lists/*

ADD php.ini /usr/local/etc/php
