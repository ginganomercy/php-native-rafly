<?php include("../config/koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="../styles/tambah.css"> <!-- Styling khusus halaman tambah -->
</head>
<body>
    <h2>Tambah Data</h2>
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>
        <br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>
        <br><br>

        <button type="submit" name="submit">Tambah</button>
        <button type="button"><a href="index.php">Kembali</a></button> <!-- Tombol untuk kembali ke halaman index -->
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        // Query untuk memasukkan data ke dalam tabel users
        $query = "INSERT INTO users (nama, jurusan, alamat) VALUES ('$nama', '$jurusan', '$alamat')";
        
        mysqli_query($conn, $query);
        header("Location: index.php"); // Redirect ke halaman index setelah data ditambahkan
    }
    ?>
</body>
</html>