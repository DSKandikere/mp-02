<?php

// Required if your environment does not handle autoloading

require 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid = "AC346e703cf0919e0cf229c8b494c643d3";
$token = "54e72b0afa84919f5f0d5a5e78bbbc2d";
$client = new Twilio\Rest\Client($sid, $token);

$message = $client->message->create(
    '+917349347948',
    [
        'from' => '+15072644727',
        'body' => "Help i am in danger "
    ]
);
if($message){
echo 'message sent';
}else{
echo 'smtg happened!!!!!!!!!!!!!!!!';
}
?>
