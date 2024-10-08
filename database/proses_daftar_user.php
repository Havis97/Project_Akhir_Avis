<?php
include "koneksi.php"; // Koneksi database


$id = $_POST['id_user'];
$nama = $_POST['nama_user'];
$user = $_POST['username'];
$password = $_POST['password'];


// Menambahkan user baru dengan status "tidak disetujui" secara default
$daftar = "INSERT INTO user (id_user, nama_user, username, password) VALUES ('$id', '$nama','$user','$password')";

if (mysqli_query($koneksi, $daftar)) {
    echo "<script> alert ('Pendaftaran berhasil')
                window.location.href = '../../Website/login.php'
                </script>";
} else {
    echo "<script> alert ('Pendaftaran anda Gagal')
        window.location.href = '../../Website/regitster.php'
        </script>" . mysqli_error($koneksi);
}
