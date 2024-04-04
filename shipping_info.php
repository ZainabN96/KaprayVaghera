<?php
require ('connection.php');
require ('functions.php');
require ('add_to_cart.php');

?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shipping Information | Kapray Vaghera</title>
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

    <!-- Latest compiled and minified CSS -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>
    <!-- header area end -->

    <main id="maincontent" class="page-main">
        <div class="columns">
            <div class="column main">
                <div class="shipping_info">
                    <div class="container">
                        <div class="shipping_title">
                            <h1 style="text-align: center;"> <strong> Shipping Information
                                </strong> </h1>
                        </div>
                        <div class="section mt-5">
                            <h2 class="shipping_header">Expected delivery time:</h2>
                            <ul class="shipping_list">
                                <ul>
                                    <li> <span style="text-decoration: underline;"> <strong> Within Pakistan: </strong>
                                        </span> 7-14 working days (Once the order has been confirmed)</li>
                                    <li> <span style="text-decoration: underline;"> <strong> International: </strong>
                                        </span> 10-21 working days (Once the order has been confirmed)</li>
                                </ul>

                            </ul>
                        </div>

                        <div class="section">
                            <h2> <strong style="font-size: 20px;">Address Modifications:</strong> </h2>
                            <p>Once an order is placed (including COD and online paid orders), address modifications
                                are not
                                permissible.</p>
                        </div>

                        <div class="section">
                            <h2> <strong style="font-size: 20px;"> Couriers: </strong> </h2>
                            <ul class="shipping_list">
                                <ul>
                                    <li> <span> <strong> Pakistan: </strong> </span> Call courier, WithRider, Leopards,
                                        TCS, BlueEx,Swyft,MoveX,
                                        M&amp;P. </li>
                                    <li>
                                        <span> <strong> International: </strong> </span> SkyNet, DHL or FedEx

                                    </li>


                                </ul>
                            </ul>

                            <p style="font-size: small;">Please note that we use a variety of courier services, each
                                excelling in specific
                                locations.
                                Orders are
                                intelligently allocated to couriers based on their location-specific proficiency,
                                ensuring
                                optimal
                                delivery expertise.</p>
                        </div>

                        <div class="section">
                            <h2 class="shipping_header">Order Confirmation and Payments:</h2>
                            <p>All orders placed from Monday to Friday take up to 2 working days to confirm. Orders
                                placed
                                on
                                weekends
                                or any gazetted holidays will be sent for processing on the next working day. During
                                rush
                                hours
                                or
                                delays in verification of information, orders can face temporary delays. For cash on
                                delivery
                                orders, we
                                follow the practice of verifying orders with a maximum number of 3 confirmation
                                calls. If
                                left
                                unattended, your order will be cancelled.</p>
                            <p> All our domestic clients will be provided with a tracking ID when the order is
                                dispatched. </p>
                            <p>Orders placed through the online payment system undergo a comprehensive fraud status
                                check.
                                Upon
                                clearance from our payment processor, they proceed to the next stage and in the
                                event of a
                                'failed'
                                fraud status, they are automatically canceled.</p>
                            <p>Payments will be collected from the shipping address for orders placed on Cash On
                                Delivery
                                Method. Once
                                the order is shipped you will receive an email containing the tracking information,
                                be sure
                                to
                                check
                                junk/spam/promotions folder as well.</p>
                        </div>

                        <!-- <div class="section">
                            <h2 class="shipping_header">Shipping and Custom Duties:</h2>
                            <p>International Shipping: For international orders, shipping costs are calculated based
                                on your
                                order's
                                destination, size, and weight. Please note that volumetric weight might be charged
                                depending
                                on
                                your
                                order size. Any custom charges, duties or taxes, if applied by the respective
                                country’s
                                officials will
                                have to be borne by the customer. Please note that we do not offer Cash on Delivery
                                for
                                Orders
                                placed
                                from Outside Pakistan irrespective of the destination location.</p>
                            <p>Free International Shipping Criteria -Retail articles only (RTW, Unstitched, Kids,
                                Footwear):
                            </p>
                            <ul class="shipping_list">
                                <li>For USD Store, Free Shipping for Pakistan and Free International Shipping at
                                    above 300
                                    USD.
                                </li>
                                <li>For UK Store, Free Shipping for Pakistan and Free International Shipping at
                                    above 300
                                    GBP.
                                </li>
                                <li>For EU Store, Free Shipping for Pakistan and Free International Shipping at
                                    above 300
                                    EURO.
                                </li>
                                <li>For GCC Store, Free Shipping for Pakistan and Free International Shipping at
                                    above 1,200
                                    AED.</li>
                                <li>For PK Store, Free Shipping Nationwide</li>
                            </ul>
                            <p>We do not offer free international shipping on couture products.</p>
                            <p>Local Shipping (Within Pakistan): We currently offer FREE shipping and Cash on
                                Delivery
                                method
                                all over
                                Pakistan however for some far-fetched areas pre-payment and self-collection methods
                                might be
                                applied</p>
                        </div> -->

                        <div class="section">
                            <h2 class="shipping_header">Order Cancellation and Modification:</h2>
                            <p>Orders can be canceled and modified upon customer's request any time before they go
                                into the
                                processing
                                stage.</p>
                            <p>Kapray Vaghera reserves the right to cancel orders for the following reasons:</p>
                            <ul class="shipping_list">
                                <ul>
                                    <li>Out of stock items.</li>
                                    <li>Pricing issue</li>
                                    <li>Technical Errors</li>
                                    <li>Declined payment by your authorized payment institution</li>
                                    <li>High return ratio</li>
                                    <li>Non-service areas</li>
                                    <li>Suspicious history etc.</li>

                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>


    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>

</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:16 GMT -->

</html>