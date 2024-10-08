<?php
include "../database/koneksi.php";
session_start();
if (!isset($_SESSION["username"]) || $_SESSION['isLogin'] !== true) {
    echo "<script>
        alert('Login Terlebih dahulu') 
        window.location.href = 'login.php' 
    </script>";
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BPVP E-Commerce</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap Ecommerce Template" name="keywords">
    <meta content="Bootstrap Ecommerce Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<!-- Top Header Start -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.php">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHP9ZM_x6tAa0zAaiYiHXy7mS4UsNGFs3fVA&s" height="200" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'] ?></a>
                        <div class="dropdown-menu">
                            <a href="proses_logout_user.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                    <div class="cart">
                        <i class="fa fa-cart-plus"></i>
                        <span>(0)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Header End -->

<!-- Header Start -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="product-list.php" class="nav-item nav-link">Produk</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                        <div class="dropdown-menu">
                            <a href="cart.php" class="dropdown-item">Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Header End -->

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">product list</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<div class="cart-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <?php
                            $id_produk = $_GET['id_produk'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk ='$id_produk'");
                            $detail = mysqli_fetch_array($sql);
                            ?>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <tr>
                                <td><a href="#"><img src="../Alumni/assets/<?php echo $detail['gambar']; ?>" alt="Image"></a></td>
                                <td><a href="#"><?php echo $detail['nama_produk']; ?></a></td>
                                <td>Rp.<?php echo number_format($detail['harga']); ?></td>
                                <td>
                                    <div class="qty">
                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                        <input type="text" value="1" id="jumlah">
                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td id="total-harga">Rp.<?php echo number_format($detail['harga']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->

<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h1>BPVP E-Commerce</h1>
                    <p>
                        Semua Masalah anda ada disini
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Useful Pages</h3>
                    <ul>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="product-detail.php">Product Detail</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login.php">Login & Register</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Quick Links</h3>
                    <ul>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="login.php">Login & Register</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3 class="title">Get in Touch</h3>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>Cupak Tangah, Pauh, Padang, Sumatra Barat, Indonesia</p>
                        <p><i class="fa fa-envelope"></i>bpvppadang@example.com</p>
                        <p><i class="fa fa-phone"></i>+123-456-7890</p>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row payment">
            <div class="col-md-6">
                <div class="payment-method">
                    <p>We Accept:</p>
                    <img src="img/payment-method.png" alt="Payment Method" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <p>Secured By:</p>
                    <img src="img/godaddy.svg" alt="Payment Security" />
                    <img src="img/norton.svg" alt="Payment Security" />
                    <img src="img/ssl.svg" alt="Payment Security" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->


<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Ambil harga satuan dari PHP tanpa pemisah ribuan
        var hargaSatuan = <?php echo $detail['harga']; ?>;

        // Fungsi untuk memperbarui total harga
        function updateTotal() {
            var jumlah = parseInt($('#jumlah').val()); // Pastikan nilai jumlah adalah angka
            if (isNaN(jumlah)) jumlah = 1; // Jika jumlah tidak valid, setel ke 1
            var total = hargaSatuan * jumlah; // Hitung total harga

            // Format total harga dengan pemisah ribuan
            $('#total-harga').text('Rp.' + total.toLocaleString('id-ID'));
        }

        // Event ketika tombol plus ditekan
        $('.btn-plus').click(function() {
            var jumlah = parseInt($('#jumlah').val());
            if (isNaN(jumlah)) jumlah = 1; // Jika jumlah tidak valid, setel ke 1
            $('#jumlah').val(jumlah + 1); // Tambah jumlah barang
            updateTotal(); // Perbarui total harga
        });

        // Event ketika tombol minus ditekan
        $('.btn-minus').click(function() {
            var jumlah = parseInt($('#jumlah').val());
            if (isNaN(jumlah)) jumlah = 1; // Jika jumlah tidak valid, setel ke 1
            if (jumlah > 1) { // Pastikan tidak kurang dari 1
                $('#jumlah').val(jumlah - 1); // Kurangi jumlah barang
                updateTotal(); // Perbarui total harga
            }
        });
    });
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/slick/slick.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>