<?php
    include 'includes/header2.php';
   
    $title = 'My Order Details';

if (!isset($_SESSION['USER_LOGIN'])) {
?>
    <script>
        window.location.href = 'index.php';
    </script>
<?php
}
$order_id = get_safe_value($con, $_GET['id']);

$coupon_details = mysqli_fetch_assoc(mysqli_query($con, "select coupon_value from `order` where id='$order_id'"));
$coupon_value = $coupon_details['coupon_value'] ?? 0;
?>

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
                        <div class="ht__bradcaump__area">
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
                        </div>
                        <form action="#">
                            <div class="wishlist-table table-responsive">
                            <table class="table">
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
									//$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image,`order`.address,`order`.city,`order`.pincode, `order`.delivery_charges from order_detail,product ,`order` where order_detail.order_id='$order_id' and  order_detail.product_id=product.id GROUP by order_detail.id");
									$res = mysqli_query($con, "SELECT DISTINCT order_detail.id, order_detail.*, product.name, product.image, 
                                                                `order`.address, `order`.city, `order`.pincode, `order`.delivery_charges 
                                                                FROM order_detail 
                                                                JOIN product ON order_detail.product_id = product.id
                                                                JOIN `order` ON order_detail.order_id = `order`.id
                                                                WHERE order_detail.order_id = '$order_id' 
                                                                GROUP BY order_detail.id"
                                                        );

                                    $total_price=0;
                                    $delivery_charges = 0;
									while($row=mysqli_fetch_assoc($res)){
                                        $userInfo=mysqli_fetch_assoc(mysqli_query($con,"select * from `order` where id='$order_id'"));
                        
                                        $address=$userInfo['address'];
                                        $city=$userInfo['city'];
                                        $pincode=$userInfo['pincode'];
                                        
                                        $total_price=$total_price+($row['qty']*$row['price']);
                                        // Store delivery charges from the first row (if available)
                                        if ($delivery_charges == 0) {
                                            $delivery_charges = $row['delivery_charges'] ?: 0; // Set delivery charges to 0 if null
                                        }
									?>
									<tr>
										<td class="product-name"><?php echo $row['name']?></td>
										<td class="product-name"> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"></td>
										<td class="product-name"><?php echo $row['qty']?></td>
										<td class="product-name"><?php echo $row['price']?></td>
										<td class="product-name"><?php echo $row['qty']*$row['price']?></td>
										
									</tr>
									<?php } 
									if($coupon_value!=''){
									?>
									<tr>
										<td colspan="3"></td>
										<td class="product-name">Coupon Value</td>
										<td class="product-name">
										<?php 
										echo $coupon_value."($coupon_code)";
										?></td>
										
									</tr>
									<?php } ?>
									<?php
                                        // Display delivery charges (either from DB or 0 if not available)
                                        echo '<tr>
                                                <td colspan="3"></td>
                                                <td class="product-name">Delivery Charges</td>
                                                <td class="product-name">' . ($delivery_charges ? $delivery_charges : 0) . '</td>
                                            </tr>';
                                    ?>
									<tr>
										<td colspan="3"></td>
										<td class="product-name">Total Price</td>
										<td class="product-name"><?php 
                                            // Ensure all values are integers to avoid type errors
                                                $total_price = intval($total_price);
                                                $delivery_charges = intval($delivery_charges);
                                                $coupon_value = intval($coupon_value);

                                                echo $total_price + $delivery_charges - $coupon_value;
                                            ?>
                                        </td>
										
									</tr>
								</tbody>
							
						</table>
                                <!-- <table>
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
                                        $res = mysqli_query($con, "
                                                                SELECT DISTINCT order_detail.id,
                                                                                order_detail.*, 
                                                                                product.name, 
                                                                                product.image, 
                                                                                `order`.delivery_charges 
                                                                FROM order_detail
                                                                INNER JOIN product ON order_detail.product_id = product.id
                                                                INNER JOIN `order` ON order_detail.order_id = `order`.id
                                                                WHERE order_detail.order_id = '$order_id' 
                                                                AND `order`.user_id = '$uid'
                                                            ");
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
                                            <?php 
                                                if ($row['delivery_charges'] === null) {
                                                    $delivery_charges = 0;
                                                } else {
                                                    $delivery_charges = $row['delivery_charges'];
                                                }
                                                ?>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="product-name">Delivery Charges</td>
                                                <td class="product-name">
                                                    <?php echo $delivery_charges; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="product-name">Total Price</td>
                                            <td class="product-name">
                                                <?php
                                                echo $total_price - $coupon_value; // All variables are now numeric
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->
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
</html>