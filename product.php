<!DOCTYPE html>
<html class="no-js" lang="">
    
<!-- Mirrored from htmldemo.net/lavoro/lavoro/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->
	<?php 
		ob_start();
		$title='Product-Details | Kapray Veghera';
		include 'includes/header.php'; 
		if(isset($_GET['id'])){
			$product_id=mysqli_real_escape_string($con,$_GET['id']);
			if($product_id>0){
				$get_product=get_product($con,'','',$product_id);
			}else{
				?>
				<script>
				window.location.href='index.php';
				</script>
				<?php
			}
			
			$resMultipleImages=mysqli_query($con,"select product_images from product_images where product_id='$product_id'");
			$multipleImages=[];
			if(mysqli_num_rows($resMultipleImages)>0){
				while($rowMultipleImages=mysqli_fetch_assoc($resMultipleImages)){
					$multipleImages[]=$rowMultipleImages['product_images'];
				}
			}
			
			$resAttr=mysqli_query($con,"select product_attributes.*,color_master.color,size_master.size from product_attributes 
			left join color_master on product_attributes.color_id=color_master.id and color_master.status=1 
			left join size_master on product_attributes.size_id=size_master.id and size_master.status=1
			where product_attributes.product_id='$product_id'");
			$productAttr=[];
			$colorArr=[];
			$sizeArr=[];
			if(mysqli_num_rows($resAttr)>0){
				while($rowAttr=mysqli_fetch_assoc($resAttr)){
					$productAttr[]=$rowAttr;
					$colorArr[$rowAttr['color_id']][]=$rowAttr['color'];
					$sizeArr[$rowAttr['size_id']][]=$rowAttr['size'];
					
					$colorArr1[]=$rowAttr['color'];
					$sizeArr1[]=$rowAttr['size'];
				}
			}
			$is_size=count(array_filter($sizeArr1));
			$is_color=count(array_filter($colorArr1));
			//$colorArr=array_unique($colorArr);
			//$sizeArr=array_unique($sizeArr1);
		}else{
			?>
			<script>
			window.location.href='index.php';
			</script>
			<?php
		}
		
		if(isset($_POST['review_submit'])){
			$rating=get_safe_value($con,$_POST['rating']);
			$review=get_safe_value($con,$_POST['review']);
			
			$added_on=date('Y-m-d h:i:s');
			mysqli_query($con,"insert into product_review(product_id,user_id,rating,review,status,added_on) values('$product_id','".$_SESSION['USER_ID']."','$rating','$review','1','$added_on')");
			header('location:product.php?id='.$product_id);
			die();
		}
		
		
		$product_review_res=mysqli_query($con,"select users.name,product_review.id,product_review.rating,product_review.review,product_review.added_on from users,product_review where product_review.status=1 and product_review.user_id=users.id and product_review.product_id='$product_id' order by product_review.added_on desc");
		
	?>

    <body class="s-prodct">
		<!-- header area start -->
		<?php include 'includes/Navbar.php' ?>
		<!-- header area end -->
		<!-- breadcrumbs area start -->
		<div class="breadcrumbs" style="margin-top: 150px!important;">
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
		</div>
		<!-- breadcrumbs area end -->
		<!-- product-details Area Start -->
		<div class="product-details-area mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-12">
						<div class="zoomWrapper">
							<div id="img-1" class="zoomWrapper single-zoom">
								<a href="#">
									<img id="zoom1" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" data-zoom-image="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="big-1">
								</a>
							</div>
							<?php if(isset($multipleImages[0])){?>
								<div class="single-zoom-thumb">
									<ul class="nav" id="gallery_01">
										<?php
											foreach($multipleImages as $list){
											?>
											<li class="">
												<a href="#" class="elevatezoom-gallery" data-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH.$list; ?>" data-zoom-image="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH.$list; ?>"><img width="70" height="83" src="<?php echo PRODUCT_MULTIPLE_IMAGE_SITE_PATH.$list; ?>" alt="zo-th-4"></a>
											</li>
										<?php }?>
										
									</ul>
								</div>
							<?php }?>
						</div>
					</div>
					<div class="col-md-7 col-12">
						<div class="product-list-wrapper">
							<div class="single-product">
								<div class="product-content">
									<h2 class="product-name"><a href="#"><?php echo $get_product['0']['name'] ?></a></h2>
									<div class="rating-price">	
										<!-- <div class="pro-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div> -->
										<div class="price-boxes">
											<span class="new-price">$<?php echo $get_product['0']['price']?></span>
										</div>
									</div>
									<div class="product-desc">
										<p><?php echo $get_product['0']['short_desc'] ?></p>
									</div>
									<?php
										$is_cart_box_show="";
									
										$getProductAttr=getProductAttr($con,$get_product['0']['id']);
									
										$productSoldQtyByProductId=productSoldQtyByProductId($con,$get_product['0']['id'],$getProductAttr);
										
										$pending_qty=$get_product['0']['qty']-$productSoldQtyByProductId;
										
										$cart_show='yes';
										if($get_product['0']['qty']>$productSoldQtyByProductId){
											$stock='In Stock';			
										}else{
											$stock='Not in Stock';
											$cart_show='';
										}
									?>
									<p class="availability in-stock">Availability: <span><?php echo $stock?></span></p>
									<?php
										$cart_show='yes';
										$is_cart_box_show="hide";
										if($is_color==0 && $is_size==0){
										?>
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
													</div>
													<!-- <div class="compare-button">
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
													</div>									 -->
												</div>
											</div>
										</div>
									<?php }?>
									<?php if($is_color>0){?>
										<div class="actions-e">
											<div class="action-buttons-single">
												<div class="inputx-content">
													<label for="color">Color:</label>
													
													<?php 
														foreach($colorArr as $key=>$val){
															echo "<span style='none repeat scroll 0 0 text-black'><a href='javascript:void(0)' class='input-text' onclick=loadAttr('".$key."','".$get_product['0']['id']."','color')>".$val[0]."</a></span>";
														}
														?>
												</div>
												<br>
												<?php if($is_size>0){?>
													<div class="inputx-content">
														<label for="size">Size:</label>
														<select class="select qty" id="size_attr" onchange="showQty()">
															<option value=""></option>
															<?php 
															foreach($sizeArr as $key=>$val){
																echo "<option value='".$key."'>".$val[0]."</option>";
															}
															?>
															
														</select>
													</div>
													<br>
												<?php } ?>

												<div class="inputx-content">
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
													<!-- <div class="compare-button">
														<a href="#" data-bs-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
													</div>									 -->
												</div>
											</div>
										</div>
									<?php
									}?>
									<!-- <div class="singl-share">
                                        <a href="#"><img width="406" height="36" src="img/single-share.webp" alt=""></a>
                                    </div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="single-product-tab">
						  <!-- Nav tabs -->
						<ul class="details-tab nav">
							<li class="nav-item"><button class="nav-link active" data-bs-target="#home" data-bs-toggle="tab">Description</button></li>
							<li class="nav-item"><button class="nav-link" data-bs-target="#messages" data-bs-toggle="tab"> Review (1)</button></li>
						</ul>
						  <!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane show active" id="home">
								<div class="product-tab-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. </p>
									<p>Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>	
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="messages">
								<div class="row">
									<div class="single-post-comments col-lg-6 mx-auto">
										<div class="comments-area">
											<h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
											<div class="comments-list">
												<ul>
													<li>
														<div class="comments-details">
															<div class="comments-list-img">
																<img width="50" height="50" src="img/user-1.webp" alt="">
															</div>
															<div class="comments-content-wrap">
																<span>
																	<b><a href="#">Admin - </a></b>
																	<span class="post-time">October 6, 2022 at 1:38 am</span>
																</span>
																<p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
															</div>
														</div>
													</li>									
												</ul>
											</div>
										</div>
										<div class="comment-respond">
											<h3 class="comment-reply-title">Add a review</h3>
											<span class="email-notes">Your email address will not be published. Required fields are marked *</span>
											<form action="#">
												<div class="row">
													<div class="col-md-12">
														<p>Name *</p>
														<input type="text">
													</div>
													<div class="col-md-12">
														<p>Email *</p>
														<input type="email">
													</div>
													<div class="col-md-12">
														<p>Your Rating</p>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star"></i></a>
															<a href="#"><i class="fa fa-star"></i></a>
															<a href="#"><i class="fa fa-star"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
													<div class="col-md-12 comment-form-comment">
														<p>Your Review</p>
														<textarea id="message" cols="30" rows="10"></textarea>
														<input type="submit" value="Submit">
													</div>
												</div>
											</form>
										</div>						
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- product-details Area end -->
		<!-- product section start -->
		<div class="our-product-area new-product">
			<div class="container">
				<div class="area-title">
					<h2>New products</h2>
				</div>
				<!-- our-product area start -->
				<div class="row">
					<div class="col-12">
						<div class="features-curosel owl-carousel owl-theme">
							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-1.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-2.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$222.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>

							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-5.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-6.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$280.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>
							
							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-9.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-10.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$400.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>

							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-13.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-1.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$100.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>

							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-4.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-5.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$222.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>

							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-8.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-9.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$400.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>

							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<span class="sale-text">Sale</span>
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-11.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-12.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$213.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>

							<div class="owl-slider-rows--single">
								<!-- single-product start -->
								<div class="single-product slider-item">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" width="540" height="660" src="img/products/product-11.webp" alt="" />
											<img class="secondary-image" width="540" height="660" src="img/products/product-2.webp" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
													</div>
													<div class="compare-button">
														<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
													</div>									
												</div>
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$250.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>
						</div>
					</div>
				</div>
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- FOOTER START -->
		<?php include 'includes/footer.php'; ?>
		<!-- FOOTER END -->
		
        <!-- JS -->
        <?php include 'includes/jsfiles.php';?>
    </body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:22 GMT -->
</html>
