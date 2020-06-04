<?php
require_once __DIR__.'/../vendor/autoload.php';
require '_config.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection(RABBITMQ_HOST, 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

$msg = new AMQPMessage('Hello World! '.time());
$channel->basic_publish($msg, '', 'hello ');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();