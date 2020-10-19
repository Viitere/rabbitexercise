FROM php:7.4-apache
COPY . /usr/src/app
WORKDIR /usr/src/app
# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
