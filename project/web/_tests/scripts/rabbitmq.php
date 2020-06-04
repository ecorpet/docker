Launch first 'docker exec -u 1000 -it $(docker ps -aqf "name=project-test_php730") bash' <br/>
Run in bash 'php /var/www/web/_tests/scripts/rabbitmq.sh' in container 'project-test_php730' <br/>
<br/>
Based on https://www.supinfo.com/articles/single/2314-rabbitmq-php-avec-librairie-php-amqplib