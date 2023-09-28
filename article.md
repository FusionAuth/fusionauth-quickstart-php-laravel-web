todo - put vendor files in source control for complete-application.
todo - alter .gitignore for mysite

Installing laravel and php with docker - https://hub.docker.com/r/bitnami/laravel
Using compose file from - https://raw.githubusercontent.com/bitnami/containers/main/bitnami/laravel/docker-compose.yml

```bash
#to run
cd ~/code/fusionauth-quickstart-php-laravel-web;
docker stop $(docker ps -a -q);
docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q);

docker compose up;

docker compose -f dockerComposeFusionAuth.yml up;
docker compose -f dockerComposeLaravel.yml up;

docker exec -it lara_app bash;
```

```bash
mkdir mysite
docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)  # ensure no previous containers with this name exist
docker compose -f dockerComposeLaravel.yml up
docker compose -f dockerComposeFusionAuth.yml up;
```

`mysite` folder now matches the container
Can browse to site on http://localhost:3000/

Can now execute commands with
```bash
docker compose -f dockerComposeLaravel.yml exec lara_app      echo hi
docker compose -f dockerComposeLaravel.yml exec lara_app      php --version
docker compose -f dockerComposeLaravel.yml exec lara_app      php artisan --version

docker compose -f dockerComposeLaravel.yml exec lara_app        php artisan make:migration add_fusionauth_fields_user_table
```

Laravel docs explain many ways to create new application - https://laravel.com/docs/10.x

https://laravel.com/docs/10.x/socialite

make
resources/views/index.blade.php
and account and change
public/changebank.css
public/money.jpg

include @csrf in account form to avoid 419 page expired error

```docker-compose
    extra_hosts:
      - "host.docker.internal:host-gateway"
```
and http://host.docker.internal

https://github.com/SocialiteProviders/FusionAuth
```bash
docker compose -f dockerComposeLaravel.yml exec app      composer require socialiteproviders/fusionauth
```

alter EventServiceProvider.php. $listen function.
config/services.php

app/Models/User.php

don't do below
```bash
docker compose exec lara_app        php artisan make:migration add_fusionauth_fields_user_table
```
rather create database/migrations/2023_09_27_142009_add_fusionauth_fields_user_table.php

change .env file inside laravel
`DB_HOST=lara_db`
```bash
docker compose exec lara_app         composer install;
docker compose exec lara_app         php artisan config:clear;
docker compose exec lara_app         php artisan migrate;
```

services.php


http://fusionauth:9011/oauth2/authorize?client_id=E9FDB985-9173-4E01-9D73-AC2D60D1DC8E&redirect_uri=http%3A%2F%2Flocalhost%3A3000%2Fauth%2Fcallback&scope=email+openid+profile&response_type=code

http://localhost:9011/oauth2/authorize?client_id=E9FDB985-9173-4E01-9D73-AC2D60D1DC8E&redirect_uri=http%3A%2F%2Flocalhost%3A3000%2Fauth%2Fcallback&scope=email+openid+profile&response_type=code

