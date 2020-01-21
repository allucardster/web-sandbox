Web Sandbox
===========
* Small PHP/MYSQL/POSTGRES/NGNIX to work in some stuff

Requirements
============

- Docker `>= 18.x`
- Docker Compose `>= 1.24.x`

Stack
=====

- PHP 7.4
- Composer
- Git
- SQLite
- MySQL 8.0.19
- Postgres 12.1
- Symfony 4.4.99 LTS

Setup
=====
- Build the containers with:

```sh
$ docker-compose up -d
```

- Install PHP depencencies for the default api with:

```sh
$ docker-compose exec -w /usr/src/public/api php composer install
```

How to run it?
==============
- Open http://localhost:8080 url at some browser (Chrome, Firefox, etc). For the api symfony app open: http://localhost:8080/api/public

Contributors
============

- Richard Melo [Twitter](https://twitter.com/allucardster), [Linkedin](https://www.linkedin.com/in/richardmelo)
