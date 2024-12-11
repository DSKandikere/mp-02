<?php

// Required if your environment does not handle autoloading

require 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid = "";
$token = "";
$client = new Twilio\Rest\Client($sid, $token);

$message = $client->message->create(
    '+',
    [
        'from' => '',
        'body' => "Help i am in danger "
    ]
);
if($message){
echo 'message sent';
}else{
echo 'smtg happened!!!!!!!!!!!!!!!!';
}
?>