<?php
include "koneksi.php";

$user = $_POST['username'];
$password = $_POST['password'];

$masuk = mysqli_query($koneksi, "SELECT username, password FROM user");

if (mysqli_affected_rows($koneksi) > 0) {
    session_start();
    $_SESSION["isLogin"] = true;
    $_SESSION["username"] = $user;
    echo "<script>
        alert('Selamat Datang') 
        window.location.href = '../Website/index.php' 
    </script>";
} else {
    echo "<script>
        alert('Username atau Password anda salah, Mohon dicek Kembali') 
        window.location.href = '../Website/login.php' 
    </script>";
}
