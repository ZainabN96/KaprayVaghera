<?php
require('connection.php');
require('functions.php');
require('add_to_cart.php');

?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact | Kapray Vaghera</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/iconbg.ico">

    <!-- Fonts
        ============================================ -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <!-- CSS  -->

    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- owl.theme CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- owl.transitions CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.transitions.css">

    <!-- font-awesome.min CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- font-icon CSS
        ============================================ -->
    <link rel="stylesheet" href="fonts/font-icon.css">

    <!-- jquery-ui CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- mobile menu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- main CSS
        ============================================ -->
     <link rel="stylesheet" href="css/main.css"> 

    <!-- style CSS  
        ============================================ -->
    <link rel="stylesheet" href="style.css"> 

    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Latest compiled and minified CSS -->
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="js/vendor/fontawesome-free/css/all.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="js/vendor/animate/animate.min.css"> -->

    <!-- Plugins CSS File -->
    <!-- <link rel="stylesheet" type="text/css" href="js/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="js/vendor/owl-carousel/owl.carousel.min.css"> -->

    <!-- Main CSS File -->
   <link rel="stylesheet" type="text/css" href="css/style.min.css"> 

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>




<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>
		<!-- contact-details start -->
		<main class="main">
            <!-- <div class="page-header" style="background-image: url(images/page-header.jpg)">
                <h1 class="page-title">Get in touch</h1>
            </div> -->
            <div class="page-content mt-10 pt-10">
                <section class="contact-section mt-5 pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-xs-5 ls-m pt-3">
                                <h2 class="font-weight-bold text-uppercase ls-m mb-2">Contact us</h2>
                                <!-- <p>Looking for help? Fill the form and start a new adventure.</p> -->

                                <h4 class="mb-1 text-uppercase">Headquarters</h4>
                                <p>25 Main Market Rd, Gulberg 2, Lahore, Punjab</p>

                                <h4 class="mb-1 text-uppercase">Phone</h4>
                                <p><a href="tel:#">0123456789</a></p>

                                <h4 class="mb-1 text-uppercase">Support</h4>
                                <p>
                                    <a href="#">support@your-domain.com</a><br>
                                    <a href="#">help@your-domain.com</a><br>
                                  
                                </p>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-7">
                                <form class="ml-lg-2 pt-8 pb-10 pl-4 pr-4 pl-lg-6 pr-lg-6 grey-section" action="#">
                                    <h3 class="ls-m mb-1">Let’s Connect</h3>
                                    <p class="text-grey">Your email addres will not be published. Required fields are
                                        marked *</p>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <input class="form-control" type="text" placeholder="Name *" required>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <input class="form-control" type="email" placeholder="Email *" required>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <textarea class="form-control" required
                                                placeholder="Your Message *"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-md btn-primary mb-2">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Section-->

                <!-- <section class="store-section pt-10 pb-10">
                    <div class="container">
                        <h2 class="title mt-2">Our Store</h2>
                        <div class="row cols-sm-12 cols-lg-12">
                            <div class="store">
                                <figure>
                                    <img src="img/kpray stor.jpg" alt="store" width="180" height="140">
                                    <h4 class="overlay-visible">Lahore</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@newyorkdonaldstore.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fa fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fa fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fa fa-linkedin"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div> -->
                            <!-- <div class="store">
                                <figure>
                                    <img src="images/subpages/store-2.jpg" alt="store" width="280" height="280">
                                    <h4 class="overlay-visible">London</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@londondonaldstore.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div> -->
                            <!-- <div class="store">
                                <figure>
                                    <img src="images/subpages/store-3.jpg" alt="store" width="280" height="280">
                                    <h4 class="overlay-visible">Oslo</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@oslodonaldstore.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div> -->
                            <!-- <div class="store">
                                <figure>
                                    <img src="images/subpages/store-4.jpg" alt="store" width="280" height="280">
                                    <h4 class="overlay-visible">Stockholm</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@stockholmdonaldstore.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div> -->
                        <!-- </div>
                    </div>
                </section> -->
                <!-- End Store Section -->

              
            </div>
        </main>
        <!-- End Main -->
	  <!-- FOOTER START -->
	  <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>