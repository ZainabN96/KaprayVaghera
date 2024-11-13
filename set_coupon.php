<?php

require('connection.php'); // Database connection file
require('functions.php');  // Custom functions file

if (isset($_POST['coupon_str'])) {
    $coupon_str = get_safe_value($con, $_POST['coupon_str']); // Sanitize input
    $uid = $_SESSION['USER_ID']; // Assuming user is logged in

    // Check if CART_TOTAL is set
    if (!isset($_SESSION['CART_TOTAL'])) {
        echo json_encode([
            'is_error' => 'yes',
            'dd' => 'Cart total is missing. Please try again.',
            'result' => ''
        ]);
        exit;
    }
    $cart_total = $_SESSION['CART_TOTAL'];

    // Fetch coupon details
    $coupon_query = "SELECT * FROM coupon_master WHERE coupon_code='$coupon_str'"; // Adjusted column name
    $coupon_result = mysqli_query($con, $coupon_query);

    if (!$coupon_result) {
        echo json_encode([
            'is_error' => 'yes',
            'dd' => 'Database error: ' . mysqli_error($con),
            'result' => ''
        ]);
        exit;
    }

    if (mysqli_num_rows($coupon_result) > 0) {
        $coupon_data = mysqli_fetch_assoc($coupon_result);

        // Validate coupon data
        if (!isset($coupon_data['min_order_value']) || !isset($coupon_data['discount_type']) || !isset($coupon_data['discount_value'])) {
            echo json_encode([
                'is_error' => 'yes',
                'dd' => 'Coupon data is incomplete. Please contact support.',
                'result' => ''
            ]);
            exit;
        }

        // Check minimum order value
        if ($cart_total < $coupon_data['min_order_value']) {
            echo json_encode([
                'is_error' => 'yes',
                'dd' => 'Your cart total is below the minimum required to use this coupon.',
                'result' => ''
            ]);
            exit;
        }

        // Calculate discount
        $discount = 0;
        if ($coupon_data['discount_type'] == 'flat') {
            $discount = $coupon_data['discount_value'];
        } elseif ($coupon_data['discount_type'] == 'percent') {
            $discount = ($cart_total * $coupon_data['discount_value']) / 100;
        }

        // Ensure discount doesn't exceed cart total
        $discount = min($discount, $cart_total);

        // Return success response
        $new_total = $cart_total - $discount;
        echo json_encode([
            'is_error' => 'no',
            'dd' => "Discount Applied: $discount",
            'result' => $new_total
        ]);
    } else {
        echo json_encode([
            'is_error' => 'yes',
            'dd' => 'Invalid coupon code.',
            'result' => ''
        ]);
    }
    exit;
}
?>
