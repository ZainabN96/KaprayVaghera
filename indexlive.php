<!DOCTYPE html>
<html class="no-js" lang="">

<?php
    $title = 'Home | Kapray Vaghera';
    include 'includes/header2.php';
    // $resBanner=mysqli_query($con,"select * from banner where status='1' order by order_no asc");
    // $img ="img/banner/";
?>

<body class="home-five">
	
	<!-- header area start -->
	<?php include 'includes/navbar2.php' ?>
	<!-- header area end -->
	
	<!-- start home slider -->
	
    	<div class="category-banner1">
		<div class="cat-heading">
           <span> Collection 2025</span>
		</div>
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