FROM tehraven/dark-os:latest
MAINTAINER Alex Cameli "https://github.com/arcameli"
# BUILDS arcameli/coordinatesocial

COPY composer.json composer.lock ./
RUN composer install --prefer-source --no-interaction

ADD root /
COPY web /var/www

# Maybe?
# VOLUME ["/var/cache/nginx"]

EXPOSE 80