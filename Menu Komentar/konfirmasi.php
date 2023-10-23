<?php
// Informasi koneksi ke database
$host = "localhost"; // Ganti dengan nama host MySQL Anda
$username = "root"; // Ganti dengan nama pengguna MySQL Anda
$password = ""; // Ganti dengan kata sandi MySQL Anda
$database = "zoo"; // Ganti dengan nama database yang ingin Anda gunakan

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan dari formulir
if(isset($_POST['submit'])){
    // Menangkap data komentar dari formulir
    $comment_content = $_POST['comment_content'];
    $dateFrom = $_POST['dateFrom'];

    // Menyiapkan pernyataan SQL INSERT
    $sql = "INSERT INTO komentar (komentar, tanggalkomentar, ID_Akun ) VALUES ('$comment_content', '$dateFrom', '1')";

    // Menjalankan pernyataan SQL
    if ($conn->query($sql) === TRUE) {
        echo "Komentar berhasil dimasukkan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi ke database
$conn->close();
?>