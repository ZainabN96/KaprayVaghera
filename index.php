<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Home | Kapray Vaghera';
include 'includes/header2.php';
?>

<body class="home-five">
	
	<!-- header area start -->
	<?php include 'includes/navbar2.php' ?>
	<!-- header area end -->
	
	<!-- start home slider -->
	<div class="slider-area an-1 hm-1 clr">
		<!-- slider -->
		<div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
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
					<div class="carousel-caption animate__animated animate__fadeInUp">
						<h2 class="text-light">Collection 2025</h2>
						<h3 class="text-light">FALL-WINTER</h3>
						<a href="#hotselling" class="btn btn-custom btn-lg mt-3">View Collection</a>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url('img/slider/slider1.jpg');">
					<div class="carousel-overlay"></div>
					<div class="carousel-caption animate__animated animate__fadeInUp">
						<h2 class="text-light">Collection 2025</h2>
						<h3 class="text-light">SPRING-SUMMER</h3>
						<a href="#newarrival" class="btn btn-custom btn-lg mt-3">View Collection</a>
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
			</div>
			<!-- product section end -->
			<!-- FOOTER START -->
			<?php include 'includes/footer.php'; ?>
			<!-- FOOTER END -->

			<!-- JS -->
			<?php include 'includes/jsfiles.php'; ?>

</body>
<script>
	
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