<?php include "../../database/koneksi.php";
session_start();
if (!isset($_SESSION["id_alumni"]) || $_SESSION['isLogin'] !== true) {
    $_SESSION["id_alumni"] = $id_alumni;
    $_SESSION["nama"] = $nama;
    echo "<script>
        alert('Login Terlebih dahulu')
        window.location.href = '../ultils/signin_alumni.php'
    </script>";
}
$id_alumni = $_SESSION['id_alumni'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alumni BPVP SHOP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.icon" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- sidebar -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="../index.php" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">BPVP</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src=".././img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?= $_SESSION['nama'] ?></h6>
                    <span>Alumni</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="../index.php" class="nav-item nav-link"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i
                            class="far fa-file-alt me-2"></i>Produk</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="tampil_produk.php" class="dropdown-item">Tampil</a>
                        <a href="input_produk.php" class="dropdown-item">Input</a>
                        <a href="edit_produk.php" class="dropdown-item">Edit</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="far fa-file-alt me-2"></i>Kategori</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="../kategori/tampil_kategori.php" class="dropdown-item">Tampil</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- sidebar end -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="../index.php" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="../index.php" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src=".././img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src=".././img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src=".././img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notificatin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src=".././img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"><?= $_SESSION['nama'] ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href=".././ultils/signout_alumni.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar end -->
        <!-- content start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <form action="../../database/proses_ubah_produk.php" method="GET" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <?php
                            $id_produk = $_GET['id_produk'];
                            $update = mysqli_query($koneksi, "SELECT * FROM produk where id_produk='$id_produk'");
                            while ($data = mysqli_fetch_assoc($update)) { ?>
                                <h6 class="mb-4">Edit Produk</h6>
                                <div class="form-floating mb-3">
                                    <input type="hidden" class="form-control" id="id_produk" name="id_produk" value="<?= $data['id_produk'] ?>" placeholder="">
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="id_alumni" id="id_alumni" value="<?= $data['id_alumni'] ?>">
                                    <label for="floatingInput">id_alumni</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $data['nama_produk'] ?>" placeholder="">
                                    <label for="floatingInput">nama produk</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="floatingSelect">Works with selects</label>
                                    <select class="form-select" aria-label="Floating label select example" name="id_kategori" id="id_kategori">
                                        <option selected>Pilih Kategori</option>
                                        <?php
                                        $kategori_query = "SELECT id_kategori,kategori FROM kategori_produk";
                                        $result = mysqli_query($koneksi, $kategori_query);
                                        while ($item = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $item['id_kategori'] . "'>" . $item['kategori'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $data['harga'] ?>" placeholder="">
                                    <label for="floatingInput">harga</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="persen" name="persen" value="<?= $data['persen'] ?>" placeholder="">
                                    <label for="floatingInput">Diskon</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="rating" value="<?= $data['rating'] ?>" name="rating" placeholder="">
                                    <label for="floatingInput">Rating</label>
                                </div>
                                <div>
                                    <label for="formFileLg" class="form-label">Gambar Produk</label>
                                    <input class="form-control form-control-lg bg-dark" id="gambar" type="file" name="gambar" value="gambar">
                                    <p>Gambar saat ini: <img src="../assets/<?= $data['gambar'] ?>" alt="Gambar Berita" width="100"></p>
                                </div>
                                <a href=""><button type="submit" class="btn btn-success m-2">Edit</button></a>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- content end -->
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>