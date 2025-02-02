#!/bin/sh
composer dump-autoload
cd public && php -S localhost:1932

