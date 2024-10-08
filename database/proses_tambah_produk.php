<?php
include "koneksi.php";

$id_produk = $_POST['id_produk'];
$id_alumni = $_POST['id_alumni'];
$nama = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$persen = $_POST['persen'];
$rat = $_POST['rating'];
$nama_file = $_FILES['gambar']['name'];
$nama_sementara = $_FILES['gambar']['tmp_name'];

$terupload = move_uploaded_file($nama_sementara, '../Alumni/assets/' . $nama_file);

$sql = "INSERT INTO produk (id_produk,id_alumni,nama_produk,id_kategori,harga,persen,rating,gambar) 
VALUES ('$id_produk','$id_alumni','$nama','$id_kategori','$harga','$persen','$rat','$nama_file')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>
    alert('Produk Berhasil Didaftarkan');
    window.location.href='../Alumni/produk/tampil_produk.php';
    </script>";
} else {
    echo "<script>
    alert('Gagal menambahkan Produk');
    window.location.href='../Alumni/produk/input_produk.php';
    </script>";
}
