FROM php:8.4-cli-alpine

RUN apk update && apk upgrade --no-cache

RUN apk add --no-cache bash

WORKDIR /app

ENTRYPOINT [ "/bin/bash" ]
