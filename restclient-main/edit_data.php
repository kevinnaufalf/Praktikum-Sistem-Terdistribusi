<?php

include 'vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/barang',[
    'json' => [
        'id' => $id,
        'type' => $_POST['type'],
        'spek' => $_POST['spek'],
        'jumlah' => $_POST['jumlah'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:index.php')

?>