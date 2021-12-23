<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('GET', '/api/servis');
$body = $response->getBody();
$data_body = json_decode($body);
// var_dump($data_body);

?>


<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <!-- datatable -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <!-- end datatable -->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
                $('#tabel-undangan').DataTable();
            });
        </script>

    </head>

    <body>
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>Daftar <b>Servis Laptop</b></h2>
                            </div>
                            <div class="col-sm-7">
                                <a href="add2.php" class="btn btn-secondary"><span class="material-icons-outlined">Tambah Data</span></a>
                            </div>
                            <div class="col-sm-7">
                                <a href="index.php" class="btn btn-secondary"><span class="material-icons-outlined"> Form Jual Beli</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover" id="tabel-undangan" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pelanggan</th>
                                <th>Type</th>
                                <th>Kerusakan/kendala</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ((array)$data_body  as $data) {
                            //var_dump($data['jersey']);
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data->nama ?></td>
                                <td><?php echo $data->type ?></td>
                                <td><?php echo $data->kerusakan ?></td>
                                <td><?php echo $data->harga ?></td>
                                <td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-warning"><a href="edit2.php?id=<?php echo $data->id; ?>">Edit</a></button></a>
                                    <a href="#"><button type="button" class="btn btn-danger"><a href="delete2.php?id=<?php echo $data->id; ?>">Delete</a></button></a>
                                </td>
                                </td>
                            </tr>
                        <?php
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>