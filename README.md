#  Docker POC

### Introduction
The "state of mind" of this poc is to be "version scalable" ( PHP, Node, etc.) and to expose configurations for fine tuning.

This Proof Of Concept will offer you:
- LAMP server ( xdebig && composer included )
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

### Start "project-test.local" website (5 min)  
- Add `127.0.0.1 project-test.local`  to your `/etc/host`
- Create the Docker `.env` file. ( `cp .docker/.env.sample .docker/.env` ).
- Configure Blackfire ids in `.env`.  If not needed, remove dedicated section from `docker-compose.yml` 
- In order to run tests : `cd project/web/_tests && composer install` 
- Finally start your containers : `cd .docker/ && docker-compose up`
- Go to one of the following urls

## Project Urls 
- Web serveur Node: [http://localhost:49160](http://localhost:49160)
- Web serveur Apache: [http://project-test.local:9073](http://project-test.local:9073)
- Test features : DB, Send Mail, File writing, Phpinfo: [Click here](http://project-test.local:9073/_tests/scripts/)
- Phpmyadmin: [http://localhost:8080](http://localhost:8080) : login: "root" , password : leave empty
- Swagger: [http://localhost:9000](http://localhost:9000)
- Maildev Panel: [http://localhost:8002](http://localhost:8002)

## Run commands
- PHP: launch a terminal and execute `docker exec -u 1000 -it $(docker ps -aqf "name=project-test_php730") bash`
- Mysql: launch a terminal and execute `docker exec -u 1000 -it $(docker ps -aqf "name=project-test_mysql57") bash` and launch `mysql -u root`

## Change for hello-word.local ? (3min needed)
- Add `127.0.0.1 hello-word.local`  to your `/etc/host`
- Change `ServerName project-test.local` to `ServerName hello-word.local` in `.docker/apache2/sites-enabled/project-test.conf`
- Rename vhost config file `.docker/apache2/sites-enabled/project-test.conf` to `hello-word.conf` ( optionnal but cleaner )
- Rename your database `project-test` to `hello-word` in `.docker/mysql57/my.cnf` ( optionnal but cleaner )

## Warning
- In your db config you must consider `mysql57` as you host, not `localhost`, like configured in `project/web/_tests/scripts/_config.php`
