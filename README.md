
# Simple php + mysql + phpmyadmin workflow

**ONLY for DEV, not for production**

## Run Locally

Clone the project

```bash
  git clone https://github.com/ThomasMouchelet/simple-docker-php
```

Run the docker-compose

```bash
  docker-compose build
  docker-compose up -d
```

Log into the PHP container

```bash
  docker exec -it docker_php bash
  php -S 0.0.0.0:8000
```
*Your application is available at http://127.0.0.1:9000*

Create an account (identical to your local session)

```bash
  adduser username
  chown username:username -R .
```

## Ready to use with

This docker-compose provides you :

- PHP-8.0.13-cli (Debian)
    - Composer
    - and some other php extentions
    - nodejs, npm, yarn
- phpmyadmin
- mysql


## Requirements

Out of the box, this docker-compose is designed for a Linux operating system, provide adaptations for a Mac or Windows environment.

- Linux (Ubuntu 20.04 or other)
- Docker
- Docker-compose
## Author

- [@ThomasMouchelet](https://github.com/ThomasMouchelet)