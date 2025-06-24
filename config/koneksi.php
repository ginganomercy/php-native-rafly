<?php
$host = "localhost";
$user = "root"; // Default username login
$password = null; // Default password login
$db = "db_crud"; // Database name

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>