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

	<!-- breadcrumbs area end -->
	<!-- cart + summary -->
	<div class="cart-area-start"> 
<section class="my-5">
  <div class="container">
    <div class="row">
      <!-- cart -->
      <div class="col-lg-9">
        <div class="card border shadow-0">
          <div class="m-4">
            <h4 class="card-title mb-4">Your shopping cart</h4>
            <div class="row gy-3 mb-4">
              <div class="col-lg-5">
                <div class="me-lg-5">
                  <div class="d-flex">
                    <img src="img/products/422890794_434002837_product9.jpeg" class="border rounded me-3" style="width: 150px; height: 150px;" />
                    <div class="">
                      <a href="#" class="nav-link">Winter kurta for lady</a>
                      <p class="text-muted">Yellow, Kurta</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap ">
				<div class="wrapper">
                <span class="minus">-</span>
				<span class="num">01</span>
				<span class="plus">+</span>
				</div>
                <div class="">
                  <text class="h6">$1156.00</text> <br />
                  <small class="text-muted text-nowrap"> $460.00 / per item </small>
                </div>
              </div>
              <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <div class="float-md-end">
                  <a href="#!" class="btn btn-light border px-2 icon-hover-danger"><i class="fa fa-heart"></i></a>
                  <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                </div>
              </div>
            </div>
<!-- 
            <div class="row gy-3 mb-4">
              <div class="col-lg-5">
                <div class="me-lg-5">
                  <div class="d-flex">
                    <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="border rounded me-3" style="width: 120px; height: 120px;" />
                    <div class="">
                      <a href="#" class="nav-link">Mens T-shirt Cotton Base</a>
                      <p class="text-muted">Blue, Medium</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                <div class="">
                  <select style="width: 100px;" class="form-select me-4">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="">
                  <text class="h6">$44.80</text> <br />
                  <small class="text-muted text-nowrap"> $12.20 / per item </small>
                </div>
              </div>
              <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <div class="float-md-end">
                  <a href="#!" class="btn btn-light border px-2 icon-hover-primary"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                  <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                </div>
              </div>
            </div> -->

       <div class="row gy-3">
              <div class="col-lg-5">
                <div class="me-lg-5">
                  <div class="d-flex">
                    <img src="img/products/247519152_image-540x660.jpg" class="border rounded me-3" style="width: 150px; height: 150px;" />
                    <div class="">
                      <a href="#" class="nav-link">Embroidered Suit  </a>
                      <p class="text-muted">Kurta, Blue</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
			  <div class="wrapper">
                <span class="minus">-</span>
				<span class="num">01</span>
				<span class="plus">+</span>
				</div>
                <div class="">
                  <text class="h6">$1156.00</text> <br />
                  <small class="text-muted text-nowrap"> $460.00 / per item </small>
                </div>
              </div>
              <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <div class="float-md-end">
                  <a href="#!" class="btn btn-light border px-2  icon-hover-danger"><i class="fa fa-heart"></i></a>
				
                  <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                </div>
              </div>
            </div>
          </div>
<!-- 
          <div class="border-top pt-4 mx-4 mb-4">
            <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip
            </p>
          </div> -->
        </div>
      </div>
      <!-- cart -->
      <!-- summary -->
      <div class="col-lg-3">
        <div class="card mb-3 border shadow-0">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label class="form-label">APPLY DISCOUNT CODE</label>
                <div class="input-group">
                  <input type="text" class="form-control border" name="" placeholder="Enter discount code" />
                  <button class="btn btn-success border mt-2">Apply</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card shadow-0 border">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Subtotal:</p>
              <p class="mb-2">$329.00</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">Discount:</p>
              <p class="mb-2 text-success">-$60.00</p>
            </div>
            <!-- <div class="d-flex justify-content-between">
              <p class="mb-2">TAX:</p>
              <p class="mb-2">$14.00</p>
            </div> -->
            <hr />
            <div class="d-flex justify-content-between">
              <p class="mb-2">Order Total:</p>
              <p class="mb-2 fw-bold">$283.00</p>
            </div>

            <div class="mt-3">
              <a href="#" class="btn btn-process w-100 shadow-0 mb-2">PROCEED TO CHECKOUT </a>
              <a href="#" class="btn btn-light w-100 border mt-2"> CONTINUE SHOPPING </a>
            </div>
          </div>
        </div>
      </div>
      <!-- summary -->
    </div>
  </div>
</section>
<!-- cart + summary -->
<section>
</div>

  <!-- <div class="container my-5">
    <header class="mb-4">
      <h3>Recommended items</h3>
    </header>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
          <div class="mask px-2" style="height: 50px;">
            <div class="d-flex justify-content-between">
              <h6><span class="badge bg-danger pt-1 mt-3 ms-2">New</span></h6>
              <a href="#"><i class="fa fa-heart text-danger fa-lg float-end pt-3 m-2"></i></a>
            </div>
          </div>
          <a href="#" class="">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp" class="card-img-top rounded-2" />
          </a>
          <div class="card-body d-flex flex-column pt-3 border-top">
            <a href="#" class="nav-link">Gaming Headset with Mic</a>
            <div class="price-wrap mb-2">
              <strong class="">$18.95</strong>
              <del class="">$24.99</del>
            </div>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card px-4 border shadow-0 mb-4 mb-lg-0">
          <div class="mask px-2" style="height: 50px;">
            <a href="#"><i class="fa fa-heart text-danger fa-lg float-end pt-3 m-2"></i></a>
          </div>
          <a href="#" class="">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp" class="card-img-top rounded-2" />
          </a>
          <div class="card-body d-flex flex-column pt-3 border-top">
            <a href="#" class="nav-link">Apple Watch Series 1 Sport </a>
            <div class="price-wrap mb-2">
              <strong class="">$120.00</strong>
            </div>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card px-4 border shadow-0">
          <div class="mask px-2" style="height: 50px;">
            <a href="#"><i class="fa fa-heart text-danger fa-lg float-end pt-3 m-2"></i></a>
          </div>
          <a href="#" class="">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/9.webp" class="card-img-top rounded-2" />
          </a>
          <div class="card-body d-flex flex-column pt-3 border-top">
            <a href="#" class="nav-link">Men's Denim Jeans Shorts</a>
            <div class="price-wrap mb-2">
              <strong class="">$80.50</strong>
            </div>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card px-4 border shadow-0">
          <div class="mask px-2" style="height: 50px;">
            <a href="#"><i class="fa fa-heart text-danger fa-lg float-end pt-3 m-2"></i></a>
          </div>
          <a href="#" class="">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" class="card-img-top rounded-2" />
          </a>
          <div class="card-body d-flex flex-column pt-3 border-top">
            <a href="#" class="nav-link">Mens T-shirt Cotton Base Layer Slim fit </a>
            <div class="price-wrap mb-2">
              <strong class="">$13.90</strong>
            </div>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Recommended -->


	

		<!-- FOOTER START -->
		<?php include 'includes/footer.php'; ?>
		<!-- FOOTER END -->

		<!-- JS -->
		<?php include 'includes/jsfiles.php'; ?>


</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>