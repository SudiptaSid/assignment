<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/favicon.png">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>An Online Ordering System</title>
</head>
<body>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 left-sec">
                    <p>FREE SHIPING FOR ORDERS OVER $50</p>
                </div>
                <div class="col-md-6 right-sec">
                    <ul class="social-profile">
                        <li>
                            <a href="https://facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/" target="_blank">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area" id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                   aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="others-option">
                        <a href="appointment.html" class="btn btn-one">
                            <i class="ri-shopping-cart-2-line"></i>Cart
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="index.php" class="logo">
                <img src="images/logo.png" alt="logo">
            </a>
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="menu-list">
                <li>
                    <a href="index.php" class="active">Home</a>
                </li>
                <li>
                    <a href="about.php">About Us</a>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
            </ul>
            <ul class="social-profile">
                <li><a href="https://www.fb.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                <li><a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a></li>
            </ul>
            <div class="others-option">
                <a href="cart.php" class="btn btn-one">
                    <i class="ri-shopping-cart-2-line"></i> Cart
                </a>
            </div>
        </div>
    </div>