# Projet test

### Introduction
This POC will allow you to have
- LAMP server
- Node server ( Pending: still folder location to improve ... )
- Phpmyadmin
- Smtp mail server with inbox interface to test your email fonctionnalities
- Blackfire tools ( Php code analysis )

### Requirements

Here are the requirements:
- [Docker](https://www.docker.com/) installed.

### Start project 
- `cd ./docker/`
- `docker-compose up`

## Project Urls 
- Web serveur Node: [http://localhost:49160](http://localhost:49160)
- Web serveur Apache: [http://project-test.local:9073](http://project-test.local:9073)
- Test features : DB, Send Mail, File writing, Phpinfo: [Click here](http://project-test.local:9073/_tests/scripts/)
- Phpmyadmin: [http://localhost:8080](http://localhost:8080) : login: "root" , password : laisser vide
- Maildev Panel: [http://localhost:8002](http://localhost:8002)

## Tools  
- Download [Blackfire Chrome extension](https://chrome.google.com/webstore/detail/blackfire-profiler/miefikpgahefdbcgoiicnmpbeeomffld)

## Commands
- Pour travailler sur l'application: `docker exec -u 1000 -it $(docker ps -aqf "name=project-test_php730") bash`
- Pour travailler sur la base de données:`docker exec -u 1000 -it $(docker ps -aqf "name=project-test_db") bash`