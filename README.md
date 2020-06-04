# Projet test

### Introduction
This POC will allow you to have
- LAMP server
- Node server 
- Phpmyadmin included
- Smtp mail server with inbox interface to test your email fonctionnalities
- Blackfire functionnalities

### Requirements

Here are the requirements:
- [Docker](https://www.docker.com/) installed.

### Start project 
- `cd ./docker/`
- `docker-compose up`

## Project Urls 
- [Web serveur Node](http://localhost:49160)
- [Web serveur Apache](http://project-test.local:9073)
- [Test features : DB, Send Mail, File writing, Phpinfo](http://project-test.local:9073/_tests/scripts/)
- [Phpmyadmin](http://localhost:8080)
- [Maildev Panel](http://localhost:8002)

## Tools  
- [Blackfire Chrome extension](https://chrome.google.com/webstore/detail/blackfire-profiler/miefikpgahefdbcgoiicnmpbeeomffld)

## Commands
- `docker exec -u 1000 -it $(docker ps -aqf "name=project-test_php730") bash`
- `docker exec -u 1000 -it $(docker ps -aqf "name=project-test_db") bash`