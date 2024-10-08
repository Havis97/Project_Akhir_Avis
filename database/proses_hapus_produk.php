<?php
include "koneksi.php";

if (isset($_GET['id_produk']))
    $id_produk = $_GET['id_produk'];

$hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");
if ($hapus) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href='../Alumni/produk/tampil_produk.php';
        </script>";
} else {
    echo "<script>  
            alert('Data gagal dihapus');
            window.location.href='../Alumni/produk/tampil_produk.php';
        </script>";
}
