<?php
include "koneksi.php";
if (!isset($_SESSION['id_alumni'])) {
    die();
}

$id_produk = $_POST['id_produk'];
$id_alumni = $_POST['id_alumni'];
$nama = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$persen = $_POST['persen'];
$rat = $_POST['rating'];
$nama_file = $_FILES['gambar']['name'];
$nama_sementara = $_FILES['gambar']['tmp_name'];

if (!empty($nama_file)) {
    // Jika file gambar diunggah, lakukan upload dan update gambar
    $terupload = move_uploaded_file($nama_sementara, '../Alumni/assets/' . $nama_file);
    $sql = "UPDATE produk SET id_alumni='$id_alumni', nama_produk='$nama', id_kategori='$id_kategori', harga='$harga', rating='$rat', gambar='$nama_file' WHERE id_produk='$id_produk'";
} else {
    // Jika tidak ada gambar baru yang diunggah, hanya update data teks
    $sql = "UPDATE produk SET id_alumni='$id_alumni', nama_produk='$nama', id_kategori='$id_kategori', harga='$harga', rating='$rat' WHERE id_produk='$id_produk'";
}

if (mysqli_query($koneksi, $sql)) {
    echo "<script>
    alert('Produk Berhasil Diubah');
    window.location.href='../Alumni/produk/tampil_produk.php';
    </script>";
} else {
    echo "<script>
    alert('Gagal merubah Produk');
    window.location.href='../Alumni/produk/tampil_produk.php';
    </script>";
}
