<?php 

    require_once('db_koneksi.php');
    parse_str(file_get_contents('php://input'), $value);

    $id   = $value['id'];

    $query  = "DELETE FROM input_tb WHERE id='$id'";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode(array('message' => 'Data berhasil dihapus'));
    } else {
        echo json_encode(array('message' => 'Data gagal dihapus'));
    }

?>