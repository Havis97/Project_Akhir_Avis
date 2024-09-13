<?php
include "koneksi.php";

// Mendapatkan action dan id user dari URL
$action = $_GET['action'];
$id_alumni = $_GET['id_alumni'];

// Validasi action yang valid
if ($action == 'Terima') {
    $daftar = "UPDATE alumni SET status='Terima' WHERE id_alumni=$id_alumni";
    if ($koneksi->query($daftar) === TRUE) {
        echo "Selamat Datang Di Website";
    } else {
        echo "Error: " . $koneksi->error;
    }
} elseif ($action == 'Belum_Terima') {
    $daftar = "UPDATE alumni SET status='Belum_Terima' WHERE id_alumni=$id_alumni";
    if ($koneksi->query($daftar) === TRUE) {
        echo "Mohon Maaf Akun Anda belum diterima";
    } else {
        echo "Error: " . $koneksi->error;
    }
} else {
    echo "Invalid action.";
}
