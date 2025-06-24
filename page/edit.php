<?php
include("../config/koneksi.php");

// Cek apakah parameter ID tersedia di URL
if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
}

$id = $_GET['id'];

// Ambil data user berdasarkan ID
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    echo "Data tidak ditemukan!";
    exit;
}

$data = mysqli_fetch_assoc($result);

// Proses jika form disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $update = "UPDATE users SET nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE id=$id";
    mysqli_query($conn, $update);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../styles/edit.css">
</head>
<body>
    <h2>Edit Data</h2>
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>" required>
        <br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $data['jurusan']; ?>" required>
        <br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="<?= $data['alamat']; ?>" required>
        <br><br>

        <button type="submit" name="submit">Update</button>
        <button type="button"><a href="index.php">Kembali</a></button>
    </form>
</body>
</html>
