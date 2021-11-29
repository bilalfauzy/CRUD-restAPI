<?php 

    require_once('db_koneksi.php');

    $id   = $_POST['id'];
    $nama = $_POST['Nama'];
    $club = $_POST['Club'];

    $query  = "UPDATE input_tb SET Nama = '$nama', Club = '$club' WHERE id='$id'";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode(array('message' => 'Data berhasil diupdate'));
    } else {
        echo json_encode(array('message' => 'Data gagal diupdate'));
    }

?>