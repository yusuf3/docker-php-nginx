FROM alpine:3.15

# Install packages and remove default server definition
RUN apk update && apk add --no-cache \
  curl \
  nginx \
  php7 \
  php7-ctype \
  php7-curl \
  php7-dom \
  php7-fpm \
  php7-gd \
  php7-intl \
  php7-json \
  php7-mbstring \
  php7-mysqli \
  php7-opcache \
  php7-openssl \
  php7-phar \
  php7-session \
  php7-xml \
  php7-xmlreader \
  php7-zlib \
  php7-memcached \
  php7-redis \
  php7-sqlite3 \
  php7-bz2 php7-mongodb php7-tidy php7-yaml \
  php7-pgsql \
  php7-common \
  php7-soap \
  php7-cli \
  php7-xsl \
  php7-imap \
  php7-ldap \
  php7-dev \
  php7-bcmath \
  php7-zip \
  supervisor
