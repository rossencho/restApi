<?php

require __DIR__.'/vendor/autoload.php';

$client = new \GuzzleHttp\Client([
    'base_uri'=>'http://localhost:8000',
    'defaults'=>[
        'exceptions'=>false
    ]
]);

$response = $client->get('/user');

 print_r($response);
