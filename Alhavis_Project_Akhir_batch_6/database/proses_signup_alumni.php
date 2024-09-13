<?php
include "koneksi.php"; // Koneksi database


$id_alumni = $_POST['id_alumni'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$no = $_POST['no_hp'];
$alamat = $_POST['alamat'];

// Menambahkan user baru dengan status "tidak disetujui" secara default
$daftar = "INSERT INTO alumni (id_alumni, nama, password, no_hp, alamat) VALUES ('$id', '$nama','$password','$no','$alamat')";

if (mysqli_query($koneksi, $daftar)) {
    echo "<script> alert ('Pendaftaran berhasil, menunggu persetujuan admin')
                window.location.href = '../../Home/ultils/signup_alumni.php'
                </script>";
} else {
    echo "<script> alert ('Pendaftaran anda Gagal')
        window.location.href = '../../Home/ultils/signup_alumni.php'
        </script>" . mysqli_error($koneksi);
}
