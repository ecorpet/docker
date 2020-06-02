# image à utiliser
FROM php:7.3-apache

# Quelques library necessaires
RUN apt-get update \
    && apt-get install -y --no-install-recommends locales apt-utils git;

RUN docker-php-ext-install \
            pdo_mysql
# les locales, toujours utiles
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

# On copie le php.ini du repertoire actuel dans le contenaire
COPY php.ini /usr/local/etc/php/php.ini

# on télécharge et deplace le composer
RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

# On créé un utilisateur avec le même gid/uid que votre local
# cela va permettre que les fichiers qui sont créés dans le contenaire auront vos droits
RUN addgroup --system mzrn --gid 1000 && adduser --system mzrn --uid 1000 --ingroup mzrn

# le repertoire qui contient vos sources (attention : dans le contenaire, donc le repertoire à droite du mapping du docker-compose)
WORKDIR /var/www/