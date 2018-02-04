#!/bin/sh

env = $1

if [ $env -eq 'github' ]
then
    # activate maintenance mode
    php artisan down

    # update source code
    git pull

    # update PHP dependencies
    export COMPOSER_HOME='/tmp/composer'
    composer install --no-interaction --no-dev --prefer-dist
        # --no-interaction	Do not ask any interactive question
        # --no-dev		Disables installation of require-dev packages.
        # --prefer-dist		Forces installation from package dist even for dev versions.

else
    # Install frontend assets
    yarn

    yarn run production
fi

# update database
php artisan migrate --force

# stop maintenance mode
php artisan up
