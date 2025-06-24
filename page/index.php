<?php include("../config/koneksi.php"); ?> <!--Untuk menghubungkan dengan database-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th> <!-- Kolom untuk nomor urut -->
            <th>Nama</th> <!-- Kolom untuk nama -->
            <th>Jurusan</th> <!-- Kolom untuk jurusanx -->
            <th>Alamat</th> <!-- Kolom untuk alamat -->
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td> <!-- Menampilkan nomor urut -->
                    <td>{$row['nama']}</td> <!-- Menampilkan nama -->
                    <td>{$row['jurusan']}</td> <!-- Menampilkan jurusan -->
                    <td>{$row['alamat']}</td> <!-- Menampilkan alamat -->
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
            $no++;
        }
        ?>
    </table>
    <button type="button">
        <a href="tambah.php">Tambah Data</a> <!-- Tombol untuk menambahkan data -->
    </button>
</body>
</html>