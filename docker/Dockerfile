FROM tugboatqa/php:7.4.2-apache AS  custom_php
# change list
#RUN apt-get update && apt-get install iputils-ping -y && docker-php-ext-install  pdo_pgsql

RUN set -ex; \
    \
    apt-get update; \
    apt-get install -y \
        iputils-ping \
         libpq-dev \
      ;\
    docker-php-ext-install pdo pdo_mysql