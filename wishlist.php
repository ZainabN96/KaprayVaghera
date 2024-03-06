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
    <title>Wishlist | Kapray Vaghera</title>
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

 <!-- Style CSS
        ============================================ -->
	<!-- <link rel="stylesheet" href="css/style.min.css"> -->

	<!-- Style min CSS
        ============================================ -->
		<link rel="stylesheet" href="css/style.mins.css">

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
		<!-- wishlist-area-start -->
		<main class="main">
			
			<!-- End PageHeader -->
			<div class="page-content pt-10 pb-10 ">
				<div class="container">
					<table class="shop-table wishlist-table mb-4">
						<thead>
							<tr>
								<th class="product-name"><span>Product</span></th>
								<th></th>
								<th class="product-price "><span>Price</span></th>
								<th class="product-stock-status"><span>Stock status</span></th>
								<th class="product-add-to-cart"></th>
								<th class="product-remove text-center"></th>
							</tr>
						</thead>
						<tbody class="wishlist-items-wrapper">
							<tr>
								<td class="product-thumbnail">
									<a href="product-simple.html">
										<figure>
											<img src="img/products/248047910_trouser1.jpg" width="100" height="100"
												alt="product">
										</figure>
									</a>
								</td>
								<td class="product-name">
									<a href="product-simple.html">Beige knitted elastic trouser </a>
								</td>
								<td class="product-price">
									<span class="amount">$84.00</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-in-stock">In Stock</span>
								</td>
								<td class="product-add-to-cart">
									<a href="product.php" class="btn-product"><span>Select option</span></a>
								</td>
								<td class="product-remove">
									<div>
										<a href="#" class="remove" title="Remove this product">
										<i class="bi bi-x-lg"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="product-thumbnail">
									<a href="product-simple.html">
										<figure>
											<img src="img/products/856920809_247519152_image-540x660.jpg" width="100" height="100"
												alt="product">
										</figure>
									</a>
								</td>
								<td class="product-name">
									<a href="product-simple.html">Sed diam nonummy nibh</a>
								</td>
								<td class="product-price">
									<span class="amount">$84.00</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-in-stock">In Stock</span>
								</td>
								<td class="product-add-to-cart">
									<a href="#" class="btn-product btn-cart"><span>Add to Cart</span></a>
								</td>
								<td class="product-remove">
									<div>
										<a href="#" class="remove" title="Remove this product">
										<i class="bi bi-x-lg"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="product-thumbnail">
									<a href="product-simple.html">
										<figure>
											<img src="img/products/434002837_product9.jpeg" width="100" height="100"
												alt="product">
										</figure>
									</a>
								</td>
								<td class="product-name">
									<a href="product-simple.html">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur</a>
								</td>
								<td class="product-price">
									<span class="amount">$84.00</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-out-stock">Out of Stock</span>
								</td>
								<td class="product-add-to-cart">
									<a href="#" class="btn-product btn-cart btn-disabled not-allowed"><span>Add to Cart</span></a>
									
								</td>
								<td class="product-remove">
									<div>
										<a href="#" class="remove" title="Remove this product">
										<i class="bi bi-x-lg"></i></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- End Main -->

		 <!-- FOOTER START -->
		 <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>


</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>