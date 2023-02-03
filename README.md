# PHP Monorepo Docker Composer Example

This sets up two services, which depend on a package outside their app directory. We include the package via Composer.

- [Service 1](http://localhost)
- [Service 2](http://localhost:8080)

## Goals

1. Multiple services can use shared (package) code
2. Refreshing your browser will reflect package changes
3. Simple setup and running via Docker

## Setup & Run

1. `docker compose up`

## Development

### Changing Composer dependencies

You'll need to rebuild the docker images when you add/update/delete composer dependencies.
`docker compose build`

### Local testing

You'll have to run `composer install` locally to get the testing tools you need.