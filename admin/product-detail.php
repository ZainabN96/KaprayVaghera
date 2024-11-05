<?php
require('top.inc.php');
if (isset($_GET['id'])) {
    $product_id = mysqli_real_escape_string($con, $_GET['id']);

    if ($product_id > 0) {
        $get_product = get_product($con, '', '', $product_id);

        if (!$get_product) {
            echo "<script>alert('Product not found'); window.location.href = 'index.php';</script>";
            exit();
        }
    }

    $resMultipleImages = mysqli_query($con, "SELECT product_images FROM product_images WHERE product_id='$product_id'");
    $multipleImages = [];
    if (mysqli_num_rows($resMultipleImages) > 0) {
        while ($rowMultipleImages = mysqli_fetch_assoc($resMultipleImages)) {
            $multipleImages[] = $rowMultipleImages['product_images'];
        }
    }

    $stmt = $con->prepare("SELECT product_attributes.*, color_master.color, size_master.size 
        FROM product_attributes 
        LEFT JOIN color_master ON product_attributes.color_id = color_master.id AND color_master.status = 1 
        LEFT JOIN size_master ON product_attributes.size_id = size_master.id AND size_master.status = 1 
        WHERE product_attributes.product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $resAttr = $stmt->get_result();

    $productAttr = [];
    $colorArr = [];
    $sizeArr = [];
    $colorArr1 = [];
    $sizeArr1 = [];

    if ($resAttr->num_rows > 0) {
        while ($rowAttr = $resAttr->fetch_assoc()) {
            $productAttr[] = $rowAttr;
            $colorArr[$rowAttr['color_id']][] = $rowAttr['color'];
            $sizeArr[$rowAttr['size_id']][] = $rowAttr['size'];

            $colorArr1[] = $rowAttr['color'];
            $sizeArr1[] = $rowAttr['size'];
        }
    }

    $is_size = !empty($sizeArr1) ? count(array_filter($sizeArr1)) : 0;
    $is_color = !empty($colorArr1) ? count(array_filter($colorArr1)) : 0;

} else {
    // echo "<script>window.location.href = 'index.php';</script>";
    exit();
}

if (isset($_POST['review_submit'])) {
    $rating = get_safe_value($con, $_POST['rating']);
    $review = get_safe_value($con, $_POST['review']);

    $added_on = date('Y-m-d h:i:s');
    mysqli_query($con, "INSERT INTO product_review(product_id,user_id,rating,review,status,added_on) VALUES('$product_id','" . $_SESSION['USER_ID'] . "','$rating','$review','1','$added_on')");
    header('location:product.php?id=' . $product_id);
    die();
}

$product_review_res = mysqli_query($con, "SELECT users.name,product_review.id,product_review.rating,product_review.review,product_review.added_on FROM users,product_review WHERE product_review.status=1 AND product_review.user_id=users.id AND product_review.product_id='$product_id' ORDER BY product_review.added_on DESC");
?>



<div class="content pb-0">
	<div class="product">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Product Details </h4>
					</div>
					<div class="card-body card-block">
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
											<?php if (isset($multipleImages[0])) { ?>
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
											<?php } ?>
										</div>
									</div>
									<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40  mt-5">
										<div class=" product-list-wrapper mt-5">
											<div class="single-product mt-5">
												<div class="product-content mt-5">
													<h2 class="product-name mt-5"><a href="#">
															<?php echo $get_product['0']['name'] ?>
														</a></h2>
													<div class="rating-price">

														<div class="price-boxes">
															<span class="new-price">PKR
																<?php echo $get_product['0']['price'] ?>
															</span>
														</div>
													</div>
													<div class="product-desc">
														<h1>Product Details:</h1>
														<p><span>Product Name:</span>
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

														<!-- <?php if ($is_color > 0) { ?>
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
									<br> -->
														<?php if ($is_color > 0) { ?>
															<div class="sin__desc align--left">
																<p><span>Color:</span></p>
																<ul class="pro__color">
																	<?php
																	foreach ($colorArr as $key => $val) {
																		echo "<li style='background:" . htmlspecialchars($val[0]) . " none repeat scroll 0 0'>
                        <a href='javascript:void(0)' onclick=\"loadAttr('" . htmlspecialchars($key) . "', '" . htmlspecialchars($get_product[0]['id']) . "', 'color')\">" . htmlspecialchars($val[0]) . "</a>
                      </li>";
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
															<p><span>Category:</span></p>
															<ul class="pro__cat__list">
																<li><a>
																		<?php echo $get_product['0']['categories'] ?>
																	</a></li>
															</ul>
														</div>
														<br>
														<div>
															<img src="img/sizechart.jpeg" alt="">
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

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require('footer.inc.php');
?>