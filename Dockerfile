FROM tehraven/dark-os:latest
MAINTAINER Alex Cameli "https://github.com/arcameli"
# BUILDS arcameli/coordinatesocial

ADD root /
COPY web /var/www

ENTRYPOINT ["/usr/local/bin/composer/composer.phar"]

# Maybe?
# VOLUME ["/var/cache/nginx"]

EXPOSE 80