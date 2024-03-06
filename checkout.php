<?php
require('connection.php');
require('functions.php');
require('add_to_cart.php');

?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart | Kapray Vaghera</title>
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

    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>




<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>

    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-4 order-md-2 mb-4 ">
                <h4 class="d-flex justify-content-between align-items-center mt-5 mb-3">
                    <span style="font-weight: bold;" class="text-muted mt-5">Your cart</span>

                    <!-- <span class="badge badge-secondary badge-pill">3</span> -->

                    <!-- <div class="cart-toggler">
											<a href="#"><i class="icon-bag" style="color:black"></i></a>
											<a href="#"><span class="cart-quantity">2</span></a>
										</div> -->
                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="me-lg-5">
                            <div class="d-flex">
                                <img src="img/products/422890794_434002837_product9.jpeg" class="border rounded me-5"
                                    style="width: 100px; height: 130px;" />
                                <div class="">
                                    <a href="#" class="nav-link pr-5 ms-5">Winter kurta for lady</a>
                                    <p class="text-muted quantity ms-5">Qty: 1 </p>
                                    <p class="new-price ms-5 mb-5"> <strong>PKR.9,999.00 </strong></p>

                                    <p class="text-muted color ms-5 mb-0">Select Color: White </p>
                                    <p class="text-muted size ms-5">Select Size: 3-PC </p>

                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="me-lg-5">
                            <div class="d-flex">
                                <img src="img/products/154289886_sha1.jpg" class="border rounded me-5"
                                    style="width: 100px; height: 130px;" />
                                <div class="">
                                    <a href="#" class="nav-link pr-5 ms-5">Winter Shalwar</a>
                                    <p class="text-muted quantity ms-5">Qty: 1 </p>
                                    <p class="new-price ms-5 mb-5"> <strong>PKR.4,999.00 </strong></p>
                                    <p class="text-muted color ms-5 mb-0">Select Color: White </p>
                                    <p class="text-muted size ms-5">Select Size: 3-PC </p>

                                </div>
                            </div>
                        </div>
                    </li>
                   

                    <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li> -->

                    <li class="list-group-item d-flex justify-content-between lh-condensed">

                        <div class="card shadow-0 border w-100 ">
                            <div class="card-body w-100 ">
                                <div class="card-title mb-5"> Order Summary </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-3 ">Subtotal:</p>
                                    <p class="mb-3 fw-bold">$329.00</p>
                                </div>
                                <!-- <div class="d-flex justify-content-between">
              <p class="mb-2">Discount:</p>
              <p class="mb-2 text-success">-$60.00</p>
             </div> -->
                                <!-- <div class="d-flex justify-content-between">
              <p class="mb-2">TAX:</p>
              <p class="mb-2">$14.00</p>
             </div> -->
             <div class="d-flex justify-content-between">
                                    <p class="mb-5 ">Local Shipping</p>
                                    <p class="mb-5 fw-bold">0.00</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-5 ">Order Total:</p>
                                    <p class="mb-5 fw-bold">$329.00</p>
                                </div>
                                <!-- <div class="mt-3">
                                    <a href="#" class="btn btn-process w-100 shadow-0 mb-2">PROCEED TO CHECKOUT </a>
                                    <a href="#" class="btn btn-light w-100 border mt-2"> CONTINUE SHOPPING </a>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="order-summary-container">
                            <h3>Order Summary</h3>
                       
                            <table class="order-summary-table">
                                <tbody>
                                  
                                    <tr class="totals sub">
                                        <th class="mark" scope="row">Cart Subtotal</th>
                                        <td class="amount"><span class="price">PKR 8,999.00</span></td>
                                    </tr>
                                 
                                    <tr class="totals shipping excl">
                                        <th class="mark" scope="row">Shipping</th>
                                        <td class="amount"><span class="price">PKR 0.00</span></td>
                                    </tr>
                                  
                                    <tr class="grand totals incl">
                                        <th class="mark" scope="row">Total</th>
                                        <td class="amount"><span class="price">PKR 8,999.00</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </li>
                </ul>
                <!-- <form class="card p-2">
                <div class="input-group">
                    <input type="
                    text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form> -->
            </div>
            <div class="col-md-8 order-md-1 mt-5">
                <h4 style="font-weight:bold;" class="mb-3 mt-5">Shipping address</h4>
                <hr style="border: 0.6px solid ;">
                <form class="needs-validation" novalidate="">

             
                    <div class="mb-3">
                        <label for="email">Email Address </label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Street Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required="">
                                <option value="">Choose...</option>
                                <option>Pakistan</option>
                            </select>
                            <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="province">Province</label>
                            <select class="custom-select d-block w-100" id="province" onchange="updateCities()" required="">
                                <option value="">Choose...</option>
                                <option>Punjab</option>
                                <option>Balochistan</option>
                                <option>Sindh</option>
                                <option>Azad Jammu and Kashmir</option>
                                <option>Gilgit-Baltistan</option>
                                <option>Khyber Pakhtunkhwa</option>
                                <option>Islamabad Capital Territory</option>
                            </select>
                            <div class="invalid-feedback"> Please select a valid province. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city">City</label>
                            <select class="custom-select d-block w-100" id="city" required="">
                                <option value="">Choose...</option>
                                
                            </select>
                            <div class="invalid-feedback"> Please provide a valid city. </div>
                        </div>
                        <div class=" mb-3">
                            <label for="zip">Zip/Postal Code</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required="">
                            <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="tel" maxlength="10" class="form-control" id="phone" placeholder="" required="">
                            <div class="invalid-feedback"> Phone number required. </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my
                            billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">
                    <h4 style="font-weight:bold;" class="mb-3 mt-5">Payment</h4>
                    <hr style="border: 0.6px solid ;">
                    <div class="d-block my-3">
                         <div class="custom-control custom-radio">
                            <input id="cod" name="paymentMethod" type="radio" class="custom-control-input" checked="checked" required="">
                            <label class="custom-control-label" for="cod">Cash on Delivery (COD)</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" 
                            class="custom-control-input"
                                required="">
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                       
                       
                    </div>
                    <div class="card-details" id="creditCardDetails" style="display: none;">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Cardholder name</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback"> Name on card is required </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                <div class="invalid-feedback"> Credit card number is required </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiry date</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                <div class="invalid-feedback"> Expiration date required </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                <div class="invalid-feedback"> Security code required </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-process btn-lg btn-block" type="submit">PLACE ORDER</button>
                </form>
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