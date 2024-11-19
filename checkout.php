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
$delivery_charges = '';

if (isset($_POST['submit'])) {

    $address = get_safe_value($con, $_POST['address']);
    $city = get_safe_value($con, $_POST['city']);
    $pincode = get_safe_value($con, $_POST['pincode']);
    $payment_type = get_safe_value($con, $_POST['payment_type']);
    $user_id = $_SESSION['USER_ID'];

    // Calculate cart total
    $cart_total = 0;
    foreach ($_SESSION['cart'] as $key => $val) {
        foreach ($val as $key1 => $val1) {
            $resAttr = mysqli_fetch_assoc(mysqli_query($con, "select price from product_attributes where id='$key1'"));
            $price = $resAttr['price'];
            $qty = $val1['qty'];
            // $cart_total += ($price * $qty + $delivery_charges);
        }
    }

    // Set delivery charges based on city distance from Lahore
    $delivery_charges = 0;
    switch ($city) {
        case 'Lahore':
            $delivery_charges = 0; // Free delivery for Lahore
            break;
        case 'Karachi':
            $delivery_charges = 400;
            break;
        case 'Islamabad':
            $delivery_charges = 300;
            break;
        case 'Faisalabad':
            $delivery_charges = 200;
            break;
            // Add more cities and charges based on distance
        default:
            $delivery_charges = 250; // Default charge for other cities
            break;
    }

    // Calculate total price including delivery charges
    $total_price = $cart_total + $delivery_charges;

    // Apply coupon if available
    if (isset($_POST['coupon_str'])) {
        $coupon_code = get_safe_value($con, $_POST['coupon_str']);
        $res = mysqli_query($con, "SELECT * FROM coupons WHERE code='$coupon_code' AND status='1'");

        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $is_error = 'no';
            $coupon_value = $row['value'];
            $_SESSION['COUPON_ID'] = $row['id'];
            $_SESSION['COUPON_CODE'] = $coupon_code;
            // $_SESSION['COUPON_VALUE'] = $coupon_value;
            $total_price = $_SESSION['ORDER_TOTAL'] - $coupon_value;

            $response = [
                'is_error' => $is_error,
                'dd' => 'Discount Applied: ' . $coupon_value,
                'result' => $total_price
            ];
        } else {
            $is_error = 'yes';
            $response = [
                'is_error' => $is_error,
                'dd' => 'Invalid Coupon Code',
                'result' => $_SESSION['ORDER_TOTAL']
            ];
        }

        echo json_encode($response);
        die;
    }

    // Set order details
    $payment_status = 'pending';
    if ($payment_type == 'cod') {
        $payment_status = 'success';
    }
    $order_status = '1';
    $added_on = date('Y-m-d h:i:s');
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

    // Insert order into database with delivery charges
    mysqli_query($con, "insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price,txnid,delivery_charges) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price','$txnid','$delivery_charges')");

    $order_id = mysqli_insert_id($con);

    // Insert each product in the order detail table
    foreach ($_SESSION['cart'] as $key => $val) {
        foreach ($val as $key1 => $val1) {
            $resAttr = mysqli_fetch_assoc(mysqli_query($con, "select price from product_attributes where id='$key1'"));
            $price = $resAttr['price'];
            $qty = $val1['qty'];
            mysqli_query($con, "insert into `order_detail`(order_id,product_id,product_attr_id,qty,price) values('$order_id','$key','$key1','$qty','$price')");
        }
    }

    // Add notification for the order
    mysqli_query($con, "INSERT INTO notifications (user_id, message, status) VALUES ('$user_id', 'New order #$order_id has been placed', 'unread')");

    // Handle payment gateway redirection
    if ($payment_type == 'instamojo') {
        // Code for instamojo payment gateway
    } else {
        unset($_SESSION['cart']);
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
                                                                <input type="text" class="form-control" name="login_email" id="login_email"
                                                                    placeholder="Your Email*" style="width:100%">
                                                                <span class="field_error" id="login_email_error"></span>
                                                            </div>

                                                            <div class="single-input">
                                                                <input type="password" name="login_password"
                                                                    id="login_password" class="form-control" placeholder="Your Password*"
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
                                                                <input type="text" class="form-control" name="name" id="name"
                                                                    placeholder="Your Name*" style="width:100%">
                                                                <span class="field_error" id="name_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="text" class="form-control" name="email" id="email"
                                                                    placeholder="Your Email*" style="width:100%">
                                                                <span class="field_error" id="email_error"></span>
                                                            </div>

                                                            <div class="single-input">
                                                                <input type="text" class="form-control" name="mobile" id="mobile"
                                                                    placeholder="Your Mobile*" style="width:100%">
                                                                <span class="field_error" id="mobile_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <input type="password" class="form-control" name="password" id="password"
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
                                                    <label class="form-check-label" for="city">
                                                        City
                                                    </label>
                                                        <select class="form-control" name="city" id="city" onchange="updateDeliveryCharges()" required>
                                                            <option value="">Select City</option>
                                                            <option value="Abbottabad">Abbottabad</option>
                                                            <option value="Bahawalpur">Bahawalpur</option>
                                                            <option value="Charsadda">Charsadda</option>
                                                            <option value="Chiniot">Chiniot</option>
                                                            <option value="Daska">Daska</option>
                                                            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                            <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                            <option value="Faisalabad">Faisalabad</option>
                                                            <option value="Ghotki">Ghotki</option>
                                                            <option value="Gujranwala">Gujranwala</option>
                                                            <option value="Gujrat">Gujrat</option>
                                                            <option value="Hafizabad">Hafizabad</option>
                                                            <option value="Islamabad">Islamabad</option>
                                                            <option value="Jacobabad">Jacobabad</option>
                                                            <option value="Jhang">Jhang</option>
                                                            <option value="Kamalia">Kamalia</option>
                                                            <option value="Karachi">Karachi</option>
                                                            <option value="Kasur">Kasur</option>
                                                            <option value="Khanewal">Khanewal</option>
                                                            <option value="Khuzdar">Khuzdar</option>
                                                            <option value="Kohat">Kohat</option>
                                                            <option value="Kot Adu">Kot Adu</option>
                                                            <option value="Lahore">Lahore</option>
                                                            <option value="Larkana">Larkana</option>
                                                            <option value="Lodhran">Lodhran</option>
                                                            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                            <option value="Mansehra">Mansehra</option>
                                                            <option value="Mardan">Mardan</option>
                                                            <option value="Matiari">Matiari</option>
                                                            <option value="Mingora">Mingora</option>
                                                            <option value="Mirpur Khas">Mirpur Khas</option>
                                                            <option value="Multan">Multan</option>
                                                            <option value="Muzaffargarh">Muzaffargarh</option>
                                                            <option value="Nawabshah">Nawabshah</option>
                                                            <option value="Nowshera">Nowshera</option>
                                                            <option value="Okara">Okara</option>
                                                            <option value="Pakpattan">Pakpattan</option>
                                                            <option value="Peshawar">Peshawar</option>
                                                            <option value="Quetta">Quetta</option>
                                                            <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                            <option value="Rawalpindi">Rawalpindi</option>
                                                            <option value="Sahiwal">Sahiwal</option>
                                                            <option value="Sargodha">Sargodha</option>
                                                            <option value="Sheikhupura">Sheikhupura</option>
                                                            <option value="Shikarpur">Shikarpur</option>
                                                            <option value="Sialkot">Sialkot</option>
                                                            <option value="Sukkur">Sukkur</option>
                                                            <option value="Swabi">Swabi</option>
                                                            <option value="Tando Allahyar">Tando Allahyar</option>
                                                            <option value="Turbat">Turbat</option>
                                                            <option value="Umerkot">Umerkot</option>
                                                            <option value="Vihari">Vihari</option>
                                                            <option value="Wah Cantt">Wah Cantt</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                    <label class="form-check-label" for="address">
                                                        Address: 
                                                    </label>
                                                        <input type="text" class="form-control" name="address" id="address" placeholder="Street Address"
                                                            required value="<?php echo $address ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                    <label class="form-check-label" for="zip">
                                                        Zip Code
                                                    </label>
                                                        <input type="text" class="form-control" name="pincode" id="zip" placeholder="Post code/ zip"
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
                                                <input type="radio" class="form-check-input" name="payment_type" value="COD" required checked /> Cash On
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

                                    $cart_total = $cart_total + (($price * $qty));
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
                        <!-- Display Delivery Charges -->
                        <div class="ordre-details__total" id="delivery_charges_display">
                            <h5>Delivery Charges</h5>
                            <span class="price" id="delivery_charges">0</span>
                        </div>

                        <div class="ordre-details__total" id="coupon_box">
                            <h5>Coupon Value</h5>
                            <span class="price" id="coupon_price"></span>
                        </div>
                        <div class="ordre-details__total">
                            <h5>Order total </h5>
                            <span class="price" id="order_total_price">
                            </span>
                        </div>

                        <!-- <div class="ordre-details__total bilinfo">
                            <input type="textbox" id="coupon_str" class="coupon_style mr5" /> <input type="button"
                                name="submit" class="btn btn-primary btn-lg" value="Apply Coupon"
                                onclick="set_coupon()" />

                        </div>
                        <div id="coupon_result"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let originalCartTotal = <?php echo $cart_total; ?>;

        function updateOrderTotal() {
            // Retrieve delivery charges and coupon discount
            let dc = parseFloat(document.getElementById('delivery_charges').textContent) || 0;
            let coupon = parseFloat(document.getElementById('coupon_price').textContent) || 0;

            // Calculate the total and update the DOM
            let total = originalCartTotal + dc - coupon;
            document.getElementById('order_total_price').textContent = total.toFixed(2);
        }

        function updateDeliveryCharges() {
            let city = document.getElementById('city').value;
            let deliveryCharges = 0;

            // Set delivery charges based on city
            switch (city) {
                case 'Lahore':
                    deliveryCharges = 0;
                    break;
                case 'Karachi':
                    deliveryCharges = 400;
                    break;
                case 'Islamabad':
                    deliveryCharges = 300;
                    break;
                case 'Faisalabad':
                    deliveryCharges = 200;
                    break;
                default:
                    deliveryCharges = 250;
                    break;
            }

            // Update delivery charges and recalculate order total
            document.getElementById('delivery_charges').textContent = deliveryCharges;
            updateOrderTotal();
        }

        // function set_coupon() {
        //     let coupon_str = jQuery('#coupon_str').val(); // Get coupon code from input
        //     if (coupon_str === '') {
        //         alert('Please enter a coupon code');
        //         return;
        //     }

        //     jQuery('#coupon_result').html(''); // Clear previous results
        //     $.ajax({
        //         url: 'set_coupon.php',
        //         method: 'POST',
        //         data: {
        //             coupon_str: coupon_str
        //         },
        //         success: function(response) {
        //             try {
        //                 // Parse the response and handle results
        //                 const data = JSON.parse(response);
        //                 if (data.is_error === 'no') {
        //                     document.getElementById('coupon_price').textContent = data.result; // Update coupon price
        //                     jQuery('#coupon_result').html(data.dd); // Display success message
        //                     updateOrderTotal(); // Recalculate total
        //                 } else {
        //                     jQuery('#coupon_result').html(data.dd); // Display error message
        //                 }
        //             } catch (e) {
        //                 console.error('Invalid JSON response:', response);
        //                 jQuery('#coupon_result').html('An error occurred. Please try again.');
        //             }
        //         },
        //         error: function(xhr, status, error) {
        //             console.error('AJAX Error:', error);
        //             jQuery('#coupon_result').html('An error occurred while applying the coupon.');
        //         }
        //     });
        // }

        function set_coupon() {
            let coupon_str = jQuery('#coupon_str').val(); // Get coupon code from input
            if (coupon_str === '') {
                alert('Please enter a coupon code');
                return;
            }

            jQuery('#coupon_result').html(''); // Clear previous messages
            $.ajax({
                url: 'set_coupon.php',
                method: 'POST',
                data: { coupon_str: coupon_str },
                success: function(response) {
                    try {
                        const data = JSON.parse(response);
                        if (data.is_error === 'no') {
                            // Update discount and new total
                            document.getElementById('coupon_price').textContent = `₹${data.result}`;
                            jQuery('#coupon_result').html(data.dd); // Success message
                            updateOrderTotal(data.result); // Update order total if needed
                        } else {
                            // Show error message
                            jQuery('#coupon_result').html(data.dd);
                        }
                    } catch (e) {
                        console.error('Invalid JSON response:', response);
                        jQuery('#coupon_result').html('An unexpected error occurred.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    jQuery('#coupon_result').html('An error occurred while applying the coupon.');
                }
            });
        }

    </script>


    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>


</body>

</html>