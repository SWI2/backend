# Backend

## API documentation

[Apiari](https://sw2backend.docs.apiary.io/#)

## Run project

- install PHP (7 and above)
    -  Mac [homebrew](https://formulae.brew.sh/formula/php)
    - Windows `TODO`
- install Composer
    - Mac (maybe also works on Windows)
        - download [Composer](https://getcomposer.org/composer.phar)
        - `cp ~/Downloads/composer.phar /usr/local/bin/composer`
        - `sudo chmod +x /usr/local/bin/composer`
        - `composer --version` to check if composer is installed (if not, [add path to .bash_profile](https://stackoverflow.com/questions/25373188/laravel-installation-how-to-place-the-composer-vendor-bin-directory-in-your))
    - Windows
        - `TODO`
- install Postgresql
    - Mac
        - `brew install postgres`
        - to start postgres use `brew services start postgresql`
        - open postgres cli with `psql postgres`
        - create role root without password `CREATE ROLE root superuser;`
        - create database `CREATE DATABASE backend OWNER root;`
        - quit cli with `\q`
        - run `php artisan migrate` to create tables
        - run `hp artisan passport:install` to create oauth keys
- clone project
- run project
    - Mac
        - install [valet](https://laravel.com/docs/6.x/valet)
        - run `valet link` (when you want to end, run valet unlink)
    - Windows
        - `TODO`

## Knowledge base

- [How to make REST api with laravel (CRUD + Versioning)](https://www.youtube.com/playlist?list=PL41lfR-6DnOppiHXkPKZ2tT1WBIjIufVs)
- [How to write unit tests in laravel](https://www.youtube.com/watch?v=RJ_iXzdSpT0&t=1269s)
- [Policies](https://www.youtube.com/watch?v=NrlY-xeqHBg)
- [Relationships](https://medium.com/swlh/a-guide-on-laravel-relationships-1febfac430f6)

## Third party libraries

- [Laravel enum for easier enum usage](https://github.com/BenSampo/laravel-enum#installation)