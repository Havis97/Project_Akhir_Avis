<?php
include "koneksi.php";

$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];
$des = $_POST['deskripsi'];

$update = mysqli_query($koneksi, "UPDATE kategori_produk SET kategori ='$kategori', deskripsi ='$des' WHERE id_kategori='$id_kategori'");
if ($update) {
    echo "<script>
    alert('Data berhasil diubah')
    window.location.href='../Dashboard/kategori/tampil_kategori.php'
    </script>";
} else {
    echo "<script>
    alert('Data gagal diubah')
    window.location.href='../Dashboard/kategori/tampil_kategori.php'
    </script>";
}
