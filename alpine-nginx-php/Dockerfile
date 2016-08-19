FROM ej52/alpine-base:latest
MAINTAINER Anthony Powers "https://github.com/tehraven"
# Special Thanks to ej52
# BUILDS tehraven/dark-os

ENV NGINX_VERSION=1.9.9
ENV PHP_VERSION=7.0.2

# Install NGINX
RUN \
  build_pkgs="build-base linux-headers openssl-dev pcre-dev wget zlib-dev" \ 
  && runtime_pkgs="ca-certificates openssl pcre zlib" \
  && apk --no-cache add ${build_pkgs} ${runtime_pkgs} \
  && mkdir /tmp/nginx && cd /tmp/nginx \
  && wget http://nginx.org/download/nginx-${NGINX_VERSION}.tar.gz \
  && tar xzf nginx-${NGINX_VERSION}.tar.gz \
  && cd nginx-${NGINX_VERSION} \
  && ./configure \
    --prefix=/usr/share/nginx \
    --sbin-path=/usr/sbin/nginx \
    --conf-path=/etc/nginx/nginx.conf \
    --error-log-path=/var/log/nginx/error.log \
    --http-log-path=/var/log/nginx/access.log \
    --pid-path=/var/run/nginx.pid \
    --lock-path=/var/run/nginx.lock \
    --http-client-body-temp-path=/var/cache/nginx/client_temp \
    --http-proxy-temp-path=/var/cache/nginx/proxy_temp \
    --http-fastcgi-temp-path=/var/cache/nginx/fastcgi_temp \
    --http-uwsgi-temp-path=/var/cache/nginx/uwsgi_temp \
    --http-scgi-temp-path=/var/cache/nginx/scgi_temp \
    --user=www-data \
    --group=www-data \
    --with-http_ssl_module \
    --with-http_realip_module \
    --with-http_addition_module \
    --with-http_sub_module \
    --with-http_dav_module \
    --with-http_flv_module \
    --with-http_mp4_module \
    --with-http_gunzip_module \
    --with-http_gzip_static_module \
    --with-http_random_index_module \
    --with-http_secure_link_module \
    --with-http_stub_status_module \
    --with-http_auth_request_module \
    --with-mail \
    --with-mail_ssl_module \
    --with-file-aio \
    --with-ipv6 \
    --with-threads \
    --with-stream \
    --with-stream_ssl_module \
    --with-http_v2_module \
  && make \
  && make install \
  && make clean \
  && strip -s /usr/sbin/nginx \
  && adduser -D www-data \
  && mkdir /var/cache/nginx \
  && apk del ${build_pkgs} \
  && cd / \
  && rm /etc/nginx/*.default \
  && rm -rf /var/cache/apk/* \
  && rm -rf /tmp/* \
  && rm -rf /var/www/*
  
# Install PHP
RUN \
  build_pkgs="build-base re2c file readline-dev autoconf binutils bison \
  libxml2-dev curl-dev freetype-dev openssl-dev libjpeg-turbo-dev libpng-dev \
  libwebp-dev libmcrypt-dev gmp-dev icu-dev libmemcached-dev wget git" \
  && runtime_pkgs="curl zlib tar make libxml2 readline freetype openssl \
  libjpeg-turbo libpng libmcrypt libwebp icu" \
  && apk --no-cache add ${build_pkgs} ${runtime_pkgs} \
  && mkdir /tmp/php && cd /tmp/php \
  && wget https://github.com/php/php-src/archive/php-${PHP_VERSION}.tar.gz \
  && tar xzf php-${PHP_VERSION}.tar.gz \
  && cd php-src-php-${PHP_VERSION} \
  && ./buildconf --force \
  && ./configure \
      --prefix=/usr \
      --sysconfdir=/etc/php \
      --with-config-file-path=/etc/php \
      --with-config-file-scan-dir=/etc/php/conf.d \
      --enable-fpm --with-fpm-user=www-data --with-fpm-group=www-data \
      --enable-cli \
      --enable-mbstring \
      --enable-zip \
      --enable-ftp \
      --enable-bcmath \
      --enable-opcache \
      --enable-pcntl \
      --enable-mysqlnd \
      --enable-gd-native-ttf \
      --enable-sockets \
      --enable-exif \
      --enable-soap \
      --enable-calendar \
      --enable-intl \
      --enable-json \
      --enable-dom \
      --enable-libxml --with-libxml-dir=/usr \
      --enable-xml \
      --enable-xmlreader \
      --enable-phar \
      --enable-session \
      --enable-sysvmsg \
      --enable-sysvsem \
      --enable-sysvshm \
      --disable-cgi \
      --disable-debug \
      --disable-rpath \
      --disable-static \
      --disable-phpdbg \
      --with-libdir=/lib/x86_64-linux-gnu \
      --with-curl \
      --with-mcrypt \
      --with-iconv \
      --with-gd --with-jpeg-dir=/usr --with-webp-dir=/usr --with-png-dir=/usr \
      --with-freetype-dir=/usr \
      --with-zlib --with-zlib-dir=/usr \
      --with-openssl \
      --with-mhash \
      --with-pcre-regex \
      --with-pdo-mysql \
      --with-mysqli \
      --with-readline \
      --with-xmlrpc \
      --with-pear \
  && make \
  && make install \
  && make clean \
  && strip -s /usr/bin/php \
  && apk del ${build_pkgs} \
  && curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && mkdir -p /var/lib/php7/sessions \
  && chown -R www-data:www-data /var/lib/php7/sessions \
  && cd / \
  && rm -rf /var/cache/apk/* \
  && rm -rf /tmp/* \
  && rm -rf /var/www/*