
<?php

try {
    $db = new mysqli("localhost", "root", "", "my_dummy_db");
    if ($db->connect_errno) {
        throw new Exception("Failed to connect to MySQL: " . $db->connect_error);
    }
} catch (Exception $exc) {
    echo $exc->getMessage();
}

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $is_insert = $db->query("INSERT INTO `democontact`(`first_name`, `last_name`, `email`, `subject`, `message`) VALUES ('$first_name', '$last_name', '$email', '$subject', '$message')");

    if ($is_insert == TRUE) {
        echo "<h2>Thanks, Your Request Submitted.</h2>";
        exit();
    }
}

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Contact :: Ruby - Jewelry Store e-Commerce Bootstrap 4 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i"/>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--== Header Area Start ==-->
<header id="header-area" class="header__3">
    <div class="ruby-container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-3 col-lg-1 col-xl-2 m-auto">
                <a href="index.php" class="logo-area">
                    <img src="assets/img/logo-black.png" alt="Logo" class="img-fluid"/>
                </a>
            </div>
            <!-- Logo Area End -->

            <!-- Navigation Area Start -->
            <div class="col-3 col-lg-9 col-xl-8 m-auto">
                    <div class="main-menu-wrap">
                        <nav id="mainmenu">
                            <ul>
                                <li class=""><a href="index.php">Home</a>

                                </li>
                                <li class="dropdown-show"><a href="#">jewellery type</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <!-- <li class="mega-menu-item"><a href="shop.php" class="mega-item-title">Shop
                                        Layout</a> -->
                                        <ul>
                                            <li><a href="Bridal.php">Bridal jewellery</a></li>
                                            <li><a href="gemstone.php">gemstone jewellery</a></li>
                                            <li><a href="Kundan.php">Kundan jewellery</a></li>
                                            <li><a href="Filigree.php">Filigree jewellery</a></li>
                                            <li><a href="Temple.php">Temple jewellery</a></li>
                                            <li><a href="Meenakari.php">Meenakari jewellery</a></li>
                                            <li><a href="Polki.php">Polki jewellery</a></li>
                                            <li><a href="Bead.php">Bead jewellery</a></li>


                                        </ul>
                                </li>



                            </ul>
                            </li>

                            <li class="dropdown-show"><a href="#">Category</a>
                                <ul class="mega-menu-wrap dropdown-nav">
                                    <li class="mega-menu-item"><a href="shop-left-full-wide.php"
                                            class="mega-item-title">Gold</a>
                                        <ul>
                                            <li><a href="gold-Earring.php">Earring</a></li>
                                            <li><a href="gold-Brooch.php">Brooch</a></li>
                                            <li><a href="gold-Necklaces.php">Necklaces</a></li>
                                            <li><a href="gold-Nosepin.php">Nosepin</a></li>
                                            <li><a href="gold-Bangles.php">Bangles</a></li>
                                            <li><a href="gold-Rings.php">Rings</a></li>
                                            <li><a href="gold-Anklet.php">Anklet</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item"><a href="shop-left-full-wide.php"
                                            class="mega-item-title">dimond</a>
                                        <ul>
                                            <li><a href="diamond-Earring.php">Earring</a></li>
                                            <li><a href="diamond-Brooch.php">Brooch</a></li>
                                            <li><a href="diamond-Necklaces.php">Necklaces</a></li>
                                            <li><a href="diamond-Nosepin.php">Nosepin</a></li>
                                            <li><a href="diamond-Bangles.php">Bangles</a></li>
                                            <li><a href="diamond-Rings.php">Rings</a></li>
                                            <li><a href="diamond-Anklet.php">Anklet</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item"><a href="shop-left-full-wide.php"
                                            class="mega-item-title">Pearl </a>
                                        <ul>
                                            <li><a href="pearl-Earring.php">Earring</a></li>
                                            <li><a href="pearl-Brooch.php">Brooch</a></li>
                                            <li><a href="pearl-Necklaces.php">Necklaces</a></li>
                                            <li><a href="pearl-Nosepin.php">Nosepin</a></li>
                                            <li><a href="pearl-Bangles.php">Bangles</a></li>
                                            <li><a href="pearl-Rings.php">Rings</a></li>
                                            <li><a href="pearl-Anklet.php">Anklet</a></li>
                                        </ul>
                                    </li>

                                    <li class="mega-menu-item"><a href="shop-left-full-wide.php"
                                            class="mega-item-title">Silver</a>
                                        <ul>
                                            <li><a href="silver-Earring.php">Earring</a></li>
                                            <li><a href="silver-Brooch.php">Brooch</a></li>
                                            <li><a href="silver-Necklaces.php">Necklaces</a></li>
                                            <li><a href="silver-Nosepin.php">Nosepin</a></li>
                                            <li><a href="silver-Bangles.php">Bangles</a></li>
                                            <li><a href="silver-Rings.php">Rings</a></li>
                                            <li><a href="silver-Anklet.php">Anklet</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item"><a href="shop-left-full-wide.php"
                                            class="mega-item-title">Platinum</a>
                                        <ul>
                                            <li><a href="platinum-Earring.php">Earring</a></li>
                                            <li><a href="platinum-Brooch.php">Brooch</a></li>
                                            <li><a href="platinum-Necklaces.php">Necklaces</a></li>
                                            <li><a href="platinum-Nosepin.php">Nosepin</a></li>
                                            <li><a href="platinum-Bangles.php">Bangles</a></li>
                                            <li><a href="platinum-Rings.php">Rings</a></li>
                                            <li><a href="platinum-Anklet.php">Anklet</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item"><a href="shop-left-full-wide.php"
                                            class="mega-item-title">Titanium</a>
                                        <ul>
                                            <li><a href="titanium-Earring.php">Earring</a></li>
                                            <li><a href="titanium-Brooch.php">Brooch</a></li>
                                            <li><a href="titanium-Necklaces.php">Necklaces</a></li>
                                            <li><a href="titanium-Nosepin.php">Nosepin</a></li>
                                            <li><a href="titanium-Bangles.php">Bangles</a></li>
                                            <li><a href="titanium-Rings.php">Rings</a></li>
                                            <li><a href="titanium-Anklet.php">Anklet</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-show"><a href="#">Pages</a>
                                <ul class="dropdown-nav">
                                    <li><a href="cart.php">Shopping Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="login-register.php">Login & Register</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            <!-- Navigation Area End -->

            <!-- Header Right Meta Start -->
            <div class="col-6 col-lg-2 m-auto">
                <div class="header-right-meta text-right">
                    <ul>
                        <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                        
                        <li class="shop-cart"><a href="#"><i class="fa fa-shopping-bag"></i> <span
                                class="count">3</span></a>
                            <div class="mini-cart">
                                <div class="mini-cart-body">
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="assets/img/product-1.jpg"
                                                             alt="Products"/></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">3</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">&#x20B9;77.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="assets/img/product-2.jpg"
                                                             alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">2</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">&#x20B9;6.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="assets/img/product-3.jpg"
                                                             alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">1</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">&#x20B9;116.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                                <div class="mini-cart-footer">
                                    <a href="checkout.php" class="btn-add-to-cart">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Right Meta End -->
        </div>
    </div>
</header>
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
<div class="body-popup-modal-area">
    <span class="modal-close"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
    <div class="modal-container d-flex">
        <div class="search-box-area">
            <div class="search-box-form">
                <form action="#" method="post">
                    <input type="search" placeholder="type keyword and hit enter"/>
                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== Search Box Area End ==-->

<!--== Page Title Area Start ==-->
<div id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-title-content">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login-register.php" class="active">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <!-- Contact Page Content Start -->
            <div class="col-lg-12">
                <!-- Contact Method Start -->
                <div class="contact-method-wrap">
                    <div class="row">
                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-map-marker"></i></span>
                                <div class="method-info">
                                    <h3>Street Address</h3>
                                    <p>Address : Cocsit Collage Latur<br> Latur City,  Maharashtra, IN .</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-phone"></i></span>
                                <div class="method-info">
                                    <h3>Phone Number</h3>
                                    <a href="tel:9359632844">+91 9359632844</a>
                                    <a href="tel:6366726254">+91 6366726254</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-envelope-open-o"></i></span>
                                <div class="method-info">
                                    <h3>Number Fax</h3>
                                    <p>+91 9523180712</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-envelope"></i></span>
                                <div class="method-info">
                                    <h3>Email Address</h3>
                                    <a href="mailto:digvijaylokare@gmail.com">digvijaylokare@gmail.com</a>
                                    <a href="mailto:amoldlakmaje@gmail.com">amoldlakmaje@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->
                    </div>
                </div>
                <!-- Contact Method End -->
            </div>
            <!-- Contact Page Content End -->
        </div>

        <div class="row">
            <!-- Contact Form Start -->
            <div class="col-lg-9 m-auto">
                <div class="contact-form-wrap">
                    <h2>Request a Quote</h2>

                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="first_name" placeholder="First Name *" required/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="last_name" placeholder="Last Name *" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="email" name="email" placeholder="Email Address *" required/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="subject" placeholder="Subject *" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-input-item">
                                    <textarea name="message" id="message" cols="30" rows="6"
                                              placeholder="Message"></textarea>
                                </div>

                                <div class="single-input-item text-center">
                                    <button type="submit" name="submit" class="btn-add-to-cart">Send Meassage</button>
                                </div>

                                <!-- Form Notification -->
                                <div class="form-messege"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Contact Form End -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Footer Area Start -->
<footer id="footer-area">
   

    <!-- Footer Follow Up Area Start -->
    <div class="footer-followup-area">
        <div class="ruby-container">
            <div class="followup-wrapper">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="follow-content-wrap">
                            <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="logo"/></a>
                            <p>The Best jewellry Under One Roof</p>

                            <div class="footer-social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                            </div>

                            <a href="#"><img src="assets/img/payment.png" alt="Payment Method"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Follow Up Area End -->

    <!-- Footer Image Gallery Area Start -->
    <div class="footer-image-gallery">
        <div class="ruby-container">
            <div class="image-gallery-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="imgage-gallery-carousel owl-carousel">
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/gallery-img-1.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/gallery-img-2.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/gallery-img-3.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/gallery-img-4.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/gallery-img-3.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/gallery-img-2.jpg" alt="Gallery"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Image Gallery Area End -->

    <!-- Copyright Area Start -->
    <div class="copyright-area">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p> © JWELLERY SHOP MANAGEMENT SYSTEM.com - All Rights Reserved. </p>
               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright Area End -->

</footer>
<!-- Footer Area End -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/vendor/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!--=== Plugins Min Js ===-->
<!--=== Ajax Mail Js ===-->
<script src="assets/js/ajax-mail.js"></script>
<!--=== Plugins Min Js ===-->
<script src="assets/js/plugins.js"></script>

<!--=== Active Js ===-->
<script src="assets/js/active.js"></script>
</body>

</html>