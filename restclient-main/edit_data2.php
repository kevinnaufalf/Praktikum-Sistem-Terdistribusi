<?php

include 'vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/servis',[
    'json' => [
        'id' => $id,
        'nama' => $_POST['nama'],
        'type' => $_POST['type'],
        'kerusakan' => $_POST['kerusakan'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:index2.php')

?>