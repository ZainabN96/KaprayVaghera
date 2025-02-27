<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Search | Kapray Vaghera';
include 'includes/header2.php';

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
    <?php include 'includes/navbar2.php' ?>
    <!-- contact-details start -->
    <!-- <div class="body__overlay"></div> -->

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area mt-3">
        <div class="ht__bradcaump__wrap mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <a href="index.php">Home</a>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">Search</span>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">
                                    <?php echo $str ?>
                                </span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <section class="htc__product__grid bg__white ptb--100">
        <div class="container-fluid">
            <div class="row">
                <?php if (count($get_product) > 0) { ?>
                    <?php foreach ($get_product as $list) { ?>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="single-product slider-item">
                                <div class="product-img">
                                    <a href="product.php?id=<?php echo $list['id'] ?>">
                                        <img class="primary-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="<?php echo $list['name'] ?>" />
                                        <img class="secondary-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="<?php echo $list['name'] ?>" />
                                    </a>
                                    <div class="actions">
                                        <div class="add-to-links">
                                            <!-- <div class="add-to-wishlist">
                                                <a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div> -->
                                            <div class="add-to-wishlist text-black">
                                                <a href="product.php?id=<?php echo $list['id'] ?>">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="product.php?id=<?php echo $list['id'] ?>">
                                                    <i class="icon-bag"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name">
                                        <a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['short_desc']?></a>
                                    </h2>
                                    <p>
                                        <?php echo $list['name'] ?><br>
                                        <span class="new-price">PKR <?php echo $list['price'] ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else {
                    echo '<h2 class="notfound"style="">Product Not Found.</h2> <br> 
                          <p class="noreturn">  Your search returned no results.</p>
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