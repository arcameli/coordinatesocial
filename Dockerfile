FROM tehraven/dark-os:latest
MAINTAINER Alex Cameli "https://github.com/arcameli"
# BUILDS arcameli/coordinatesocial

RUN composer install --prefer-source --no-interaction

ADD root /
COPY web /var/www

# Maybe?
# VOLUME ["/var/cache/nginx"]

EXPOSE 80