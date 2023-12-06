<?php

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "select * from akun where namaDepan = '$username' and Password = '$password'");

$check = mysqli_num_rows ($login);
if ( $check > 0) {
echo "Anda berhasil login";
} else{ echo "Anda gagal login";
}