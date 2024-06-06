# Utiliser l'image officielle de PHP comme base
FROM php:8.1-apache

# Installer les dépendances requises
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libpq-dev \
    libxml2-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libicu-dev \
    g++ \
    libldap2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd intl pdo_pgsql pdo_mysql soap bcmath

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer Node.js et npm
RUN apt-get install -y nodejs npm

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier le code source de l'application
COPY . .

# Installer les dépendances du projet
RUN composer install --no-dev --optimize-autoloader

# Générer la clé de l'application
RUN php artisan key:generate

# Construire les assets front-end
RUN npm install && npm run build

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80

# Démarrer Apache
CMD ["apache2-foreground"]