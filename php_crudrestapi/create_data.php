<?php 

    require_once('db_koneksi.php');

    $nama = $_POST['Nama'];
    $club = $_POST['Club'];

    $query  = "INSERT INTO input_tb(Nama, Club) VALUES ('$nama', '$club')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode(array('message' => 'Data berhasil ditambahkan'));
    } else {
        echo json_encode(array('message' => 'Data gagal ditambahkan'));
    }

?>