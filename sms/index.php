<?php
require_once 'vendor/autoload.php';
$messagebird = new MessageBird\Client('6t1u5jAdgD2WVeNKWcXRmPaP8');
$message = new MessageBird\Objects\Message;
$message->originator = '+244946359245';
$message->recipients = [ '+244946359245' ];
$message->body = 'Seu telefone foi envadido por vicente eduardo kkkkkkkkk';
$response = $messagebird->messages->create($message);
print_r(json_encode($response));