<?php
$koneksi = mysqli_connect("localhost", "root", "", "zoo");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : ".mysqli-connect_error();

}
?>