FROM php:8.2-fpm

# Встановлення системних залежностей
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    unzip \
    git \
    curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Встановлення PHP розширень
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Встановлення Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Налаштування робочої директорії
WORKDIR /var/www/html

# Копіювання всіх файлів
COPY . /var/www/html

# Встановлення залежностей Composer
RUN composer install --no-dev --optimize-autoloader

# Встановлення прав доступу
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Відкриття порту
EXPOSE 9000

# Запуск PHP-FPM
CMD ["php-fpm"]

