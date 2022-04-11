#!/bin/bash

echo "start cron"
cron
echo "cron started"
echo "start php-fpm"
php-fpm
echo "php-fpm started"