# Use the official PHP 5.3 image
FROM php:5.3.29-apache

# Install mysqli and pdo_mysql extensions
RUN apt-get update && apt-get install -y \
    libmysqlclient-dev \
    && docker-php-ext-install mysqli pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite

# Copy your PHP application files into the container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]
