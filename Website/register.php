<?php
include "../database/koneksi.php";
session_start();
if (!isset($_SESSION["username"]) || $_SESSION['isLogin'] !== true) {
    echo "<script>
        alert('Login Terlebih dahulu') 
        window.location.href = 'login.php' 
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Shop - Bootstrap Ecommerce Template</title>
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

<body>
    <!-- Top Header Start -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.php">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHP9ZM_x6tAa0zAaiYiHXy7mS4UsNGFs3fVA&s" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <div class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
                            <div class="dropdown-menu">
                                <a href="login.php" class="dropdown-item">Login</a>
                                <a href="register.php" class="dropdown-item">Register</a>
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
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav m-auto">
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <a href="product-list.php" class="nav-item nav-link">Products</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="product-list.php" class="dropdown-item">Product</a>
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
                <li class="breadcrumb-item"><a href="#">User</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Register Start -->
    <div class="login">
        <div class="container">
            <div class="section-header">
                <h3>Daftar</h3>
                <p>
                    Diharapkan Anda Mendaftar untuk melanjutkan transaksi
                </p>
                <div class="col">
                    <div class="register-form">
                        <div class="row">
                            <form action="../database/proses_daftar_user.php" method="POST" enctype="multipart/form-data">
                                <div class="col">
                                    <input hidden class="form-control" type="text" placeholder="First Name" name="id_user" id="id_user">
                                </div>
                                <div class="col">
                                    <label>nama</label>
                                    <input class="form-control" type="text" placeholder="Nama" name="nama_user" id="nama_user">
                                </div>
                                <div class="col">
                                    <label>Username</label>
                                    <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                                </div>
                                <div class="col">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End -->


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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>