<?php
include "koneksi.php";

$id = $_POST['id'];
$id_produk = $_POST['id_produk'];
$id_user = $_POST['id_user'];
$rat = $_POST['rating'];
$isi = $_POST['isi'];

$review = mysqli_query($koneksi, "INSERT INTO review (id,id_produk,id_user,rating,isi) VALUE ('$id','$id_produk','$id_user','$rat','$isi')");

if ($review) {
    echo "<script>
    alert('review sudah ditambahkan')
    window.location.href='../Website/product-list.php'
    </script>";
} else {
    echo "<script>
    alert('Data gagal ditambahkan')
    window.location.href='../Website/product-list.php'
    </script>";
}
