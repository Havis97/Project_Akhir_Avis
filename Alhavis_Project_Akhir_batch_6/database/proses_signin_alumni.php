<?php
include "koneksi.php";

$id_alumni = $_POST['id_alumni'];
$password = $_POST['Password'];

$masuk = mysqli_query($koneksi, "SELECT id_alumni, Password FROM alumni");

if (mysqli_affected_rows($koneksi) > 0) {
    session_start();
    $_SESSION["issignin"] = true;
    $_SESSION["id"] = $user;
    echo "<script>
        alert('Selamat Datang') 
        window.location.href = '../Home/index.php' 
    </script>";
} else {
    echo "<script>
        alert('Username atau Password anda salah, Mohon dicek Kembali') 
        window.location.href = 'signin_alumni.php' 
    </script>";
}
