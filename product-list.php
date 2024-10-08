<?php
include "database/koneksi.php";
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
    <link href="Website/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Website/lib/slick/slick.css" rel="stylesheet">
    <link href="Website/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Website/css/style.css" rel="stylesheet">
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
            </div>
            <div class="col-md-3">
                <div class="user">
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
                        <div class="dropdown-menu">
                            <a href="Website/login.php" class="dropdown-item">Login</a>
                            <a href="Website/register.php" class="dropdown-item">Register</a>
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
                    <a href="Dashboard/index.php" class="nav-item nav-link">Admin</a>
                    <a href="Alumni/index.php" class="nav-item nav-link">Alumni</a>
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


<!-- Product List Start -->
<div class="product-view">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                        </div>
                    </div>
                    <?php
                    $barang = array();
                    $produk = mysqli_query($koneksi, "SELECT * FROM produk LIMIT 9");
                    while ($data = $produk->fetch_assoc()) {
                        $barang[] = $data;
                    }
                    ?>
                    <?php foreach ($barang as $key => $value): ?>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail.php?id_produk=<?= $value['id_produk'] ?>">
                                        <img src="Alumni/assets/<?php echo $value['gambar']; ?>">
                                    </a>
                                    <div class="product-action">
                                        <a href=""><i class="fa fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="title"><a href="#"><?php echo $value['nama_produk']; ?></a></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="harga"><?php echo number_format($value['harga']); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product List End -->
    <br>

    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h1>BPVP E-Commerce</h1>
                        <p>
                            Solusi Semua Masalah anda ada disini
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                </div>

                <div class="col-lg-3 col-md-6">
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
                        <img src="Website/img/payment-method.png" alt="Payment Method" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-security">
                        <p>Secured By:</p>
                        <img src="Website/img/godaddy.svg" alt="Payment Security" />
                        <img src="Website/img/norton.svg" alt="Payment Security" />
                        <img src="Website/img/ssl.svg" alt="Payment Security" />
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="Website/lib/easing/easing.min.js"></script>
    <script src="Website/lib/slick/slick.min.js"></script>


    <!-- Template Javascript -->
    <script src="Website/js/main.js"></script>
    </body>

</html>