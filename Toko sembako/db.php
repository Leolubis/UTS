<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_toko_sembako";

    $conn = mysqli_connect($hostname, $username, $password, $database) or die ('Gagal terhubung ke database');
?>