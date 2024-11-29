<?php
// require ('connection.php');
// require ('functions.php');
// require ('add_to_cart.php');
include 'includes/header2.php';

$wishlist_count = 0;
$cat_res = mysqli_query($con, "select * from categories where status=1 order by categories asc");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr[] = $row;
}

$obj = new add_to_cart();
$totalProduct = $obj->totalProduct();

if (isset($_SESSION['USER_LOGIN'])) {
    $uid = $_SESSION['USER_ID'];

    if (isset($_GET['wishlist_id'])) {
        $wid = get_safe_value($con, $_GET['wishlist_id']);
        mysqli_query($con, "delete from wishlist where id='$wid' and user_id='$uid'");
    }

    $wishlist_count = mysqli_num_rows(mysqli_query($con, "select product.name,product.image,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}


if (!isset($_SESSION['USER_LOGIN'])) {
?>
    <script>
        window.location.href = 'index.php';
    </script>
<?php
}
$uid = $_SESSION['USER_ID'];

$res = mysqli_query($con, "select product.name,product.image,product_attributes.price,product_attributes.mrp,product.id as pid,wishlist.id from product,wishlist,product_attributes where wishlist.product_id=product.id and wishlist.user_id='$uid' and product_attributes.product_id=product.id group by product_attributes.product_id");

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

    <div class="cart-main-area ptb--100 mt-5 bg__white">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
                    <form action="#">
                        <div class="table-content table-responsive mt-5">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">products</th>
                                        <th class="product-name">name of products</th>
                                        <th class="product-name">Remove</th>
                                        <th class="product-name"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img
                                                        src="<?php echo PRODUCT_IMAGE_SITE_PATH . $row['image'] ?>" /></a></td>
                                            <td class="product-name"><a href="#">
                                                    <?php echo $row['name'] ?>
                                                </a>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">
                                                        <?php echo $row['mrp'] ?>
                                                    </li>
                                                    <li>
                                                        <?php echo $row['price'] ?>
                                                    </li>
                                                </ul>
                                            </td>

                                            <td class="product-remove"><a
                                                    href="wishlist.php?wishlist_id=<?php echo $row['id'] ?>"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            <td class="product-remove"><a href="javascript:void(0)"
                                                    style="font-weight: bold;"
                                                    onclick="manage_cart('<?php echo $row['id'] ?>','add')">Add to
                                                    cart</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="buttons-cart--inner">
                                    <div class="buttons-cart">
                                        <a href="<?php echo SITE_PATH ?>index.php">Continue Shopping</a>
                                    </div>
                                    <div class="buttons-cart checkout--btn">
                                        <a href="<?php echo SITE_PATH ?>checkout.php">checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <input type="hidden" id="qty" value="1" />

    <script>
        // function showMultipleImage(im) {
        // 	jQuery('#img-tab-1').html("<img src='" + im + "' data-origin='" + im + "'/>");
        // 	jQuery('.imageZoom').imgZoom();
        // }
        let is_color = '<?php echo $is_color ?>';
        let is_size = '<?php echo $is_size ?>';
        let pid = '<?php echo $product_id ?>';
    </script>
    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>


</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>