FROM tehraven/dark-os:latest
MAINTAINER Anthony Powers "https://github.com/tehraven"
# BUILDS tehraven/dark

ADD root /
COPY web /var/www

# Maybe?
# VOLUME ["/var/cache/nginx"]

EXPOSE 80