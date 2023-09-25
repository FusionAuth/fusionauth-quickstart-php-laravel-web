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
public/changebank.css
public/money.jpg