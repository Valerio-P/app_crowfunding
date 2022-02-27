FROM php:8.1-fpm-alpine

RUN apk add --no-cache nginx wget

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN docker-php-ext-install exif bcmath mysqli pdo pdo_mysql

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && \
    /usr/local/bin/composer install && cp .env.example .env && php artisan key:generate

RUN chown -R www-data: /app

CMD sh /app/docker/startup.sh
