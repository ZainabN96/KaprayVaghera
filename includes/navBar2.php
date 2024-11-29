<?php
$wishlist_count = 0;
$cat_res = mysqli_query($con, "select * from categories where status=1 order by categories asc");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
	$cat_arr[] = $row;
}

$obj = new add_to_cart();
$totalProduct = $obj->totalProduct();

if (isset($_SESSION['USER_LOGIN'])) {
	$uid = $_SESSION['USER_ID'];

	if (isset($_GET['wishlist_id'])) {
		$wid = get_safe_value($con, $_GET['wishlist_id']);
		mysqli_query($con, "delete from wishlist where id='$wid' and user_id='$uid'");
	}

	$wishlist_count = mysqli_num_rows(mysqli_query($con, "select product.name,product.image,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}


?>


<!-- header area start -->
<header class="header-5 short-stor">
	<div class="container-fluid">
		<div class="row">
			<!-- logo start -->
			<div class="col-lg-3 text-center">

				<div class="top-logo">
					<a href="index.php"><img width="100" height="80" src="img/newlogoo.png" alt="" /></a>
				</div>
			</div>
			<!-- logo end -->
			<!-- mainmenu area start -->
			<div class="col-lg-6 text-center pt-5">
				<div class="disflow" style="height: 60; width:25.19">
					<div class="header-search expand">
						<!-- <div class="search-icon fa fa-search " style="color:black!important"></div> -->
						<!-- <div class="product-search restrain">
							<div class="container nopadding-right"> -->
						<form action="search.php" id="searchform" method="get">
							<div class="input-group">
								<input type="text" class="form-control relative" style="width: 606px; border-radius:39px; padding:25px; "
									placeholder="Search product..." name="str">
								<span class="input-group-btn absolute" style="top: -5px;; right:60px;">
									<button type="submit" class="btn btn-default"><i
											class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
						<!-- </div>
						</div> -->
					</div>
				</div>
			</div>

			<!-- mainmenu area end -->

			<!-- top details area start -->
			<div class="col-lg-3 pt-5">
				<div class="top-detail">
					<!-- language division start -->
					<div class="disflow" style=" color: black !important ;height: 60; width:25.19 ">
						<?php
						if (isset($_SESSION['USER_LOGIN'])) {
						?>
							<div class="expand lang-all disflow">
								<span> Hi
									<?php echo $_SESSION['USER_NAME'] ?>
								</span>
								<!-- <a href="#"><img src="img/country/en.gif" width="18" height="12" alt="">English</a>
									<ul class="restrain language">
										<li><a href="#"><img src="img/country/it.gif"  width="18" height="12" alt="">italiano</a></li>
										<li><a href="#"><img src="img/country/nl_nl.gif"  width="18" height="12" alt="">Nederlands</a></li>
										<li><a href="#"><img src="img/country/de_de.gif"  width="18" height="12" alt="">Deutsch</a></li>
										<li><a href="#"><img src="img/country/en.gif"  width="18" height="12" alt="">English</a></li>
									</ul> -->
							</div>
						<?php
						}
						?>
						<!-- <div class="expand lang-all disflow">
									<a href="#" style="color:black">$ USD</a>
									<ul class="restrain language">
										<li><a href="#">€ Eur</a></li>
										<li><a href="#">$ USD</a></li>
										<li><a href="#">£ GBP</a></li>
									</ul>
								</div> -->
					</div>
					<!-- language division end -->
					<!-- addcart top start -->
					<div class="disflow" style="height: 60; width:25.19">
						<div class="circle-shopping expand">
							<div class="shopping-carts text-end">
								<div class="cart-toggler">

									<a href="cart.php"><i class="icon-bag"></i></a>
									<a href="cart.php"><span class=" htc__qua cart-quantity">
											<?php echo $totalProduct ?>
										</span></a>
								</div>

							</div>
						</div>
					</div>

					<div class="disflow" style="height: 60; width:25.19">
						<div class="circle-shopping expand">
							<div class="shopping-carts text-end">
								<div class="cart-toggler">

									<a href="wishlist.php"><i class="fa fa-heart" style="color:black"></i></a>
									<a href="wishlist.php"><span class=" htc__wishlist heart-quantity">
											<?php echo $wishlist_count ?>
										</span></a>
								</div>

							</div>
						</div>
					</div>

					<div class="disflow" style="height: 60; width:25.19">
						<a href="#" id="contactUsBtn" class="whatsapp-icon">
							<i class="fa fa-whatsapp whatsapp-icon-custom-size" style="color:black"></i>
						</a>
					</div>

					<!-- addcart top start -->
					<!-- search divition end -->
					<div class="disflow" style="height: 60; width:25.19">
						<!-- <div class="expand dropps-menu"> -->
						<a href="login.php"><i class="fa fa-user " style="color:black;font-size:29px;padding:0 12px;"></i></a>
						<!-- <ul class="restrain language">
								<?php
								if (isset($_SESSION['USER_LOGIN'])) {
								?>
									<li><a href="profile.php">My Account</a></li>
								<?php
								}
								?>
								<li><a href="wishlist.php">My Wishlist</a></li>
								<li><a href="cart.php">My Cart</a></li>
								<li><a href="checkout.php">Checkout</a></li>

								<?php
								if (isset($_SESSION['USER_LOGIN'])) {
								?>
									<li><a href="my_order.php">My Orders</a></li>
									<li><a href="logout.php">Log out</a></li>
								<?php
								} else {
								?>
									<li><a href="login.php">Log In</a></li>
								<?php
								}
								?>
							</ul> -->
						<!-- </div> -->
					</div>
				</div>
			</div>
			<!-- top details area end -->
		</div>
	</div>
</header>
<!-- header area end -->


<script>
	// Ensure the DOM content is fully loaded before adding event listeners
	document.addEventListener('DOMContentLoaded', function() {
		// Toggle mobile navigation
		document.querySelector('.openNav').addEventListener('click', function() {
			document.getElementById("mob-menu").classList.toggle("show");
			document.querySelector('.categories-menu').classList.toggle("show");
		});

		// Toggle category dropdown
		document.querySelectorAll('.expand-cat').forEach(item => {
			item.addEventListener('click', function() {
				this.parentNode.querySelector('.sub-menu').classList.toggle('show');
			});
		});
	});
</script>