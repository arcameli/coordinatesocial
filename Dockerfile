FROM tehraven/dark-os:latest
MAINTAINER Alex Cameli "https://github.com/arcameli"
# BUILDS arcameli/coordinatesocial

ADD root /
COPY web /var/www

WORKDIR /usr/local/bin/composer
RUN composer install

# Maybe?
# VOLUME ["/var/cache/nginx"]

EXPOSE 80