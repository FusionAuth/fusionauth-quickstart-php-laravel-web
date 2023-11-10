# FusionAuth Laravel Quickstart

## Documentation

This repository is documented at https://fusionauth.io/docs/quickstarts/quickstart-php-laravel-web.

Further reading:
- [Laravel Socialite concepts](https://laravel.com/docs/10.x/socialite)
- [FusionAuth OAuth Docs](https://fusionauth.io/docs/v1/tech/oauth/endpoints)

## Prerequisites

* [PHP](https://www.php.net/manual/en/install.php) 8.1
* [Composer](https://getcomposer.org/)
* [Nodejs](https://nodejs.org/)
* [Docker](https://www.docker.com) version 20 or later.

## How To Run

In a terminal run the following to start FusionAuth and Laravel.

```shell
git clone https://github.com/FusionAuth/fusionauth-quickstart-php-laravel-web.git
cd fusionauth-quickstart-php-laravel-web
docker compose up -d
cd complete-application
composer install
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Browse to the app at http://localhost:8000.