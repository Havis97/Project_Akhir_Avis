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

<body>
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


    <!-- Main Slider Start -->
    <div class="home-slider">
        <div class="main-slider">
            <?php
            $query = "SELECT gambar FROM produk ORDER BY id_kategori ASC LIMIT 4";
            $result = $koneksi->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="main-slider-item">';
                    echo '<img src="../Alumni/assets/' . $row['gambar'] . '"style="width:700px"></div>';
                }
            } ?>
        </div>
    </div>
    <!-- Main Slider End -->


    <!-- Feature Start-->
    <div class="feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-shield"></i>
                        <h2>Terpecaya</h2>
                        <p>
                            Situs Jual Beli Terpecaya dengan jumlah pengguna yang banyak
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-shopping-bag"></i>
                        <h2>Kualitas</h2>
                        <p>
                            Menghadirkan Produk berkualitas
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-truck"></i>
                        <h2>Pengiriman</h2>
                        <p>
                            Jangkauan Luas ke seluruh indonesia
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-phone"></i>
                        <h2>Call Center</h2>
                        <p>
                            Siap melayani anda 24 Jam
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->

    <!-- Featured Product Start -->
    <div class="featured-product">
        <div class="container">
            <div class="section-header">
                <h3>Produk Baru</h3>
                <p>
                    Produk yang terdaftar saat ini
                </p>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                <?php
                $sql = "SELECT * FROM produk Limit 5";
                $all = $koneksi->query($sql);
                while ($row = mysqli_fetch_assoc($all)) {
                ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-detail.php?id_produk=<?php echo $row['id_produk'] ?>">
                                    <img src="../Alumni/assets/<?php echo $row['gambar']; ?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="#"><?php echo $row['nama_produk'] ?></a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price"><?php echo number_format($row['harga']) ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Featured Product End -->


    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container">
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Recent Product Start -->
    <div class="recent-product">
        <div class="container">
            <div class="section-header">
                <h3>Produk Saat ini</h3>
                <p>
                    Yang Aktif Saat ini
                </p>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                <?php
                $sql = "SELECT * FROM produk LIMIT 6";
                $all = $koneksi->query($sql);
                while ($row = mysqli_fetch_assoc($all)) {
                ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-detail.php?id_produk=<?php echo $row['id_produk'] ?>">
                                    <img src="../Alumni/assets/<?php echo $row['gambar'] ?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="#"><?php echo $row['nama_produk'] ?></a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price"><?php echo number_format($row['harga']) ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-image">
                            <a href="Website/product-detail.php">
                                <img src="Website/img/product-4.png" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="title"><a href="#">Phasellus Gravida</a></div>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="price">$22 <span>$25</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-image">
                            <a href="Website/product-detail.php">
                                <img src="Website/img/product-6.png" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="title"><a href="#">Phasellus Gravida</a></div>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="price">$22 <span>$25</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-image">
                            <a href="Website/product-detail.php">
                                <img src="Website/img/product-8.png" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="title"><a href="#">Phasellus Gravida</a></div>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="price">$22 <span>$25</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-image">
                            <a href="Website/product-detail.php">
                                <img src="Website/img/product-9.png" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="title"><a href="#">Phasellus Gravida</a></div>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="price">$22 <span>$25</span></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Recent Product End -->


    <!-- Brand Start -->
    <div class="brand">
        <div class="container">
            <div class="section-header">
                <h3>BPVP E-Commerce</h3>
                <p>
                    Toko Online dari semua alumni BPVP Padang
                </p>
            </div>
            <div class="brand-slider">
                <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


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