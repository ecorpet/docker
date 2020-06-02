<?php
require_once './../vendor/autoload.php';
require '_config.php';

// Create the Transport
$transport = (new Swift_SmtpTransport(MAILER_HOST, MAILER_PORT));

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject '.time()))
->setFrom([MAILER_FROM])
->setTo([MAILER_TO])
->setBody('Here is the message itself')
;

$recipients = $mailer->send($message);
if($recipients >0) {
    echo "Sent successully" ;
} else  {
    echo "Problem" ;
}

