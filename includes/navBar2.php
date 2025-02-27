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
<div class="marquee-container">
	<span class="marquee-text">The delivery will be completed within 6 to 7 days</span>
</div>
<!-- <div class="marquee-container">
	<span class="marquee-text">Delivery service available only in Lahore! Order now and experience fast, reliable service and Free Delivery.</span>
</div> -->
<!-- header area start -->
<header class="header-5 short-stor">
	<div class="container-fluid">
		<div class="row align-items-center">
			<!-- logo start -->
			<div class="col-3 d-none d-lg-block d-flex align-items-center">
				<div class="toggle-logo-container">
					<div class="top-logo">
						<a href="index.php">
							<img width="120" height="50" src="img/newlogoo.png" alt="Logo" />
						</a>
					</div>
				</div>
			</div>
			<div class="col-6 d-lg-none d-flex align-items-center">
				<div class="toggle-logo-container">
					<button id="toggleSidebar">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
					<div class="top-logo">
						<a href="index.php">
							<img src="img/newlogoo.png" alt="Logo" />
						</a>
					</div>
				</div>
			</div>

			<!-- logo end -->
			<!-- mainmenu area start -->
			<div class="col-lg-6 d-none d-lg-block text-center pt-5">
				<div class="">
					<div class="header-search expand">
						<form action="search.php" id="searchform" method="get" class="sreach custom-search-form">
							<div class="input-group">
								<input type="text" class="sreach srch custom-search-input form-control" placeholder="FIND YOUR FAVOURITES" name="str">
								<span class="input-group-btn srchspan" style="">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- mainmenu area end -->

			<!-- top details area start -->
			<div class="col-6 col-lg-3 d-flex justify-content-end align-items-center pt-5">
				<div class="top-detail">
					<!-- language division start -->
					<div class="disflow text-black" style="height: 60; width:25.19 ">
						<?php
						if (isset($_SESSION['USER_LOGIN'])) {
						?>
							<div class="expand lang-all disflow">
								<a href="logout.php">
									<span> Hi
										<?php echo $_SESSION['USER_NAME'] ?>
									</span>
								</a>
							</div>
						<?php
						}
						?>

					</div>
					<!-- language division end -->
					<div class="disflow" style="height: 60; width:25.19">
						<a href="#" id="contactUsBtn" class="whatsapp-icon">
							<i class="fa fa-whatsapp whatsapp-icon-custom-size  text-black"></i>
						</a>
					</div>

					<div class="disflow" style="height: 60px; width: 25.19px;">
						<a href="login.php">
							<i class="fa fa-user text-black user"></i>
						</a>
					</div>
					<!-- addcart top start -->
					<div class="disflow" style="height: 60; width:25.19">
						<div class="circle-shopping expand">
							<div class="shopping-carts text-end">
								<div class="cart-toggler">
									<a href="cart.php"><i class="icon-bag"></i></a>
									<a href="cart.php">
										<span class=" htc__qua cart-quantity">
											<?php echo $totalProduct ?>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="disflow" style="height: 60; width:25.19">
						<div class="circle-shopping expand">
							<div class="shopping-carts text-end">
								<div class="cart-toggler">

									<a href="wishlist.php"><i class="fa fa-heart text-black"></i></a>
									<a href="wishlist.php"><span class=" htc__wishlist heart-quantity">
											<?php //echo $wishlist_count 
											?>
										</span></a>
								</div>

							</div>
						</div>
					</div> -->


				</div>
			</div>
			<!-- top details area end -->


		</div>
		<!-- Mobile Search Bar -->
		<div class="row d-lg-none mb-3">
			<div class="col-12">
				<div class="">
					<div class="header-search expand">
						<form action="search.php" id="searchform" method="get" class="sreach custom-search-form">
							<div class="input-group">
								<input type="text" class="sreach srch custom-search-input form-control" placeholder="FIND YOUR FAVOURITES" name="str">
								<span class="input-group-btn srchspan" style="">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
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
				<!-- <div class="sidebar" id="sidebar">
					<span class="close-btn" id="closeSidebar">✖</span>
					<div class="my-4">
						<a href="#" class="btn-default"><i class="fa fa-phone border p-3"></i> </a> | <a href="#" class="btn-default"><i class="fa fa-user-o border p-3" aria-hidden="true"></i>
						</a>
					</div>
					<hr>
					<ul class="list-unstyled">
						<li class="d-flex justify-content-between">
							<a href="javascript:void(0);" class="expand-cat">
								<?php //echo $list['categories']; 
								?>
								<i class="fa fa-plus"></i>
							</a>
							<ul class="sub-menu">
								<?php
								$cat_id = $list['id'];
								$sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
								if (mysqli_num_rows($sub_cat_res) > 0) {
									while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
										//echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>';
									}
								}
								?>
							</ul>
						</li>
						<!-- <li class="d-flex justify-content-between"><span>Category 2</span> <span>➕</span></li> 
						<li class="d-flex justify-content-between"><span>About Us</span></li>
					</ul>
				</div> -->
				<div class="sidebar-overlay"></div>

				<!-- Sidebar (Left Side) -->
				<div class="sidebar" id="sidebar">
					<!-- Close Button in a Small White Box -->
					<div class="sidebar-header">
						<a href="javascript:void(0);" class="closebtn">
							<span>&times;</span>
						</a>
					</div>

					<!-- Top Icons (Login & Contact) -->
					<div class="sidebar-top-icons">
						<a href="login.php" class="icon"><i class="fa fa-user"></i> Login </a>
						<a href="contact-us.php" class="icon"><i class="fa fa-phone"></i> Contact Us</a>
						<a href="contact-us.php" class="icon "><i class="fa fa-building-o"></i> Store</a>
					</div>

					<!-- Line Separator -->
					<hr>
					<!-- Categories List -->
					<ul class="categories-list">
						<li><a href="index.php" class="expand-cat"> Home</a></li>
						<?php foreach ($cat_arr as $list) { ?>
							<li>
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
											echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '" class="expand-cat sub-cat">' . $sub_cat_rows['sub_categories'] . '</a></li>';
										}
									}
									?>
								</ul>
							</li>
						<?php } ?>
						<li><a href="about-us.php" class="expand-cat"> About Us</a><i class="fa fa-qaq"></i></li>
					</ul>
				</div>

				<!-- <div class="row">
					<div class="col-sm-12 mobile-menu-area" style=" background-color:black;">
						<div class="mobile-menu hidden-md d-lg-none" id="mob-menu">
							<span class="mobile-menu-title">Menu</span>
							<a href="javascript:void(0);" class="openNav">
								<i class="fa fa-bars" style="color: white;"></i>
							</a>
							 Categories Menu
							<div class="categories-menu">
								<ul class="categories-list">
									<?php //foreach ($cat_arr as $list) { 
									?>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);" class="expand-cat">
												<?php //echo $list['categories']; 
												?>
												<i class="fa fa-plus"></i>
											</a>
											<ul class="sub-menu">
												<?php
												$cat_id = $list['id'];
												$sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
												if (mysqli_num_rows($sub_cat_res) > 0) {
													while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
														//echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>';
													}
												}
												?>
											</ul>
										</li>
									<?php //} 
									?>
								</ul>
							</div>
						</div>
					</div>
				</div> -->
				<!-- mobile menu end -->
			</div>
		</div>
	</div>
</header>
<!-- header area end -->