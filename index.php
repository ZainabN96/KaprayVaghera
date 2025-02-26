<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Home | Kapray Vaghera';
include 'includes/header2.php';
?>

<body class="home-five">
	<div id="loader-wrapper">
		<div id="loader">
			<div class="loader-ellips">
				<span class="ring"></span>
				<span class="ring"></span>
				<span class="ring"></span>
			</div>
		</div>
	</div>
	<!-- header area start -->
	<?php include 'includes/navbar2.php' ?>
	<!-- header area end -->
	
	<!-- start home slider -->
	<div class="slider-area an-1 hm-1 clr">
		<!-- slider -->
		<!-- <div class="bend niceties preview-2">
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
		 -->
		<div id="heroSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></li>
				<li data-bs-target="#heroSlider" data-bs-slide-to="1"></li>
			</ol>

			<!-- Slides -->
			<div class="carousel-inner">
				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url('img/slider/slider2.jpg');">
					<div class="carousel-overlay"></div>
					<div class="carousel-caption">
						<h2 class="text-light">Collection 2025</h2>
						<h3 class="text-light">FALL-WINTER</h3>
						<a href="#hotselling" class="btn btn-danger btn-lg mt-3">View Collection</a>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url('img/slider/slider1.jpg');">
					<div class="carousel-overlay"></div>
					<div class="carousel-caption">
						<h2 class="text-light">Collection 2025</h2>
						<h3 class="text-light">SPRING-SUMMER</h3>
						<a href="#newarrival" class="btn btn-danger btn-lg mt-3">View Collection</a>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="carousel-control-prev" href="#heroSlider" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a class="carousel-control-next" href="#heroSlider" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div>

		<!-- slider end-->
	</div>
	<!-- end home slider -->
	<!-- New Arrival section start -->
	<div class="our-product-area" id="newarrival">
		<div class="container-fluid">
			<!-- area title start -->
			<div class="area-title">
				<h2>New In</h2>
			</div>
			<div class="row">
				<div class="owl-carousel product-slider">
					<?php
						$get_product = get_product($con, 4);
						foreach ($get_product as $list) {
					?>
						<div class="single-product slider-item">
							<div class="product-img">
								<a href="product.php?id=<?php echo $list['id'] ?>">
									<img class="primary-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="<?php echo $list['name'] ?>" />
									<img class="secondary-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="<?php echo $list['name'] ?>" />
								</a>
								<div class="actions">
									<div class="add-to-links">
										<!-- <div class="add-to-wishlist">
											<a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')">
												<i class="fa fa-heart"></i>
											</a>
										</div> -->
										<div class="add-to-wishlist text-black">
											<a href="product.php?id=<?php echo $list['id'] ?>">
												<i class="fa fa-eye"></i>
											</a>
										</div>
										<div class="compare-button">
											<a href="product.php?id=<?php echo $list['id'] ?>">
												<i class="icon-bag"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h2 class="product-name">
									<a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['short_desc']?></a>
								</h2>
								<p>
									<?php echo $list['name'] ?><br>
									<span class="new-price">PKR <?php echo $list['price'] ?></span>
								</p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- New Arrival section end -->
		<!-- Hot Selling section start -->
		<div class="our-product-area" id="hotselling">
			<div class="container-fluid">
				<!-- area title start -->
				<div class="area-title">
					<h2>Hot Selling</h2>
				</div>
				<div class="row">
					<div class="owl-carousel product-slider">
						<?php
							$get_product = get_product($con, 4, '', '', '', '', 'yes');
							foreach ($get_product as $list) {
						?>
							<div class="single-product slider-item">
								<div class="product-img">
									<a href="product.php?id=<?php echo $list['id'] ?>">
										<img class="primary-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="<?php echo $list['name'] ?>" />
										<img class="secondary-image" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="<?php echo $list['name'] ?>" />
									</a>
									<div class="actions">
										<div class="add-to-links">
											<div class="add-to-wishlist text-black">
												<a href="product.php?id=<?php echo $list['id'] ?>">
													<i class="fa fa-eye"></i>
												</a>
											</div>
											<div class="compare-button">
												<a href="product.php?id=<?php echo $list['id'] ?>">
													<i class="icon-bag"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-name">
										<a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['short_desc']?></a>
									</h2>
									<p>
										<?php echo $list['name'] ?><br>
										<span class="new-price">PKR <?php echo $list['price'] ?></span>
									</p>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<!-- <div class="row">
					<?PHP
					//$get_product = get_product($con, 4, '', '', '', '', 'yes');
					//foreach ($get_product as $list) {
					?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-product slider-item">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" style="width: 450px; height: 350px;"
											src="<?php //echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
										<img class="secondary-image" style="width: 450px; height: 350px;"
											src="<?php //echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
									</a>
									 <div class="action-zoom">
										<div class="add-to-cart">y
											<a href="product.php?id=<?php //echo $list['id'] ?>"><i
													class="fa fa-search-plus"></i></a>
										</div>
									</div> 
									<div class="actions">
										<div class="action-buttons">
											<div class="add-to-links">
												<div class="add-to-wishlist">
													<a href="javascript:void(0)"
														onclick="wishlist_manage('<?php //echo $list['id'] ?>','add')"><i
															class="fa fa-heart"></i></a>
												</div>
												<div class="compare-button">
													<a href="product.php?id=<?php //echo $list['id'] ?>"><i
															class="icon-bag"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="price-box">
										<span class="new-price">PKR
											<?php //echo $list['price'] ?>
										</span>
									</div> 
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">
											<?php //echo $list['name'] ?>
										</a></h2>
									<p>
										<?php //echo $list['short_desc'] ?><br>
										<span class="new-price">PKR
											<?php //echo $list['price'] ?>
										</span>
									</p>
								</div>
							</div>
						</div>
					<?php //} ?>
					
				</div> -->
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
	
        $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true, // Enable navigation
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"], // Custom Icons
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    });

</script>

</html>