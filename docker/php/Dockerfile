FROM php:8.2-fpm
 
# Install extension yang umum dipakai
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libicu-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

# Copy composer binary dari image composer:latest ke dalam container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
 
# Set working directory di dalam container
WORKDIR /var/www/html