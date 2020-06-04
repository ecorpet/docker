#  Docker POC

### Introduction
The "state of mind" of this poc is to be "version scalable" ( PHP, Node, etc.) and to expose configurations for fine tuning.

This Proof Of Concept will offer you:
- LAMP server
- Node server ( Pending: still folder location to improve ... )
- Phpmyadmin
- Smtp mail server with inbox interface
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
- Phpmyadmin: [http://localhost:8080](http://localhost:8080) : login: "root" , password : leave empty
- Maildev Panel: [http://localhost:8002](http://localhost:8002)

## Tools  
- Download [Blackfire Chrome extension](https://chrome.google.com/webstore/detail/blackfire-profiler/miefikpgahefdbcgoiicnmpbeeomffld)

## Commands
- To work on the application: `docker exec -u 1000 -it $(docker ps -aqf "name=project-test_php730") bash`
- To work on the database:`docker exec -u 1000 -it $(docker ps -aqf "name=project-test_mysql57") bash`