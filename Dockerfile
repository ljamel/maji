FROM php:8.0-apache
COPY . /var/www/html

# actived mode rewrite
RUN a2enmod rewrite
