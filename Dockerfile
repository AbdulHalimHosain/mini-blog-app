FROM php:8.2-fpm


RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql


WORKDIR /var/www


COPY . /var/www


COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer


CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
