<?php
include "koneksi.php";
$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];
$des = $_POST['deskripsi'];

$tambah = mysqli_query($koneksi, "INSERT INTO kategori_produk (id_kategori,kategori,deskripsi) VALUES ('$id_kategori','$kategori','$des')");

if ($tambah) {
    echo "<script>
    alert('Data berhasil ditambahkan')
    window.location.href='../Dashboard/kategori/tampil_kategori.php'
    </script>";
} else {
    echo "<script>
    alert('Data gagal ditambahkan')
    window.location.href='../Dashboard/kategori/input_kategori.php'
    </script>";
}
