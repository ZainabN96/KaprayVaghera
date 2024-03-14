
<?php
require('connection.php');
require('functions.php');
require('add_to_cart.php');

if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$uid=$_SESSION['USER_ID'];

$res=mysqli_query($con,"select product.name,product.image,product_attributes.price,product_attributes.mrp,product.id as pid,wishlist.id from product,wishlist,product_attributes where wishlist.product_id=product.id and wishlist.user_id='$uid' and product_attributes.product_id=product.id group by product_attributes.product_id");
?>


<!DOCTYPE html>
<html class="no-js" lang="">
	
    <?php
		$title='Home | Kapray Vaghera';
		include 'includes/header.php'; 
	?>
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
						<?php
										while($row=mysqli_fetch_assoc($res)){
										?>
											<tr>
												<td class="product-thumbnail"><a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"  /></a></td>
												<td class="product-name"><a href="#"><?php echo $row['name']?></a>
													
												</td>

												<td class="product-price">
									<span class="amount"><?php echo $row['price']?></span>
								</td>
												
												<td class="product-remove"><a href="wishlist.php?wishlist_id=<?php echo $row['id']?>"><i class="bi bi-x-lg"></i></a></td>
												<td class="product-add-to-cart"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $row['pid']?>','add')">Add to Cart</a></td>
											</tr>
											<?php } ?>
							<tr>
							<!-- <tr>
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
							</tr> -->
							<!-- <tr>
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
							</tr> -->
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