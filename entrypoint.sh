#!/bin/bash
set -e

chown -R www-data:www-data ./

php-fpm -D
nginx -g 'daemon off;'
