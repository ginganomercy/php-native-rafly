> ⚠️ **Peringatan:** File `README.md` ini tidak ditujukan untuk disalin atau digunakan langsung dalam aplikasi.
> Gunakan hanya sebagai referensi dokumentasi proyek.

# 📋 PHP CRUD Sederhana dengan MySQL

Proyek ini merupakan aplikasi web **CRUD (Create, Read, Update, Delete)** sederhana menggunakan **PHP** dan **MySQL**. Aplikasi ini memungkinkan pengguna untuk menambahkan, melihat, mengedit, dan menghapus data pengguna.

---

## 🚀 Fitur Utama

* ✅ Tambah data pengguna (Nama, Jurusan, Alamat)
* 📄 Tampilkan data dalam tabel
* ✏️ Edit data pengguna
* 🗑️ Soft delete (hapus tanpa benar-benar menghapus dari database)
* ♻️ Sistem dapat dikembangkan untuk fitur restore dan trash bin

---

## 🧱 Struktur Folder

```
/crud-php/
│
├── config/
│   └── koneksi.php           # File koneksi database
│
├── index.php                 # Halaman utama (Read)
├── tambah.php                # Form tambah data
├── edit.php                  # Form edit data
├── delete.php                # Soft delete data
│
├── index.css                 # Styling halaman index
├── tambah.css                # Styling halaman tambah
├── edit.css                  # Styling halaman edit
│
└── README.md                 # Dokumentasi proyek ini
```

---
## 📸 Screenshot

![Tampilan Aplikasi[]([https://raw.githubusercontent.com/namamu/assets-repo/main/images/crud-preview.png](https://github.com/ginganomercy/For-Images-PHP/blob/8ea42d62903131a4c6f89f63ce7cae5860dae900/index-php.png](https://raw.githubusercontent.com/ginganomercy/For-Images-PHP/8ea42d62903131a4c6f89f63ce7cae5860dae900/index-php.png
)

---

## 🛠️ Setup dan Instalasi

1. **Clone atau download repo ini** ke folder lokal:

   ```bash
   git clone https://github.com/nama-kamu/crud-php.git
   ```

2. **Import database**
   Buat database MySQL dengan nama `crud_db` (atau sesuai kebutuhan), dan jalankan SQL berikut:

   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nama VARCHAR(100),
       jurusan VARCHAR(100),
       alamat TEXT,
       is_deleted TINYINT(1) DEFAULT 0
   );
   ```

3. **Atur koneksi database** di `config/koneksi.php`:

   ```php
   <?php
   $conn = mysqli_connect("localhost", "root", "", "crud_db");
   if (!$conn) {
       die("Koneksi gagal: " . mysqli_connect_error());
   }
   ?>
   ```

4. **Jalankan dengan XAMPP / PHP Server**

   * Pastikan folder proyek diletakkan di `htdocs/`
   * Buka di browser:
     `http://localhost/crud-php/index.php`

---

## 📌 Catatan

* `delete.php` menggunakan metode **soft delete**. Data tidak dihapus permanen, hanya ditandai `is_deleted = 1`.
* Jika ingin menambahkan **trash bin atau restore**, cukup buat halaman baru yang menampilkan `is_deleted = 1`.

---

## 📄 Lisensi

Proyek ini open-source dan dapat digunakan untuk keperluan pembelajaran atau pengembangan.

---

## 🤝 Kontribusi

Kontribusi sangat disambut! Fork repo ini dan kirimkan pull request dengan fitur baru atau perbaikan bug.
