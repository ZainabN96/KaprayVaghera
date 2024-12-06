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

<link rel="stylesheet" href="styles.css">
<div class="marquee-container">
		<span class="marquee-text">Delivery service available only in Lahore! Order now and experience fast, reliable service and Free Delivery.</span>
	</div>
<!-- header area start -->
<header class="header-5 short-stor">
	<div class="container-fluid">
		<div class="row">
			<!-- logo start -->
			<div class="col-lg-3 text-center">

				<div class="top-logo">
					<a href="index.php">
						<img width="80" height="50" src="img/newlogoo.png" alt="" /></a>
				</div>
			</div>
			<!-- logo end -->
			<!-- mainmenu area start -->
			<div class="col-lg-6 text-center pt-5">
				<div class="disflow">
					<div class="header-search expand">
						<!-- <div class="search-icon fa fa-search " style="color:black!important"></div> -->
						<!-- <div class="product-search restrain">
							<div class="container nopadding-right"> -->
							<form action="search.php" id="searchform" method="get" class="custom-search-form">
    <div class="input-group">
        <input type="text" class="custom-search-input form-control" style="width: 550px; border-radius:39px; padding:25px;" placeholder="Search product..." name="str">
        <span class="input-group-btn" style="position: absolute; top: 1px; right: 60px;">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
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
								<a href="logout.php"><span> Hi
										<?php echo $_SESSION['USER_NAME'] ?>
									</span>
								</a>
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

<header class="header-5 short-stor ">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="mainmenu about">
					<nav class="nav-links">
						<ul class="main__menu">
							<?php foreach ($cat_arr as $list) { ?>
								<li class="drop">
									<a href="categories.php?id=<?php echo $list['id']; ?>">
										<?php echo $list['categories']; ?>
									</a>
									<ul class="dropdown">
										<?php
										$cat_id = $list['id'];
										$sub_cat_res = mysqli_query($con, "SELECT * FROM sub_categories WHERE status=1 AND categories_id='$cat_id'");
										if (mysqli_num_rows($sub_cat_res) > 0) {
											while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
												echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>';
											}
										} else {
											echo '<li>No subcategories available</li>'; // Optional fallback
										}
										?>
									</ul>
								</li>
							<?php } ?>
							<li><a href="about-us.php">About Us</a></li>
						</ul>
					</nav>


				</div>
				<!-- mobile menu start -->
				<div class="row">
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md d-lg-none" id="mob-menu">
							<span class="mobile-menu-title">Menu</span>
							<a href="javascript:void(0);" class="openNav">
								<i class="fa fa-bars" style="color: white;"></i>
							</a>
							<!-- Categories Menu -->
							<div class="categories-menu">
								<ul class="categories-list">
									<?php foreach ($cat_arr as $list) { ?>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);" class="expand-cat">
												<?php echo $list['categories']; ?>
												<i class="fa fa-plus"></i>
											</a>
											<ul class="sub-menu">
												<?php
												$cat_id = $list['id'];
												$sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
												if (mysqli_num_rows($sub_cat_res) > 0) {
													while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
														echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>';
													}
												}
												?>
											</ul>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- mobile menu end -->
			</div>
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


	document.addEventListener('DOMContentLoaded', function() {
		// Add toggle behavior for dropdowns in mobile view
		document.querySelectorAll('li.drop > a').forEach(function(categoryLink) {
			categoryLink.addEventListener('click', function(e) {
				e.preventDefault(); // Prevent the link from navigating
				const parent = this.parentElement; // Get the parent <li>
				parent.classList.toggle('open'); // Toggle the "open" class
			});
		});
	});
</script>