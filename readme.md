# Demo laravel application

[![Docker Pulls](https://img.shields.io/docker/pulls/greut/laravel.svg?maxAge=2592000?style=flat-square)](https://hub.docker.com/r/greut/laravel)
[![Image layers](https://images.microbadger.com/badges/image/greut/laravel.svg)](https://microbadger.com/images/greut/laravel "Get your own image badge on microbadger.com")
[![Image version](https://images.microbadger.com/badges/version/greut/laravel.svg)](https://microbadger.com/images/greut/laravel "Get your own version badge on microbadger.com")

Une application d'exemple avec le framework Laravel. Qui a pour but de donner
un exemple, pas forcément idéal ni universel, de ce qu'on peut faire.

Le meilleur moyen de s'en servir et de refaire ce qui a été fait ici et
essayant de le modifier selon vos envies.

## Téléversement

```shell
$ git clone
$ cd demo-laravel-application
```

## Installation

```shell
$ composer install
$ # adapt the .env.example if necessary
$ npm install
$ npm run prod
$ php artisan migrate --seed
```

## Docker setup


```shell
$ docker-compose build
$ docker-compose up -d
$ docker-compose exec php /bin/sh
# su laravel
$ . /etc/profile
$ cd ~/html
$ # then follow the normal installation.
```
