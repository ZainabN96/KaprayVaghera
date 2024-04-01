<!DOCTYPE html>
<html class="no-js" lang="">


<?php
ob_start();
$title = 'Product-Details | Kapray Vaghera';
include 'includes/header.php';
if (isset($_GET['id'])) {
	$product_id = mysqli_real_escape_string($con, $_GET['id']);
	if ($product_id > 0) {
		$get_product = get_product($con, '', '', $product_id);
	} else {
		?>
		<script>
			window.location.href = 'index.php';
		</script>
		<?php
	}

	$resMultipleImages = mysqli_query($con, "select product_images from product_images where product_id='$product_id'");
	$multipleImages = [];
	if (mysqli_num_rows($resMultipleImages) > 0) {
		while ($rowMultipleImages = mysqli_fetch_assoc($resMultipleImages)) {
			$multipleImages[] = $rowMultipleImages['product_images'];
		}
	}

	$resAttr = mysqli_query($con, "select product_attributes.*,color_master.color,size_master.size from product_attributes 
			left join color_master on product_attributes.color_id=color_master.id and color_master.status=1 
			left join size_master on product_attributes.size_id=size_master.id and size_master.status=1
			where product_attributes.product_id='$product_id'");
	$productAttr = [];
	$colorArr = [];
	$sizeArr = [];
	if (mysqli_num_rows($resAttr) > 0) {
		while ($rowAttr = mysqli_fetch_assoc($resAttr)) {
			$productAttr[] = $rowAttr;
			$colorArr[$rowAttr['color_id']][] = $rowAttr['color'];
			$sizeArr[$rowAttr['size_id']][] = $rowAttr['size'];

			$colorArr1[] = $rowAttr['color'];
			$sizeArr1[] = $rowAttr['size'];
		}
	}
	$is_size = count(array_filter($sizeArr1));
	$is_color = count(array_filter($colorArr1));
	//$colorArr=array_unique($colorArr);
	//$sizeArr=array_unique($sizeArr1);
} else {
	?>
	<script>
		window.location.href = 'index.php';
	</script>
	<?php
}

if (isset($_POST['review_submit'])) {
	$rating = get_safe_value($con, $_POST['rating']);
	$review = get_safe_value($con, $_POST['review']);

	$added_on = date('Y-m-d h:i:s');
	mysqli_query($con, "insert into product_review(product_id,user_id,rating,review,status,added_on) values('$product_id','" . $_SESSION['USER_ID'] . "','$rating','$review','1','$added_on')");
	header('location:product.php?id=' . $product_id);
	die();
}


$product_review_res = mysqli_query($con, "select users.name,product_review.id,product_review.rating,product_review.review,product_review.added_on from users,product_review where product_review.status=1 and product_review.user_id=users.id and product_review.product_id='$product_id' order by product_review.added_on desc");

?>

<body class="s-prodct">
	<!-- header area start -->
	<?php include 'includes/navbar2.php' ?>
	<!-- header area end -->
	<!-- breadcrumbs area start -->
	<!-- <div class="breadcrumbs" style="margin-top: 150px!important;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Product-Details</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	<!-- breadcrumbs area end -->
	<!-- product-details Area Start -->

	<div class="product-details-area mt-5">
		<div class="container mt-5">
			<div class="row mt-5">
				<div class="col-md-5 col-12 mt-5">
					<div class="zoomWrapper mt-5">
						<div id="img-1" class="zoomWrapper single-zoom">
							<a href="#">
								<img id="zoom1" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>"
									data-zoom-image="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>"
									alt="big-1">
							</a>
						</div>
						<!-- <?php if (isset($multipleImages[0])) { ?>
							<div class="single-zoom-thumb">
								<ul class="nav" id="gallery_01">
									<?php
									foreach ($multipleImages as $list) {
										?>
										<li class="">
											<a href="#" class="elevatezoom-gallery"
												data-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list; ?>"
												data-zoom-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list; ?>"><img
													width="70" height="70"
													src="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH . $list; ?>"
													alt="zo-th-4"></a>
										</li>
									<?php } ?>

								</ul>
							</div>
						<?php } ?> -->
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
					<div class="product-list-wrapper mt-5">
						<div class="single-product mt-5">
							<div class="product-content mt-5">
								<h2 class="product-name mt-5"><a href="#">
										<?php echo $get_product['0']['name'] ?>
									</a></h2>
								<div class="rating-price">
									<!-- <div class="pro-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div> -->
									<div class="price-boxes">
										<span class="new-price">PKR
											<?php echo $get_product['0']['price'] ?>
										</span>
									</div>
								</div>
								<div class="product-desc">
									<p>
										<?php echo $get_product['0']['short_desc'] ?>
									</p>
								</div>

								<div class="ht__pro__desc">
									<?php
									$cart_show = 'yes';
									$is_cart_box_show = "hide";
									if ($is_color == 0 && $is_size == 0) {
										$is_cart_box_show = "";
										?>

										<div class="sin__desc">
											<?php

											$getProductAttr = getProductAttr($con, $get_product['0']['id']);

											$productSoldQtyByProductId = productSoldQtyByProductId($con, $get_product['0']['id'], $getProductAttr);

											$pending_qty = $get_product['0']['qty'] - $productSoldQtyByProductId;

											$cart_show = 'yes';
											if ($get_product['0']['qty'] > $productSoldQtyByProductId) {
												$stock = 'In Stock';
											} else {
												$stock = 'Not in Stock';
												$cart_show = '';
											}
											?>
											<p><span>Availability:</span>
												<?php echo $stock ?>
											</p>
										</div>
									<?php } ?>
									<!-- 										
										<div class="actions-e">
											<div class="action-buttons-single">
												<div class="inputx-content">
													<label for="qty">Quantity:</label>
													<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
												</div>
												<div class="add-to-cart">
													<a href="#">Add to cart</a>
												</div>
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div> -->
									<!-- <div class="compare-button">
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
													</div>									 -->
									<!-- </div>
											</div>
										</div> -->

									<?php if ($is_color > 0) { ?>
										<div class="sin__desc align--left">
											<p><span>Color:</span></p>
											<ul class="pro__color">
												<?php
												foreach ($colorArr as $key => $val) {
													echo "<li style='background:" . $val[0] . " none repeat scroll 0 0'><a href='javascript:void(0)' onclick=loadAttr('" . $key . "','" . $get_product['0']['id'] . "','color')>" . $val[0] . "</a></li>";
												}
												?>

											</ul>
										</div>
									<?php } ?>
									<br>
									<?php if ($is_size > 0) { ?>
										<div class="sin__desc align--left">
											<p><span>Size:</span></p>
											<select class="select__size" id="size_attr" onchange="showQty()">
												<option value="">Size</option>
												<?php
												foreach ($sizeArr as $key => $val) {
													echo "<option value='" . $key . "'>" . $val[0] . "</option>";
												}
												?>

											</select>
										</div>
									<?php } ?>


									<?php
									$isQtyHide = "hide";
									if ($is_color == 0 && $is_size == 0) {
										$isQtyHide = "";
									}
									?>

									<div class="sin__desc align--left hide <?php echo $isQtyHide ?>" id="cart_qty">
										<?php
										if ($cart_show != '') {
											?>
											<p><span>Qty:</span>
												<select id="qty" class="select__size">
													<?php
													for ($i = 1; $i <= $pending_qty; $i++) {
														echo "<option>$i</option>";
													}
													?>
												</select>
											</p>
										<?php } ?>
									</div>

									<div id="cart_attr_msg"></div>

									<div class="sin__desc align--left">
										<p><span>Categories:</span></p>
										<ul class="pro__cat__list">
											<li><a href="#">
													<?php echo $get_product['0']['categories'] ?>
												</a></li>
										</ul>
									</div>
								</div>

							</div>

						</div>

						<div id="is_cart_box_show" class="<?php echo $is_cart_box_show ?>">

							<a class="btn btn-primary mt-5 mb-2" href="javascript:void(0)"
								onclick="manage_cart('<?php echo $get_product['0']['id'] ?>','add')">Add to
								cart</a>
						</div>



						<!-- <div class="inputx-content">
													<label for="qty">Quantity:</label>
													<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
												</div>
												<br>
												<div class="add-to-cart">
													<a href="#">Add to cart</a>
												</div>
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
													</div>									 
												</div> -->
					</div>
				</div>

				<!-- <div class="singl-share">
										<a href="#"><img width="406" height="36" src="img/single-share.webp" alt=""></a>
									</div> -->
			</div>
		</div>
	</div>


	<input type="hidden" id="cid" />
	<input type="hidden" id="sid" />

	<!-- Start Product Description -->
	<section class="htc__produc__decription bg__white">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<!-- Start List And Grid View -->
					<ul class="pro__details__tab" role="tablist">
						<li role="presentation" class="description active"><a href="#description" role="tab"
								data-bs-toggle="tab">description</a></li>
						<li role="presentation" class="review"><a href="#review" role="tab" data-bs-toggle="tab"
								aria-selected="true">review</a></li>
					</ul>
					<!-- End List And Grid View -->
				</div>
			</div>
			<!-- Tab panes -->
			<div class="row">
				<div class="col-xs-12">
					<div class="ht__pro__details__content">
						<!-- Start Single Content -->
						<div role="tabpanel mt-5" id="description" class="pro__single__content tab-pane active">
							<div class="pro__tab__content__inner">
								<?php echo $get_product['0']['description'] ?>
							</div>
						</div>
						<!-- End Single Content -->

						<div role="tabpanel mt-5" id="review" class="pro__single__content tab-pane fade">
							<div class="pro__tab__content__inner">
								<?php
								if (mysqli_num_rows($product_review_res) > 0) {

									while ($product_review_row = mysqli_fetch_assoc($product_review_res)) {
										?>

										<article class="row">
											<div class="col-md-12 col-sm-12">
												<div class="panel panel-default arrow left">
													<div class="panel-body">
														<header class="text-left">
															<div><span class="comment-rating">
																	<?php echo $product_review_row['rating'] ?>
																</span> (
																<?php echo $product_review_row['name'] ?>)
															</div>
															<time class="comment-date">
																<?php
																$added_on = strtotime($product_review_row['added_on']);
																echo date('d M Y', $added_on);
																?>



															</time>
														</header>
														<div class="comment-post">
															<p>
																<?php echo $product_review_row['review'] ?>
															</p>
														</div>
													</div>
												</div>
											</div>
										</article>
									<?php }
								} else {
									echo "<h3 class='submit_review_hint'>No review added</h3><br/>";
								}
								?>


								<h3 class="review_heading">Enter your review</h3><br />
								<?php
								if (isset($_SESSION['USER_LOGIN'])) {
									?>
									<div class="row" id="post-review-box" style=>
										<div class="col-md-12">
											<form action="" method="post">
												<select class="form-control" name="rating" required>
													<option value="">Select Rating</option>
													<option>Worst</option>
													<option>Bad</option>
													<option>Good</option>
													<option>Very Good</option>
													<option>Fantastic</option>
												</select> <br />
												<textarea class="form-control" cols="50" id="new-review" name="review"
													placeholder="Enter your review here..." rows="5"></textarea>
												<div class="text-right mt10">
													<button class="btn btn-success mt-3" type="submit" style="position: absolute;
		left: 26%" name="review_submit">Submit</button>
												</div>
											</form>
										</div>
									</div>
								<?php } else {
									echo "<span class='submit_review_hint'>Please <a href='login.php'>login</a> to submit your review</span>";
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<script>
		// function showMultipleImage(im) {
		// 	jQuery('#img-tab-1').html("<img src='" + im + "' data-origin='" + im + "'/>");
		// 	jQuery('.imageZoom').imgZoom();
		// }
		let is_color = '<?php echo $is_color ?>';
		let is_size = '<?php echo $is_size ?>';
		let pid = '<?php echo $product_id ?>';
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const descriptionTab = document.querySelector('.description');
			const reviewTab = document.querySelector('.review');
			const descriptionContent = document.getElementById('description');
			const reviewContent = document.getElementById('review');

			// Function to show description tab and hide review tab
			function showDescription() {
				descriptionTab.classList.add('active');
				reviewTab.classList.remove('active');
				descriptionContent.classList.add('active');
				reviewContent.classList.remove('active');
			}

			// Function to show review tab and hide description tab
			function showReview() {
				reviewTab.classList.add('active');
				descriptionTab.classList.remove('active');
				reviewContent.classList.add('active');
				descriptionContent.classList.remove('active');
			}

			// Show description by default or based on URL hash
			if (window.location.hash === '#review') {
				showReview();
			} else {
				showDescription();
			}

			// Add event listener to description tab
			descriptionTab.addEventListener('click', function (event) {
				event.preventDefault();
				showDescription();
			});

			// Add event listener to review tab
			reviewTab.addEventListener('click', function (event) {
				event.preventDefault();
				showReview();
			});
		});
	</script>


	<!-- product-details Area end -->

	<!-- FOOTER START -->
	<?php include 'includes/footer.php'; ?>
	<!-- FOOTER END -->

	<!-- JS -->
	<?php include 'includes/jsfiles.php';
	ob_flush();
	?>
</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:22 GMT -->

</html>