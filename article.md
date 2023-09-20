Installing laravel and php with docker - https://hub.docker.com/r/bitnami/laravel
Using compose file from - https://raw.githubusercontent.com/bitnami/containers/main/bitnami/laravel/docker-compose.yml

```bash
mkdir mysite
docker compose -f dockerComposeLaravel.yml up
```

`mysite` folder now matches the container
Can browse to site on http://localhost:3000/

Can now execute commands with
```bash
docker-compose exec myapp php artisan list
```

