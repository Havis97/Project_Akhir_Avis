<?php
include "koneksi.php";
if (isset($_GET['id_alumni'])) {
    $id_alumni = $_GET['id_alumni'];
    $ubah = "UPDATE tb_alumni SET status='Belum' WHERE id_alumni=$id_alumni";
    if (mysqli_query($koneksi, $ubah)) {
        echo "<script>
        alert('Data berhasil ditolak') 
        window.location.href = '../Dashboard/index.php' 
    </script>";
    } else {
        echo "Error updating record" . mysqli_error($koneksi);
    }
}
