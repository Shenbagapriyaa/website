# ==============================================================================
# Dockerfile for Laravel 12 on Render (PHP 8.2 + Apache)
# ==============================================================================
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Set Environment Variables
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
ENV PORT=80

# Install system dependencies and build libraries
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libsqlite3-dev \
    libzip-dev \
    sqlite3 \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions required by Laravel 12
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    pdo_sqlite \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    opcache

# Get latest Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configure Apache DocumentRoot and Directory Settings for Laravel
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && sed -i '/<Directory \/var\/www\/html\/public>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf \
    || echo "<Directory /var/www/html/public>\n    AllowOverride All\n    Require all granted\n</Directory>" >> /etc/apache2/apache2.conf

# Enable Apache mod_rewrite, headers, and remoteip for reverse proxies (Render SSL termination)
RUN a2enmod rewrite headers remoteip

# Copy project files into container
COPY . /var/www/html

# Install Composer dependencies (production optimized)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Create SQLite database file if it doesn't exist and set permissions
RUN touch /var/www/html/database/database.sqlite \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/public \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/public

# Expose Render Default Port
EXPOSE 80

# Dynamic port binding for Render + cache setup + Apache launch
CMD sh -c "sed -i \"s/Listen 80/Listen \${PORT:-80}/g\" /etc/apache2/ports.conf && \
           sed -i \"s/:80/:\"\${PORT:-80}\"/g\" /etc/apache2/sites-available/000-default.conf && \
           php artisan migrate --force || true && \
           php artisan config:cache || true && \
           php artisan route:cache || true && \
           php artisan view:cache || true && \
           apache2-foreground"
