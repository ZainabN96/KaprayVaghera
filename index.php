<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Home | Kapray Vaghera';
include 'includes/header2.php';
?>


<body class="home-five">

	<!-- <marquee class="delivery">Delivery service is now available for just Lahore.</marquee> -->
	<!-- header area start -->
	<?php include 'includes/navbar2.php' ?>
	<!-- header area end -->
	<!-- <marquee>A Computer Science portal</marquee> -->
	<!-- start home slider -->
	<div class="slider-area an-1 hm-1 clr">
		<!-- slider -->
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider" class="slides abc">
				<div class="carousel-item">
					<img class="d-block mx-auto img-fluid" alt="Image 1"
						src="img/slider/slider2.jpg" alt=""
						title="#slider-direction-1" />
				</div>
				<div class="carousel-item">
					<img class="d-block mx-auto img-fluid" alt="Image 1"
						src="img/slider/slider1.jpg" alt=""
						title="#slider-direction-2" />
				</div>
			</div>
			<!-- direction 1 -->
			<div id="slider-direction-1" class="t-cn slider-direction">
				<div class="slider-progress"></div>
				<div class="slider-content t-lfl lft-pr s-tb slider-1">
					<div class="title-container s-tb-c title-compress">
						<h3 class="title2 low-f">Collection 2025</h3>
						<h4 class="title2">FALL-WINTER</h4>
						<a class="btn-title" href="#hotselling">View collection</a>
					</div>
				</div>
			</div>

			<!-- direction 2 -->
			<div id="slider-direction-2" class="slider-direction">
				<div class="slider-progress"></div>
				<div class="slider-content t-lfl lft-pr s-tb  slider-2">
					<div class="title-container s-tb-c">
						<h3 class="title2 low-f">Collection 2025</h3>
						<h4 class="title2">SPRING-SUMMER</h4>
						<a class="btn-title" href="#newarrival">View collection</a>
					</div>
				</div>
			</div>
		</div>
		<div id="loader-wrapper">
			<div id="loader">
				<div class="loader-ellips">
					<span class="ring"></span>
					<span class="ring"></span>
					<span class="ring"></span>
				</div>
			</div>
		</div>
		<!-- slider end-->
	</div>
	<!-- end home slider -->
	<!-- New Arrival section start -->
	<div class="our-product-area" id="newarrival">
		<div class="container">


			<!-- area title start -->
			<div class="area-title">
				<h2>New Arrival</h2>
			</div>

			<div class="row">
				<div class="owl-carousel product-slider">
					<?php
					$get_product = get_product($con, 6); // 6 products get karna
					foreach ($get_product as $list) {
					?>
						<div class="single-product slider-item">
							<div class="product-img">
								<a href="product.php?id=<?php echo $list['id'] ?>">
									<img class="primary-image" style="width: 100%; height: auto;"
										src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
									<img class="secondary-image" style="width: 100%; height: auto;"
										src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
								</a>
								<div class="actions">
									<div class="add-to-links">
										<a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')">
											<i class="fa fa-heart"></i>
										</a>
										<a href="product.php?id=<?php echo $list['id'] ?>">
											<i class="icon-bag"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">
										<?php echo $list['name'] ?>
									</a></h2>
								<p><?php echo $list['short_desc'] ?></p>
								<span class="new-price">PKR <?php echo $list['price'] ?></span>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
		<!-- New Arrival section end -->
		<!-- Hot Selling section start -->
		<div class="our-product-area" id="hotselling">
			<div class="container">
				<!-- area title start -->
				<div class="area-title">
					<h2>Hot Selling</h2>
				</div>

				<div class="row">
					<?PHP
					$get_product = get_product($con, 4, '', '', '', '', 'yes');
					foreach ($get_product as $list) {
					?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-product slider-item">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" style="width: 450px; height: 350px;"
											src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
										<img class="secondary-image" style="width: 450px; height: 350px;"
											src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
									</a>
									<!-- <div class="action-zoom">
										<div class="add-to-cart">y
											<a href="product.php?id=<?php echo $list['id'] ?>"><i
													class="fa fa-search-plus"></i></a>
										</div>
									</div> -->
									<div class="actions">
										<div class="action-buttons">
											<div class="add-to-links">
												<div class="add-to-wishlist">
													<a href="javascript:void(0)"
														onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i
															class="fa fa-heart"></i></a>
												</div>
												<div class="compare-button">
													<a href="product.php?id=<?php echo $list['id'] ?>"><i
															class="icon-bag"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="price-box">
										<span class="new-price">PKR
											<?php echo $list['price'] ?>
										</span>
									</div> -->
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">
											<?php echo $list['name'] ?>
										</a></h2>
									<p>
										<?php echo $list['short_desc'] ?><br>
										<span class="new-price">PKR
											<?php echo $list['price'] ?>
										</span>
									</p>
								</div>
							</div>
						</div>
					<?php } ?>
					<!--  -->
				</div>
			</div>
			<!-- product section end -->
			<!-- FOOTER START -->
			<?php include 'includes/footer.php'; ?>
			<!-- FOOTER END -->

			<!-- JS -->
			<?php include 'includes/jsfiles.php'; ?>

</body>
<script>
	$(window).on('load', function() {
		$('#loader').delay(100).fadeOut('slow');
		$('#loader-wrapper').delay(500).fadeOut('slow');
	});

	var loader = document.getElementById("loader");
	window.addEventListener("load", function() {
		loader.style.display = "none";
	})

	$(document).ready(function () {
    $(".product-slider").owlCarousel({
        loop: true, // Infinite loop
        margin: 10,
        nav: true, // Navigation arrows
        dots: false, // Dots below slider
        autoplay: true, // Auto sliding
        autoplayTimeout: 3000, // 3 seconds
        responsive: {
            0: {
                items: 2 // Mobile view: 2 items
            },
            768: {
                items: 3 // Tablet view: 3 items
            },
            1024: {
                items: 4 // Laptop/Desktop: 4 items
            }
        }
    });
});

</script>

</html>