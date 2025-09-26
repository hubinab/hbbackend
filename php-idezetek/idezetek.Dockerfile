FROM php:8.4-cli-alpine

RUN apk update && apk upgrade --no-cache

RUN adduser -u 1000 -s /bin/bash -D phpdocker

WORKDIR /app

COPY --from=composer:2.8.9 /usr/bin/composer /usr/bin/composer

RUN apk add --no-cache bash

COPY src/ ./src/
COPY composer.json .
RUN composer install
COPY idezetek.php .

USER phpdocker

ENTRYPOINT [ "php", "idezetek.php" ]
