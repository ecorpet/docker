# MAZARINE - Creative Content

### Requirements

Here are the requirements for the project:

- [PHP 7.1](http://www.php.net)
- [MySql 5.6](https://www.mysql.com)
- [Node >=8.10](https://nodejs.org)
- [RabbitMQ](https://www.rabbitmq.com/)
- [Composer](https://getcomposer.org) ( installed as a executable  )
- [Bower](https://bower.io)
- [Yarn](https://yarnpkg.com)

## Procedures

####Install the project:

- Create one vhost with documentRoot positionned on "webapp/web"
- Duplicate **env/production/web/.htaccess** to **webapp/web/.htaccess** 
- Duplicate **webapp/app/config/parameters.yml.dist** to **webapp/app/config/parameters.yml** 
- Modify **webapp/app/config/parameters.yml** with good datas ( mainly database parameters )
- Run the script :

```
sh scripts/install.sh
```

```
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd $DIR/../preprocess
rm -rf bower_components
rm -rf node_modules
yarn install
yarn build
cd ..
cd webapp
rm -Rf var
mkdir -p var/cache
mkdir -p var/logs
rm -Rf vendor
composer install
sh scripts/reset_database.sh
chmod -R 777 var/*
chmod -R 777 web/uploads/
php -d memory_limit=-1 app/console cache:warmup --env=prod
sh scripts/refresh_cache.sh
```


####Preprocess commands:

- Start preprocess watcher:
```
yarn start
```

- Build project:

```
yarn build
```
