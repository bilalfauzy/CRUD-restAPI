<?php 

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'crudapi_db');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB) or die("Tidak bisa terhubung");
    
?>