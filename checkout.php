<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Checkout | Kapray Vaghera';
include 'includes/header.php';

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    ?>
    <script>
        window.location.href = 'index.php';
    </script>
    <?php
}

$cart_total = 0;
$errMsg = "";

$address = '';
$city = '';
$pincode = '';

if (isset($_POST['submit'])) {
    $address = get_safe_value($con, $_POST['address']);
    $city = get_safe_value($con, $_POST['city']);
    $pincode = get_safe_value($con, $_POST['pincode']);
    $payment_type = get_safe_value($con, $_POST['payment_type']);
    $user_id = $_SESSION['USER_ID'];

    foreach ($_SESSION['cart'] as $key => $val) {
        foreach ($val as $key1 => $val1) {
            $resAttr = mysqli_fetch_assoc(mysqli_query($con, "select price from product_attributes where id='$key1'"));
            $price = $resAttr['price'];
            $qty = $val1['qty'];
            $cart_total = $cart_total + ($price * $qty);

        }
    }
    $total_price = $cart_total;
    $payment_status = 'pending';
    if ($payment_type == 'cod') {
        $payment_status = 'success';
    }
    $order_status = '1';
    $added_on = date('Y-m-d h:i:s');

    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

    if (isset($_SESSION['COUPON_ID'])) {
        $coupon_id = $_SESSION['COUPON_ID'];
        $coupon_code = $_SESSION['COUPON_CODE'];
        $coupon_value = $_SESSION['COUPON_VALUE'];
        $total_price = $total_price - $coupon_value;
        unset($_SESSION['COUPON_ID']);
        unset($_SESSION['COUPON_CODE']);
        unset($_SESSION['COUPON_VALUE']);
    } else {
        $coupon_id = '';
        $coupon_code = '';
        $coupon_value = '';
    }

    mysqli_query($con, "insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price,txnid,coupon_id,coupon_code,coupon_value) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price','$txnid','$coupon_id','$coupon_code','$coupon_value')");

    $order_id = mysqli_insert_id($con);

    foreach ($_SESSION['cart'] as $key => $val) {

        foreach ($val as $key1 => $val1) {
            $resAttr = mysqli_fetch_assoc(mysqli_query($con, "select price from product_attributes where id='$key1'"));
            $price = $resAttr['price'];
            $qty = $val1['qty'];

            mysqli_query($con, "insert into `order_detail`(order_id,product_id,product_attr_id,qty,price) values('$order_id','$key','$key1','$qty','$price')");

        }
    }
   
    mysqli_query($con, "INSERT INTO notifications (user_id, message, status) VALUES ('$user_id', 'New order #$order_id has been placed', 'unread')");



    if ($payment_type == 'instamojo') {

        $userArr = mysqli_fetch_assoc(mysqli_query($con, "select * from users where id='$user_id'"));

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array("X-Api-Key:" . INSTAMOJO_KEY, "X-Auth-Token:" . INSTAMOJO_TOKEN)
        );

        $payload = array(
            'purpose' => 'Buy Product',
            'amount' => $total_price,
            'phone' => $userArr['mobile'],
            'buyer_name' => $userArr['name'],
            'redirect_url' => INSTAMOJO_REDIRECT,
            'send_email' => false,
            'send_sms' => false,
            'email' => $userArr['email'],
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);
        if (isset($response->payment_request->id)) {
            unset($_SESSION['cart']);
            $_SESSION['TID'] = $response->payment_request->id;
            mysqli_query($con, "update `order` set txnid='" . $response->payment_request->id . "' where id='" . $order_id . "'");
            ?>
            <script>
                window.location.href = '<?php echo $response->payment_request->longurl ?>';
            </script>
            <?php
        } else {
            if (isset($response->message)) {
                $errMsg .= "<div class='instamojo_error'>";
                foreach ($response->message as $key => $val) {
                    $errMsg .= strtoupper($key) . ' : ' . $val[0] . '<br/>';
                }
                $errMsg .= "</div>";
            } else {
                echo "Something went wrong";
            }
        }
    } else {
        //sentInvoice($con,$order_id);
        ?>
        <script>
            window.location.href = 'thankyou.php';
        </script>
        <?php
    }

}
?>

<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>

    <!-- cart-main-area start -->
    <div class="checkout-wrap ptb--100 mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 mt-5">
                    <?php echo $errMsg ?>
                    <div class="checkout__inner mt-5">
                        <div class="accordion-list">
                            <div class="accordion">

                                <?php
                                $accordion_class = 'accordion__title';
                                if (!isset($_SESSION['USER_LOGIN'])) {
                                    $accordion_class = 'accordion__hide';
                                    ?>
                                    <div class="accordion__title">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                        <form id="login-form" method="post">
                                                            <h5 class="checkout-method__title">Login</h5>
                                                            <div class="single-input">
                                                                <input type="text" name="login_email" id="login_email"
                                                                    placeholder="Your Email*" style="width:100%">
                                                                <span class="field_error" id="login_email_error"></span>
                                                            </div>

                                                            <div class="single-input">
                                                                <input type="password" name="login_password"
                                                                    id="login_password" placeholder="Your Password*"
                                                                    style="width:100%">
                                                                <span class="field_error" id="login_password_error"></span>
                                                            </div>

                                                            <p class="require">* Required fields</p>
                                                            <div class="dark-btn">
                                                                <button type="button" class="btn btn-primary btn-lg"
                                                                    onclick="user_login()">Login</button>
                                                            </div>
                                                            <div class="form-output login_msg">
                                                                <p class="form-messege field_error"></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                        <form action="#">
                                                            <h5 class="checkout-method__title">Register</h5>
                                                            <div class="single-input">
                                                                <input type="text" name="name" id="name"
                                                                    placeholder="Your Name*" style="width:100%">
                                                                <span class="field_error" id="name_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="text" name="email" id="email"
                                                                    placeholder="Your Email*" style="width:100%">
                                                                <span class="field_error" id="email_error"></span>
                                                            </div>

                                                            <div class="single-input">
                                                                <input type="text" name="mobile" id="mobile"
                                                                    placeholder="Your Mobile*" style="width:100%">
                                                                <span class="field_error" id="mobile_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="password" name="password" id="password"
                                                                    placeholder="Your Password*" style="width:100%">
                                                                <span class="field_error" id="password_error"></span>
                                                            </div>
                                                            <div class="dark-btn">
                                                                <button type="button" class="btn btn-primary btn-lg"
                                                                    onclick="user_register()">Register</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else {
                                    $lastOrderDetailsRes = mysqli_query($con, "select address,city,pincode from `order` where user_id='" . $_SESSION['USER_ID'] . "'");

                                    if (mysqli_num_rows($lastOrderDetailsRes) > 0) {
                                        $lastOrderDetailsRow = mysqli_fetch_assoc($lastOrderDetailsRes);
                                        $address = $lastOrderDetailsRow['address'];
                                        $city = $lastOrderDetailsRow['city'];
                                        $pincode = $lastOrderDetailsRow['pincode'];
                                    }

                                }
                                ?>
                                <div class="<?php echo $accordion_class ?>">
                                    Address Information
                                </div>
                                <form method="post">
                                    <div class="accordion__body">
                                        <div class="bilinfo">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <input type="text" name="address" placeholder="Street Address"
                                                            required value="<?php echo $address ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input type="text" name="city" placeholder="City/State" required
                                                            value="<?php echo $city ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <input type="text" name="pincode" placeholder="Post code/ zip"
                                                            required value="<?php echo $pincode ?>">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="<?php echo $accordion_class ?>">
                                        Payment Information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                            <div class="single-method">
                                                <input type="radio" name="payment_type" value="COD" required /> Cash On
                                                Delivery

                                            </div>
                                            <div class="single-method">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6">
                                        <input type="submit" name="submit" class="btn btn-primary btn-lg" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="order-details mt-5">
                        <h5 class="order-details__title">Your Order</h5>
                        <div class="order-details__item">
                            <?php
                            $cart_total = 0;
                            foreach ($_SESSION['cart'] as $key => $val) {
                                //$productArr=get_product($con,'','',$key);
                            
                                //prx($productArr);
                            
                                foreach ($val as $key1 => $val1) {

                                    $resAttr = mysqli_fetch_assoc(mysqli_query($con, "select product_attributes.*,color_master.color,size_master.size from product_attributes 
	left join color_master on product_attributes.color_id=color_master.id and color_master.status=1 
	left join size_master on product_attributes.size_id=size_master.id and size_master.status=1
	where product_attributes.id='$key1'"));

                                    $productArr = get_product($con, '', '', $key, '', '', '', '', $key1);
                                    $pname = $productArr[0]['name'];
                                    $mrp = $productArr[0]['mrp'];
                                    $price = $productArr[0]['price'];
                                    $image = $productArr[0]['image'];
                                    $qty = $val1['qty'];

                                    $cart_total = $cart_total + ($price * $qty);
                                    ?>
                                    <div class="single-item">
                                        <div class="single-item__thumb">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $image ?>" />
                                        </div>
                                        <div class="single-item__content">
                                            <a href="#">
                                                <?php echo $pname ?> *
                                                <?php echo $qty ?>
                                            </a>
                                            <span class="price">
                                                <?php echo $price * $qty ?>
                                            </span>
                                        </div>
                                        <div class="single-item__remove ">
                                            <a href="javascript:void(0)"
                                                onclick="manage_cart_update('<?php echo $key ?>','remove','<?php echo $resAttr['size_id'] ?>','<?php echo $resAttr['color_id'] ?>')"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                        <!-- <div class="ordre-details__total" id="coupon_box">
                                <h5>Coupon Value</h5>
                                <span class="price" id="coupon_price"></span>
                            </div> -->
                        <div class="ordre-details__total">
                            <h5>Order total </h5>
                            <span class="price" id="order_total_price">

                                <?php echo $cart_total ?>
                            </span>
                        </div>

                        <div class="ordre-details__total bilinfo">
                            <input type="textbox" id="coupon_str" class="coupon_style mr5" /> <input type="button"
                                name="submit" class="btn btn-primary btn-lg" value="Apply Coupon"
                                onclick="set_coupon()" />

                        </div>
                        <div id="coupon_result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function set_coupon() {
            var coupon_str = jQuery('#coupon_str').val();
            if (coupon_str != '') {
                jQuery('#coupon_result').html('');
                jQuery.ajax({
                    url: 'set_coupon.php',
                    type: 'post',
                    data: 'coupon_str=' + coupon_str,
                    success: function (result) {
                        var data = jQuery.parseJSON(result);
                        if (data.is_error == 'yes') {
                            jQuery('#coupon_box').hide();
                            jQuery('#coupon_result').html(data.dd);
                            jQuery('#order_total_price').html(data.result);
                        }
                        if (data.is_error == 'no') {
                            jQuery('#coupon_box').show();
                            jQuery('#coupon_price').html(data.dd);
                            jQuery('#order_total_price').html(data.result);
                        }
                    }
                });
            }
        }
    </script>
    <?php
    if (isset($_SESSION['COUPON_ID'])) {
        unset($_SESSION['COUPON_ID']);
        unset($_SESSION['COUPON_CODE']);
        unset($_SESSION['COUPON_VALUE']);
    }
    ?>

    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>


</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>