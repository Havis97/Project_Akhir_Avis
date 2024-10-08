<?php
include "koneksi.php";

$user = $_POST['username'];
$nama = $_POST['nama_admin'];
$email = $_POST['email'];
$password = $_POST['Password'];
$nohp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$tgl_lahir = $_POST['tgl_lahir'];

$daftar = mysqli_query($koneksi, "INSERT INTO tb_admin (username,nama_admin,email,Password,no_hp,alamat,gender,tgl_lahir) 
VALUE ('$user','$nama','$email','$password','$nohp','$alamat','$gender','$tgl_lahir')");

if ($daftar) {
    echo "<script>
        alert('Anda Jadi Admin') 
        window.location.href = '../Dashboard/ultils/sigin.php' 
    </script>";
} else {
    echo "<script>
        alert('Data Ada yang salah, Mohon Dicek Lagi') 
        window.location.href = '../Dashboard/ultils/signup.php' 
    </script>";
}
