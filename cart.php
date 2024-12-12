<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Cart | Kapray Vaghera';
include 'includes/header2.php';
?>

<body>

    <!-- header area start -->
    <?php include 'includes/navbar2.php' ?>

    <!-- cart-main-area start -->
    <div class="cart-main-area pt-100 mt-5 bg__white">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
                    <form action="#">
                        <div class="table-content table-responsive mt-5">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">products</th>
                                        <th class="product-name">name of products</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $key => $val) {

                                            foreach ($val as $key1 => $val1) {


                                                $resAttr = mysqli_fetch_assoc(mysqli_query($con, "select product_attributes.*,color_master.color,size_master.size from product_attributes 
	left join color_master on product_attributes.color_id=color_master.id and color_master.status=1 
	left join size_master on product_attributes.size_id=size_master.id and size_master.status=1
	where product_attributes.id='$key1'"));


                                                $productArr = get_product($con, '', '', $key, '', '', '', '', $key1);
                                                $pname = $productArr[0]['name'];
                                                // $mrp=$productArr[0]['mrp'];
                                                $price = $productArr[0]['price'];
                                                $image = $productArr[0]['image'];
                                                $qty = $val1['qty'];
                                    ?>
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image ?>" /></a></td>
                                                    <td class="product-name"><a href="#"><?php echo $pname ?></a>
                                                        <?php
                                                        if (isset($resAttr['color']) && $resAttr['color'] != '') {
                                                            echo "<br/>", "Color: " . $resAttr['color'] . '';
                                                        }
                                                        if (isset($resAttr['size']) && $resAttr['size'] != '') {
                                                            echo "<br/>", "Size: " . $resAttr['size'] . '';
                                                        }
                                                        ?>
                                                        <!-- <ul  class="pro__prize">
														<li class="old__prize"><?php echo $mrp ?></li>
														<li><?php echo $price ?></li>
													</ul> -->
                                                    </td>
                                                    <td class="product-price"><span class="amount"><?php echo $price ?></span></td>
                                                    <td class="product-quantity"><input type="number" id="<?php echo $key ?>qty" value="<?php echo $qty ?>" />
                                                        <br /><a href="javascript:void(0)" onclick="manage_cart_update('<?php echo $key ?>','update','<?php echo $resAttr['size_id'] ?>','<?php echo $resAttr['color_id'] ?>')">update</a>
                                                    </td>
                                                    <td class="product-subtotal"><?php echo $qty * $price ?></td>
                                                    <td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart_update('<?php echo $key ?>','remove','<?php echo $resAttr['size_id'] ?>','<?php echo $resAttr['color_id'] ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                </tr>
                                    <?php }
                                        }
                                    } ?>
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
    <input type="hidden" id="sid">
    <input type="hidden" id="cid">




    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>


</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>