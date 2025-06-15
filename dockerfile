FROM php:8.2-apache

# Copy source code
COPY . /var/www/html/

# Enable mod_rewrite if needed
RUN a2enmod rewrite
