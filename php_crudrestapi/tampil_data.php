<?php 

    require_once('db_koneksi.php');

    $query  = "SELECT * FROM input_tb";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {

        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push($result, array(
                'id'    => $row['id'],
                'Nama'  => $row['Nama'],
                'Club'  => $row['Club'],
            ));
        }
        echo json_encode($result);
    }


?>