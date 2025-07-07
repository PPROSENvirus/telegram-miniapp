FROM php:8.2-apache

# Enable Apache Rewrite module
RUN a2enmod rewrite

# Copy all project files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/
