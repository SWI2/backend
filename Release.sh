#!/bin/bash

php artisan migrate:fresh --seed
php artisan passport:install
php artisan passport:keys