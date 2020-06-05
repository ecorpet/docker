#  Docker POC

### Introduction
The "state of mind" of this poc is to be "version scalable" ( PHP, Node, etc.) and to expose configurations for fine tuning.

This Proof Of Concept will offer you:
- LAMP server
- PHP Blackfire tools
- Phpmyadmin
- Swagger
- Smtp mail server with inbox interface
- Node server ( Pending: still folder location to improve ... )

### Requirements

Here are the requirements:
- [Docker](https://www.docker.com/) installed.

Here are the optionnal requirements:
- [Blackfire Chrome extension](https://chrome.google.com/webstore/detail/blackfire-profiler/miefikpgahefdbcgoiicnmpbeeomffld)

### Start project 
- Create the Docker `.env` file. ( `cp .docker/.env.sample .docker/.env` ).
- If Blackfire is needed: Configure Blackfire ids
- In order to run test : `cd project/web/_tests && composer install` 
- Finally to start docker: `cd .docker/ && docker-compose up`

## Project Urls 
- Web serveur Node: [http://localhost:49160](http://localhost:49160)
- Web serveur Apache: [http://project-test.local:9073](http://project-test.local:9073)
- Test features : DB, Send Mail, File writing, Phpinfo: [Click here](http://project-test.local:9073/_tests/scripts/)
- Phpmyadmin: [http://localhost:8080](http://localhost:8080) : login: "root" , password : leave empty
- Swagger: [http://localhost:9000](http://localhost:9000)
- Maildev Panel: [http://localhost:8002](http://localhost:8002)

## Run in command line
- LAMP application: `docker exec -u 1000 -it $(docker ps -aqf "name=project-test_php730") bash`
- Mysql:`docker exec -u 1000 -it $(docker ps -aqf "name=project-test_mysql57") bash` and launch `mysql -u root`
- Rabbitmq:`docker exec -u 1000 -it $(docker ps -aqf "name=project-test_rabbitmq3") bash`