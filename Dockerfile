FROM php:8.2-cli

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    sqlite3 \
    && docker-php-ext-install pdo pdo_sqlite zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier les fichiers du projet
WORKDIR /app
COPY . .

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Compiler les assets JS/Vue si nécessaires
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install && npm run build

# Cache Laravel
RUN php artisan config:cache

# Port d'écoute
EXPOSE 8080

# Commande de démarrage
CMD php artisan serve --host=0.0.0.0 --port=8080
