FROM tehraven/dark-os:latest
MAINTAINER Alex Cameli "https://github.com/arcameli"
# BUILDS arcameli/coordinatesocial

ADD root /
COPY web /var/www

RUN composer.phar /usr/local/bin/composer

# Maybe?
# VOLUME ["/var/cache/nginx"]

EXPOSE 80