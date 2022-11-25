# PHP REST API - CRUD

Easy PHP MySQL development with Docker and Docker Compose.

With this project you can quickly run the following:

- [NGINX](https://hub.docker.com/_/nginx)
- [PHP](https://hub.docker.com/_/php)
- [MySQL](https://hub.docker.com/_/mysql/)

Contents:

- [Requirements](#requirements)
- [Configuration](#configuration)
- [Installation](#installation)
- [Usage](#usage)

## Requirements

Make sure you have the latest versions of **Docker** and **Docker Compose** installed on your machine.

Clone this repository or copy the files from this repository into a new folder. In the **docker-compose.yml** file you may change the IP address (in case you run multiple containers) or the database from MySQL to MariaDB.


## Configuration

Edit the `.env` file to change the default IP address, MySQL root password and Database name.

## Installation

Open a terminal and `cd` to the folder in which `docker-compose.yml` is saved and run:

```
docker-compose up -d
```

This creates two new folders next to your `docker-compose.yml` file.

* `data` – used to store and restore database dumps and initial databse for import
* `web` – the location of your php application files

The containers are now built and running. You should be able to access the WordPress installation with the configured IP in the browser address. By default it is `http://127.0.0.1` or localhost:8080.

For convenience you may add a new entry into your hosts file.

## Usage

### Starting containers

You can start the containers with the `up` command in daemon mode (by adding `-d` as an argument) or by using the `start` command:

```
docker-compose start
```

### Stopping containers

```
docker-compose stop
```

### Removing containers

To stop and remove all the containers use the`down` command:

```
docker-compose down

```
### Run SQL Script in the database to create the required table

You may find the SQL script under database.sql file in the root directory.


### Topics covered in this project

Basic REST API routing and URLs
List, show, create, update and delete database records using a RESTful API
Best-practice code organisation
Controllers and table gateways
Relevant HTTP status codes
Data validation
JSON decoding and encoding

### API Endpoints 

GET: localhost:8080/prodcuts => list all products.

GET: localhost:8080/prodcuts/10 => show product with id (10). 

POST: localhost:8080/prodcuts => show product with id (10)
note: to add product using POST request, you need to add query parameter to the URL. Ex: localhost:8080/prodcuts?name="item one"&size=20&is_available=1

PATCH: localhost:8080/prodcuts/10 => update product with id (10)
note: to update product using PATCH request, you need to add query parameter to the URL. Ex: localhost:8080/prodcuts/10?name="item two"&size=30&is_available=0

DELETE: localhost:8080/prodcuts/10 => delete product with id (10)

