<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "tiket_kebun_binatang";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = $_POST["nama"];
    $tipe_tiket = $_POST["tipe_tiket"];
    $jumlah_tiket = $_POST["jumlah_tiket"];
    $tanggal = $_POST["tanggal"];
    $add_on = isset($_POST["add_on"]) ? $_POST["add_on"] : "none";

    // Insert data into the database
    $sql = "INSERT INTO tiket (nama, tipe_tiket, jumlah_tiket, tanggal, add_on)
            VALUES ('$nama', '$tipe_tiket', $jumlah_tiket, '$tanggal', '$add_on')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the payment page upon successful reservation
        header("Location: payment.php");
        exit(); // Ensure that subsequent code is not executed after the header
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
