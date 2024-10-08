<?php
include "koneksi.php";
session_start();

$nama = $_POST['nama'];
$password = $_POST['password'];


$masuk = mysqli_query($koneksi, "SELECT * FROM tb_alumni WHERE nama = '$nama' AND status = 'Terima'");

if (mysqli_affected_rows($koneksi) > 0) {
    $proses = mysqli_fetch_assoc($masuk);
    $_SESSION["isLogin"] = true;
    $_SESSION["id_alumni"] = $proses['id_alumni'];
    $_SESSION["nama"] = $nama;
    echo "<script>
        alert('Selamat Datang') 
        window.location.href = '../Alumni/index.php' 
    </script>";
} else {
    echo "<script>
        alert('Data Anda Masih Belum Diterima, Mohon Tunggu Persetujuan Adminnya') 
        window.location.href = '../Alumni/ultils/signin_alumni.php' 
    </script>";
}
