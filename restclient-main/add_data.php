<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/barang',[
    'json' => [
        'type' => $_POST['type'],
        'spek' => $_POST['spek'],
        'jumlah' => $_POST['jumlah'],
        'harga' => $_POST['harga'],
    ]
]);

$body = $response->getBody();
header('location:index.php')

?>