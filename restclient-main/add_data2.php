<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/servis',[
    'json' => [
        'nama' => $_POST['nama'],
        'type' => $_POST['type'],
        'kerusakan' => $_POST['kerusakan'],
        'harga' => $_POST['harga'],
    ]
]);

$body = $response->getBody();
header('location:index2.php')

?>