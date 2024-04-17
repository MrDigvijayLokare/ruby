
<?php

try {
    $db = new mysqli("localhost", "root", "", "reglog");
    if ($db->connect_errno) {
        throw new Exception("Failed to connect to MySQL: " . $db->connect_error);
    }
} catch (Exception $exc) {
    echo $exc->getMessage();
}

if (isset($_POST['name']) && isset($_POST['last_name']) && isset($_POST['mobilenumber']) && isset($_POST['emailaddress']) && isset($_POST['state']) && isset($_POST['district']) && isset($_POST['city']) && isset($_POST['street']) && isset($_POST['pincode'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $mobilenumber = $_POST['mobilenumber'];
    $emailaddress = $_POST['emailaddress'];
    $state = $_POST['state']; // Corrected variable name
    $district = $_POST['district'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $pincode = $_POST['pincode'];

    $is_insert = $db->query("INSERT INTO `address`(`name`, `last_name`, `mobilenumber`, `emailaddress`, `state`, `district`,`city`, `street`, `pincode`) VALUES ('$name', '$last_name', '$mobilenumber', '$emailaddress', '$state', '$district','city', '$street', '$pincode')");

    if ($is_insert == TRUE) {
        echo '<script>alert("Account Created")</script>'; 
       
        exit();
    }
}


?>


<?php
require 'config.php';

// Start session
session_start();

if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    
    // Check if query was successful
    if($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        // Handle error if query fails
        echo "Error: " . mysqli_error($conn);
        exit(); // Stop further execution
    }
}
else{
    // Redirect to login page if session id is empty
    header("Location: login.php");
    exit(); // Stop further execution
}
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Dashboard :: Ruby - Jewelry Store e-Commerce Bootstrap 4 Template</title>

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

                            <li class="dropdown-show"><a href="">Category</a>
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
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login-register.php" class="active">Dashboard</a></li>
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
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>


                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>

                               

                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Create Account</a>

                                <!-- <a href="login-register.php"><i class="fa fa-sign-out"></i> Logout</a> -->

                                <?php if(isset($row["name"])) { ?>
        <a href="logout.php">Logout </a>
    <?php } else { ?>
        <a href="logout.php">Logout</a>
    <?php } ?>
                                

                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 mt-5 mt-lg-0">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account</h3>

                                        <div class="welcome">
                                            <p> Hello    <strong>   <?php echo $row["name"]; ?> ! </strong> </p>
                                         <hr>
                                         <p> Usernamre  :  <strong>   <?php echo $row["username"]; ?> ! </strong> </p>
                                         <hr>
                                         <p> Email  :  <strong>   <?php echo $row["email"]; ?> ! </strong> </p>

                                            
                                        </div>
<hr>
                                  <legend>Address</legend>
                                        <address>
                                            <p><strong> aaaaa Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>

                                        <a href="#account-info" data-toggle="tab" class="btn-add-to-cart d-inline-block"><i class="fa fa-edit"></i>
                                            Edit Address</a>
                                        
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Pending</td>
                                                    <td>&#x20B9;3000</td>
                                                    <td><a href="cart.php" class="btn-add-to-cart">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>July 22, 2018</td>
                                                    <td>Approved</td>
                                                    <td>&#x20B9;200</td>
                                                    <td><a href="cart.php" class="btn-add-to-cart">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>June 12, 2017</td>
                                                    <td>On Hold</td>
                                                    <td>&#x20B9;990</td>
                                                    <td><a href="cart.php" class="btn-add-to-cart">View</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->


                        

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                              

                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Create Account</h3>

                                        <div class="account-details-form">
                                            <form action="" method="post" action="" >
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">First Name</label>
                                                            <input type="text" id="first-name" name="name"
                                                                   placeholder="First Name" ></input>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Last Name</label>
                                                            <input type="text" id="last-name" placeholder="Last Name" name="last_name" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Mobile Number</label>
                                                    <input type="text" id="display-name" placeholder="Mobile Number" name="mobilenumber" />
                                                </div>

                                                <div class="single-input-item">
                                                    <label for="email" class="required">Email Addres</label>
                                                    <input type="email" id="email" placeholder="Email Address" name="emailaddress"/>
                                                </div>

                                                <fieldset>
                                                    <legend>`Address</legend>
                                                    <div class="single-input-item">
                                                        <label  class="required">state</label>
                                                        <input type="text" id="state"
                                                               placeholder="state Name" name="state" />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label  class="required">District </label>
                                                        <input type="text" id="District"
                                                               placeholder="District Name" name="district" />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label  class="required">City</label>
                                                        <input type="text" id="City"
                                                               placeholder="City Name" name="city" />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label  class="required">street</label>
                                                        <input type="text" id="street"
                                                               placeholder="street Address" name="street" />
                                                    </div>
                                                
                                                    <div class="single-input-item">
                                                        <label  class="required">Pincode</label>
                                                        <input type="number" id="Pincode"
                                                               placeholder="PinCode" name="pincode" />
                                                    </div>
                                                
                                                </fieldset>

                                                <div class="single-input-item">
                                                    <button class="btn-login btn-add-to-cart "  type="submit" name="submit" >Create Account</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>
                </div>
                <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Footer Area Start -->
<footer id="footer-area">
    <!-- Footer Call to Action Start -->
    <div class="footer-callto-action">
        <div class="ruby-container">
            <div class="callto-action-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/air-plane.png" alt="WorldWide Shipping"/>
                            </figure>
                            <div class="callto-info">
                                <h2>Free Shipping Worldwide</h2>
                                <p>On order over &#x20B9;150 - 7 days a week</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/support.png" alt="Support"/>
                            </figure>
                            <div class="callto-info">
                                <h2>24/7 CUSTOMER SERVICE</h2>
                                <p>Call us 24/7 at 000 - 123 - 456k</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/money-back.png" alt="Money Back"/>
                            </figure>
                            <div class="callto-info">
                                <h2>MONEY BACK Guarantee!</h2>
                                <p>Send within 30 days</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/cog.png" alt="Guide"/>
                            </figure>
                            <div class="callto-info">
                                <h2>SHOPPING GUIDE</h2>
                                <p>Quis Eum Iure Reprehenderit</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Call to Action End -->

    <!-- Footer Follow Up Area Start -->
    <div class="footer-followup-area">
        <div class="ruby-container">
            <div class="followup-wrapper">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="follow-content-wrap">
                            <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="logo"/></a>
                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</p>

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
                        <p><a target="_blank" href="https://www.templatespoint.net/">Templates Point</a></p>
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
<script src="assets/js/plugins.js"></script>

<!--=== Active Js ===-->
<script src="assets/js/active.js"></script>
</body>

</html>