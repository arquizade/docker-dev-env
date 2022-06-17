# :zap: laraveldocker
Use docker to setup my development environment.
[Inspired by: Andrew Schmelyun](https://github.com/aschmelyun)

### :pushpin: Let's start
Inside the project folder open terminal and execute this command:
```docker-compose
docker-compose build

.....

docker-compose up

```

#### :notebook: How to Do a Clean Restart of a Docker Instance
Stop the container(s) using the following command:
```docker-compose
docker-compose down
```
Delete all containers using the following command:
```docker-compose
docker rm -f $(docker ps -a -q)
```
Delete all volumes using the following command:
```docker-compose
docker volume rm $(docker volume ls -q)
```
Restart the containers using the following command:
```docker-compose
docker-compose up -d
```
#### :dart: Handle Composer, NPM, and Artisan commands

```docker-compose
docker-compose run --rm composer update
docker-compose run --rm npm run dev
docker-compose run --rm artisan migrate
```
