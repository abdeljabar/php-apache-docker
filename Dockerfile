# Use the official PHP 5.3 image
FROM php:5.3.29-apache

# Enable Apache modules
RUN a2enmod rewrite

RUN a2dissite 000-default.conf

# Copy your PHP application files into the container
COPY app /var/www/html/

# Expose port 80
EXPOSE 8080

WORKDIR /var/www/html
