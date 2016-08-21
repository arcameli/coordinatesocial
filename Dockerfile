FROM tehraven/dark-os:latest
MAINTAINER Alex Cameli "https://github.com/arcameli"
# BUILDS arcameli/coordinatesocial

ADD root /
COPY web /var/www

# Maybe?
# VOLUME ["/var/cache/nginx"]

EXPOSE 80