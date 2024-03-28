<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Search | Kapray Vaghera';
include 'includes/header.php';

$str = mysqli_real_escape_string($con, $_GET['str']);
if ($str != '') {
    $get_product = get_product($con, '', '', '', $str);
} else {
    ?>
    <script>
        window.location.href = 'index.php';
    </script>
    <?php
}
?>

<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>
    <!-- contact-details start -->
    <!-- <div class="body__overlay"></div> -->

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__wrap" style="height: 150px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <!-- <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.php">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <span class="breadcrumb-item active">Search</span>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <span class="breadcrumb-item active">
                                    <?php echo $str ?>
                                </span>
                            </nav> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <section class="htc__product__grid bg__white ptb--100">
        <div class="container">
            <div class="row">
                <?php if (count($get_product) > 0) { ?>
                    <?php foreach ($get_product as $list) { ?>
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="single-product slider-item">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>"
                                            alt="" />
                                        <img class="secondary-image" width="540" height="660"
                                            src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="product.php?id=<?php echo $list['id'] ?>"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="javascript:void(0)"
                                                        onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i
                                                            class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="product.php?id=<?php echo $list['id'] ?>"><i
                                                            class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">PKR
                                            <?php echo $list['price'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">
                                            <?php echo $list['name'] ?>
                                        </a></h2>
                                    <p>
                                        <?php echo $list['short_desc'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php } else {
    echo '<h2 style="font-size: 18px; color: red; font-weight: bold; text-align: center;">Product Not Found.</h2> <br> 
  <p style="font-size: 15px; color: grey; text-align: center;">  Your search returned no results.</p>
    ';
} ?>

            </div>
        </div>
    </section>

    <!-- End Product Grid -->
    <!-- End Banner Area -->
    <input type="hidden" id="qty" value="1" />

    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>

</body>


</html>