
<!DOCTYPE html>
<html class="no-js" lang="">
	
    <?php
		$title='Checkout | Kapray Vaghera';
		include 'includes/header.php'; 
	?>
<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>

    <div class="container mt-5">
        <div class="row mt-5" >
            <div class="col-md-4 order-md-2 mb-4"  style="color: black;">
                <h5 class="d-flex justify-content-between align-items-center mt-5 mb-1">
                    <span style="font-weight: bold;" class="text-muted mt-5">Your cart</span>

                    <!-- <span class="badge badge-secondary badge-pill">3</span> -->

                    <!-- <div class="cart-toggler">
                                            <a href="#"><i class="icon-bag" style="color:black"></i></a>
                                            <a href="#"><span class="cart-quantity">2</span></a>
                                        </div> -->
                </h5>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="me-lg-5">
                            <div class="d-flex">
                                <img src="img/products/422890794_434002837_product9.jpeg" class="border rounded me-5"
                                    style="width: 100px; height: 130px;" />
                                <div class="">
                                    <a href="#" class="nav-link pr-5 ms-2">Winter kurta for lady</a>
                                    <p class="text-muted quantity ms-2">Qty: 1 </p>
                                    <p class="new-price ms-2 mb-2"> <strong>PKR.9,999.00 </strong></p>

                                    <p class="text-muted color ms-2 mb-0">Select Color: White </p>
                                    <p class="text-muted size ms-2">Select Size: 3-PC </p>

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
                                    <a href="#" class="nav-link pr-5 ms-2">Winter Shalwar</a>
                                    <p class="text-muted quantity ms-2">Qty: 1 </p>
                                    <p class="new-price ms-2 mb-2"> <strong>PKR.4,999.00 </strong></p>
                                    <p class="text-muted color ms-2 mb-0">Select Color: White </p>
                                    <p class="text-muted size ms-2">Select Size: 3-PC </p>

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
                                <div class="card-title mb-3"> Order Summary </div>
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
                                    <p class="">Local Shipping</p>
                                    <p class="fw-bold">0.00</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p class="fw-bold">Order Total:</p>
                                    <p class="fw-bold">$329.00</p>
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
            <div class="col-md-8 order-md-1 mt-5" style="color: black;" >
                <h4 style="font-weight:bold;" class="mb-3 mt-5">Shipping address</h4>
                <hr style="border: 0.5px solid ;">
                <form class="needs-validation" novalidate="" action="thankyou.html" id="checkoutForm">


                    <div class="mb-3 mt-3">
                        <label for="email">Email Address </label>
                        <input type="email" class="form-control mt-1" id="email" required="">
                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control mt-1" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control mt-1" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Street Address</label>
                        <input type="text" class="form-control mt-1" id="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100 mt-1" id="country" required="">
                                <option value="">Choose...</option>
                                <option>Pakistan</option>
                            </select>
                            <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="province">Province</label>
                            <select class="custom-select d-block w-100 mt-1" id="province" onchange="updateCities()"
                                required="">
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
                            <select class="custom-select d-block w-100 mt-1" id="city" required="">
                                <option value="">Choose...</option>

                            </select>
                            <div class="invalid-feedback"> Please provide a valid city. </div>
                        </div>
                        <div class=" mb-3">
                            <label for="zip">Zip/Postal Code</label>
                            <input type="text" class="form-control mt-1" id="zip" placeholder="" required="">
                            <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="tel" maxlength="10" class="form-control mt-1" id="phone" placeholder="" required="">
                            <div class="invalid-feedback"> Phone number required. </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input mt-1" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my
                            billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input mt-1" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">
                    <h4 style="font-weight:bold;" class="mb-3 mt-5">Payment</h4>
                    <hr style="border: 0.6px solid ;">
                    
                    <div class="d-block my-3">
                    <div class="custom-control custom-radio">
        <input id="cod" name="paymentMethod" type="radio" class="custom-control-input" checked required>
        <label class="custom-control-label" for="cod">Cash on Delivery (COD)</label>
    </div>
    <div class="custom-control custom-radio">
        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"  required>
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
                    

                    <button class="btn btn-process btn-lg w-100 btn-block" type="submit">PLACE ORDER</button>


            </div>
            </form>
        </div>
    </div>
    </div>

    <script>
           document.addEventListener('DOMContentLoaded', function () {
        var form = document.querySelector('form.needs-validation');
        var paymentMethodCOD = document.getElementById('cod');
        var paymentMethodCredit = document.getElementById('credit');
        var creditCardDetails = document.getElementById('creditCardDetails');

        // Show/hide credit card details based on the initially checked payment method
        toggleCreditCardDetails();

        // Add event listeners directly after DOMContentLoaded
        paymentMethodCOD.addEventListener('click', toggleCreditCardDetails);
        paymentMethodCredit.addEventListener('click', toggleCreditCardDetails);

        form.addEventListener('submit', function (event) {
            // Prevent form submission if it's not valid
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            
            if (paymentMethodCredit.checked) {
                console.log("credit card checked");
                validateCreditCardDetails();
            }

           
            form.classList.add('was-validated');
        });

        function toggleCreditCardDetails() {
            creditCardDetails.style.display = paymentMethodCredit.checked ? 'block' : 'none';

           
            clearCreditCardValidation();
        }

        function validateCreditCardDetails() {
        
            var creditCardName = document.getElementById('cc-name');
            var creditCardNumber = document.getElementById('cc-number');
            var creditCardExpiration = document.getElementById('cc-expiration');
            var creditCardCVV = document.getElementById('cc-cvv');

          
            if (creditCardName.value.trim() === '') {
                creditCardName.classList.add('is-invalid');
            } else {
                creditCardName.classList.remove('is-invalid');
            }

            if (creditCardNumber.value.trim() === '') {
                creditCardNumber.classList.add('is-invalid');
            } else {
                creditCardNumber.classList.remove('is-invalid');
            }

            if (creditCardExpiration.value.trim() === '') {
                creditCardExpiration.classList.add('is-invalid');
            } else {
                creditCardExpiration.classList.remove('is-invalid');
            }

            if (creditCardCVV.value.trim() === '') {
                creditCardCVV.classList.add('is-invalid');
            } else {
                creditCardCVV.classList.remove('is-invalid');
            }
        }

        function clearCreditCardValidation() {
            // Clear validation messages for credit card details
            var creditCardName = document.getElementById('cc-name');
            creditCardName.classList.remove('is-invalid');

            var creditCardNumber = document.getElementById('cc-number');
            creditCardNumber.classList.remove('is-invalid');

            var creditCardExpiration = document.getElementById('cc-expiration');
            creditCardExpiration.classList.remove('is-invalid');

            var creditCardCVV = document.getElementById('cc-cvv');
            creditCardCVV.classList.remove('is-invalid');
        }
    });

    </script>



    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>


</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>