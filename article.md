todo - put vendor files in source control for complete-application.
todo - alter .gitignore for mysite

Installing laravel and php with docker - https://hub.docker.com/r/bitnami/laravel
Using compose file from - https://raw.githubusercontent.com/bitnami/containers/main/bitnami/laravel/docker-compose.yml

```bash
#to run
cd ~/code/fusionauth-quickstart-php-laravel-web;
docker stop $(docker ps -a -q);
docker compose -f dockerComposeLaravel.yml up;
docker compose -f dockerComposeFusionAuth.yml up;
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
docker compose -f dockerComposeLaravel.yml exec app      echo hi
docker compose -f dockerComposeLaravel.yml exec app      php --version
docker compose -f dockerComposeLaravel.yml exec app      php artisan --version
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