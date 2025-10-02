FROM php:8.4-cli-alpine

WORKDIR /app

COPY fokvalto.php fokvalto.php
COPY fuggvenyek.php fuggvenyek.php

ENTRYPOINT [ "php", "fokvalto.php" ]