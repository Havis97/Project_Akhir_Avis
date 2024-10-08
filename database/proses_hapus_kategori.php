<?php
include "koneksi.php";

if (isset($_GET['id_kategori']))
    $id_kategori = $_GET['id_kategori'];

$hapus = mysqli_query($koneksi, "DELETE FROM kategori_produk WHERE id_kategori='$id_kategori'");
if ($hapus) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href='../Dashboard/kategori/tampil_kategori.php';
        </script>";
} else {
    echo "<script>  
            alert('Data gagal dihapus');
            window.location.href='../Dashboard/kategori/tampil_kategori.php';
        </script>";
}
