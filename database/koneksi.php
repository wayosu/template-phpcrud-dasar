<?php
    $mysqli = new mysqli("localhost", "root", "", "db_phpcrud");

    if($mysqli->connect_error) {
        die("Koneksi gagal" . $mysqli->connect_error);
    }
    //  else {
    //     echo "Koneksi berhasil";
    // }
?>