<?php
require ('connection.php');
require ('functions.php');
require ('add_to_cart.php');

if (!isset($_SESSION['USER_LOGIN'])) {
    ?>
    <script>
        window.location.href = 'index.php';
    </script>
    <?php
}
$order_id = get_safe_value($con, $_GET['id']);

$coupon_details = mysqli_fetch_assoc(mysqli_query($con, "select coupon_value from `order` where id='$order_id'"));
$coupon_value = $coupon_details['coupon_value'];
if ($coupon_value == '') {
    $coupon_value = 0;
}
?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wishlist | Kapray Vaghera</title>
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

    <!-- Style CSS
        ============================================ -->
    <!-- <link rel="stylesheet" href="css/style.min.css"> -->

    <!-- Style min CSS
        ============================================ -->
    <link rel="stylesheet" href="css/style.mins.css">

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

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>
    <!-- wishlist-area-start -->
    <!-- <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__wrap"  style="height: 150px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Thank You</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="wishlist-area ptb--100 bg__white mt-5">

        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
                    <div class="wishlist-content mt-5">
                        <form action="#">
                            <div class="wishlist-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Product Name</th>
                                            <th class="product-thumbnail">Product Image</th>
                                            <th class="product-name">Qty</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-price">Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $uid = $_SESSION['USER_ID'];
                                        $res = mysqli_query($con, "select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");
                                        $total_price = 0;
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            $total_price = $total_price + ($row['qty'] * $row['price']);
                                            ?>
                                            <tr>
                                                <td class="product-name">
                                                    <?php echo $row['name'] ?>
                                                </td>
                                                <td class="product-name"> <img
                                                        src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>"></td>
                                                <td class="product-name">
                                                    <?php echo $row['qty'] ?>
                                                </td>
                                                <td class="product-name">
                                                    <?php echo $row['price'] ?>
                                                </td>
                                                <td class="product-name">
                                                    <?php echo $row['qty'] * $row['price'] ?>
                                                </td>

                                            </tr>
                                        <?php }
                                        if ($coupon_value != '') {
                                            ?>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="product-name">Coupon Value</td>
                                                <td class="product-name">
                                                    <?php echo $coupon_value ?>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="product-name">Total Price</td>
                                            <td class="product-name">
                                                <?php
                                                echo $total_price - $coupon_value;
                                                ?>
                                            </td>

                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>


</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>