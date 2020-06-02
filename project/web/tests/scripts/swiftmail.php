<?php
require_once './../vendor/autoload.php';
require '_config.php';

// Create the Transport
$transport = (new Swift_SmtpTransport(MAILER_HOST, MAILER_PORT));

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject '.time()))
->setFrom(['john@doe.com' => 'John Doe'])
->setTo(['receiver1@domain.org', 'receiver2@domain.org' => 'A name'])
->setBody('Here is the message itself')
;

$recipients = $mailer->send($message);
if($recipients >0) {
    echo "Sent successully" ;
} else  {
    echo "Problem" ;
}

