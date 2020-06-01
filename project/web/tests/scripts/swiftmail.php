<?php
require_once './../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('maildev', 25));

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject '.time()))
->setFrom(['john@doe.com' => 'John Doe'])
->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
->setBody('Here is the message itself')
;

// Send the message
var_dump($mailer->send($message));