<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "db_akademik";
    $port = 3307;

    $koneksi = new mysqli($server, $user, $password, $nama_database, $port);

    if( !$koneksi ){
        die("Gagal terhubung dengan database: " . $koneksi->connect_error);
    }

?>