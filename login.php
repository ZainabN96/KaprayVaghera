<?php
require('connection.php');
require('functions.php');
require('add_to_cart.php');

if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
		window.location.href='my_order.php';
	</script>
	<?php
}
?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login | Kapray Vaghera</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon
		============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/iconbg.ico">

	<!-- Fonts
		============================================ -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
		rel="stylesheet">

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

	<!-- jquery-ui CSS
		============================================ -->
	<link rel="stylesheet" href="css/jquery-ui.css">

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


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
		integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

	<!-- <link rel="stylesheet" type="text/css" href="js/vendor/fontawesome-free/css/all.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="js/vendor/animate/animate.min.css"> -->

	<!-- Plugins CSS File -->
	<!-- <link rel="stylesheet" type="text/css" href="js/vendor/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="js/vendor/owl-carousel/owl.carousel.min.css"> -->

	<!-- Main CSS File -->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.min.css"> -->

	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!-- header area start -->
	<!-- header area start -->
	<?php include 'includes/navBar2.php' ?>
	<!-- account-details Area Start -->

	<div class="customer-login-area">
		<div class="container mt-5">
			<div class="row mt-5">
				<div class="col-lg-6 col-12" style="
	margin: auto;
	width: 50%">
					<div class="customer-login my-account">
						<form id="login-form" method="post">
							<div class="form-fields">
								<h2 style="color: black;">Login</h2>
								<div class="form-row form-row-wide">
									<label for="username">Email address <span class="required">*</span></label>
									<input type="text" name="login_email" id="login_email" style="width:100%">
									<span class="field_error" id="login_email_error"></span>
								</div>
								<div class="form-row form-row-wide">
									<label for="password">Password <span class="required">*</span></label>
									<input type="password" name="login_password" id="login_password">

									<span class="field_error" id="login_password_error"></span>
								</div>
							</div>
							<div class="row">
								<button type="button" class="btn btn-primary "
									onclick="user_login()">Login</button><br><br>
							</div>						
						</form>
					</div>
				</div>
				<div class="form-output login_msg">
					<p class="form-messege field_error"></p>
				</div>
				<div>
								<a class="h3" data-bs-toggle="modal" data-bs-target="#loginModal"> Create An Account </a>
								<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header border-bottom-0">
												<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="form-title text-center mb-5">
													<h5 style=" padding: 20px;">
													Do you want to register yourself.</h5>
												</div>
												<p class="text-danger fs--1">

												</p>
												<div class="d-flex flex-column text-center mr-5 ml-5">
													<form id="register-form" method="post">
														<div class="single-contact-form">
															<div class="contact-box name">
																<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">
															</div>
															<span class="field_error" id="name_error"></span>
														</div>
														<div class="single-contact-form">
															<div class="contact-box name">
																<input type="text" name="email" id="email" placeholder="Your Email*" style="width:100%">
															</div>
															<span class="field_error" id="email_error"></span>
														</div>
														<div class="single-contact-form">
															<div class="contact-box name">
																<input type="text" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:100%">

															</div>
															<!-- <span class="field_error" id="mobile_error"></span>  -->
														</div>
														<div class="single-contact-form">
															<div class="contact-box name">
																<input type="password" name="password" id="password" placeholder="Your Password*" style="width:100%">
															</div>
															<span class="field_error" id="password_error"></span>
														</div>

														<div class="contact-btn">
															<button type="button" class="btn btn-primary btn-lg" onclick="user_register()" id="btn_register">Register</button>
														</div>
													</form>
													<div class="form-output register_msg">
														<p class="form-messege field_error"></p>
													</div>
												</div>
											</div>
										</div>  
									</div>
								</div>
							</div>
				<!-- <div class="col-lg-6 col-12">
					<div class="customer-register my-account">
						<form method="post" class="register">
							<div class="form-fields">
								<h2>Register</h2>
								<p class="form-row form-row-wide">
									<label for="reg_email">Email address <span class="required">*</span></label>
									<input type="email" class="input-text" autocomplete="email" name="email"
										id="reg_email" value="">
								</p>
								<p class="form-row form-row-wide">
									<label for="reg_password">Password<span class="required">*</span></label>
									<input type="password" class="input-text" autocomplete="new-password"
										name="password" id="reg_password">
								</p>
								<div style="left: -999em; position: absolute;">
									<label for="trap"> Anti-spam </label>
									<input type="text" name="email_2" id="trap" tabindex="-1">
								</div>
							</div>
							<div class="form-action">
								<div class="actions-log">
									<input type="submit" class="button" name="register" value="Register">
								</div>
							</div>
						</form>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- account-details Area end -->
	<!-- FOOTER START -->
	<!-- FOOTER START -->
	<?php include 'includes/footer.php'; ?>
	<!-- FOOTER END -->
	<!-- JS -->
	<?php include 'includes/jsfiles.php'; ?>

</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>