<?php
	
	require('connection.php');
	require('functions.php');
	require('add_to_cart.php');
	
	$cat_res=mysqli_query($con,"select * from categories where status=1");
	$cat_arr=array();
	while($row=mysqli_fetch_assoc($cat_res)){
		$cat_arr[]=$row;	
	}
?>
<!DOCTYPE html>
<html class="no-js" lang="">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kapray Wagara | Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/iconbg.ico">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8i7uZLdMC+5EW/CNE3I5I5PjGQy4Kx8V5+5u4N2K4LrD2f5Y5f5l5u5l5" crossorigin="anonymous">
		<!-- Fonts
		============================================ -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.carousel.css">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.theme.css">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="css/owl.transitions.css">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="fonts/font-icon.css">
		
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="css/animate.css">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="css/normalize.css">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="css/main.css">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="style.css">
        
        <!-- responsive CSS
		============================================ -->          
        <link rel="stylesheet" href="css/responsive.css">

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="home-five">
        
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
					<div class="col-lg-6 text-center">
						<div class="mainmenu">
							<nav>
								<ul class="d-flex align-items-right justify-content-right">
									
									<li class="expand" href=""><a >Shop</a>
										<div class="restrain mega-menu megamenu1">
											<div class="">
											<?php 
										
												foreach($cat_arr as $list){
													?>
													<div class="col-12">
														<span>
															
															 <!-- <a class="mega-menu-title" > -->
																<!-- <?php echo $list['categories']?> -->
															 <!-- </a>  -->
															<?php echo '<a class="mega-menu-title" href="' . strtolower($list['categories']) . '.php">' . $list['categories'] . '</a>'; ?>
														
															<?php
															
																$cat_id=$list['id'];
																$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
																if(mysqli_num_rows($sub_cat_res)>0){
																	while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
																		echo '<a href="categories.php?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a>';
																	}
																} 
															?>
																<!-- <a href="">Shalwar</a>
																<a>Trousers</a>											 -->
														</span>
													</div>
													<?php	
												}
											?>
											</div>
										
											<div class="">
												<span class="block-last">
													<img class="img-fluid" src="img/brown kurta.webp" alt="" />
												</span>
											</div>
										</div>
									</li>
									<li><a href="about-us.php">About Us</a></li>
								</ul>
							</nav>
						</div> 
						<!-- mobile menu start -->
						<div class="row">
							<div class="col-sm-12 mobile-menu-area">
								<div class="mobile-menu hidden-md d-lg-none" id="mob-menu">
									<span class="mobile-menu-title">Menu</span>
									<nav>
										<ul>
											
											<li>
												<a href="shop-grid.html">Shop</a>
												<ul>
													<?php 
														foreach($cat_arr as $list){
															?>
															<li><a href=""><?php echo $list['categories']?> </a>
															<?php
																$cat_id=$list['id'];
																$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
																if(mysqli_num_rows($sub_cat_res)>0){
																?>
																	<ul>
																	<?php
																		while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
																			echo '<li><a href="categories.php?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></li>';
																		}
																	?>
																	</ul>
																	<?php
																} 
															?>
															
															</li>
														<?php	
														}
													?>
													<!-- <li><a href="shop-grid.html"></a>
													<ul>
															<li><a href="shop-grid.html">Shalwar</a></li>
															<li><a href="shop-grid.html">Trousers</a></li>
														
														</ul>
													</li>
													<li><a class="mega-menu-title" href="shop-grid.html">  </a>
														<ul>
															<li><a href="shop-grid.html">Short Shirts</a></li>
															<li><a href="shop-grid.html">Full Suit</a></li>
															<li><a href="shop-grid.html">Kameez</a></li>
															
														</ul>
													</li> -->
												
												</ul>
											</li>
											<li><a href="about-us.php">About Us</a></li>
											<!-- <li><a href="about-us.php">About Us</a></li>
											<li><a href="contact-us.html">Contact Us</a></li> -->
										</ul>
									</nav>
								</div>						
							</div>
						</div>
						<!-- mobile menu end -->
					</div>
					<!-- mainmenu area end -->
					<!-- top details area start -->
					<div class="col-lg-3 nopadding-left">
						<div class="top-detail">
							<!-- language division start -->
							<div class="disflow" style="height: 60; width:25.19">
							<?php 
								if(isset($_SESSION['USER_LOGIN'])){
							?>
								<div class="expand lang-all disflow">
									<span><?php echo $_SESSION['USER_NAME']?></span>
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
								<div class="expand lang-all disflow">
									<a href="#">$ USD</a>
									<ul class="restrain language">
										<li><a href="#">€ Eur</a></li>
										<li><a href="#">$ USD</a></li>
										<li><a href="#">£ GBP</a></li>
									</ul>
								</div>
							</div>
							<!-- language division end -->
							<!-- addcart top start -->
							<div class="disflow" style="height: 60; width:25.19">
								<div class="circle-shopping expand">
									<div class="shopping-carts text-end">
										<div class="cart-toggler">
											<a href="#"><i class="icon-bag"></i></a>
											<a href="#"><span class="cart-quantity">2</span></a>
										</div>
										<div class="restrain small-cart-content">
											<ul class="cart-list">
												<li>
													<a class="sm-cart-product" href="product-details.html">
														<img  width="50" height="66" src="img/products/sm-products/cart1.webp" alt="">
													</a>
													<div class="small-cart-detail">
														<a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
														<a href="#" class="edit-btn"><img  width="11" height="11" src="img/btn_edit.gif" alt="Edit Button" /></a>
														<a class="small-cart-name" href="product-details.html">Voluptas nulla</a>
														<span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
													</div>
												</li>
												<li>
													<a class="sm-cart-product" href="product-details.html">
														<img  width="50" height="66" src="img/products/sm-products/cart2.webp" alt="">
													</a>
													<div class="small-cart-detail">
														<a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
														<a href="#" class="edit-btn"><img  width="11" height="11" src="img/btn_edit.gif" alt="Edit Button" /></a>
														<a class="small-cart-name" href="product-details.html">Donec ac tempus</a>
														<span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
													</div>
												</li>
											</ul>
											<p class="total">Subtotal: <span class="amount">$155.00</span></p>
											<p class="buttons">
												<a href="checkout.html" class="button">Checkout</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="disflow" style="height: 60; width:25.19">
								<a href="#" id="contactUsBtn" class="whatsapp-icon">
									<i class="fa fa-whatsapp whatsapp-icon-custom-size"></i>
								</a>
							</div>

							<!-- addcart top start -->
							<!-- search divition start -->
							<div class="disflow" style="height: 60; width:25.19">
								<div class="header-search expand">
									<div class="search-icon fa fa-search"></div>
									<div class="product-search restrain">
										<div class="container nopadding-right">
											<form action="https://htmldemo.net/lavoro/lavoro/index.php" id="searchform" method="get">
												<div class="input-group">
													<input type="text" class="form-control" maxlength="128" placeholder="Search product...">
													<span class="input-group-btn">
														<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- search divition end -->
							<div class="disflow" style="height: 60; width:25.19">
								<div class="expand dropps-menu">
									<a href="#"><i class="fa fa-align-right fa-lg"></i></a>
									<ul class="restrain language">
										<li><a href="login.html">My Account</a></li>
										<li><a href="wishlist.html">My Wishlist</a></li>
										<li><a href="cart.html">My Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="#">Testimonial</a></li>
										<?php 
										if(isset($_SESSION['USER_LOGIN'])){
											?>
											<li><a href="login.html">Log out</a></li>
										<?php
										}
										
										else{
										?>
										<li><a href="login.html">Log In</a></li>
										<?php
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- top details area end -->
				</div>
			</div>
		</header>
		<!-- header area end -->