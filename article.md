Installing laravel and php with docker - https://hub.docker.com/r/bitnami/laravel
Using compose file from - https://raw.githubusercontent.com/bitnami/containers/main/bitnami/laravel/docker-compose.yml

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
```

