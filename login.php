<?php
require('connection.php');
require('functions.php');
require('add_to_cart.php');

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
   <link rel="stylesheet" type="text/css" href="css/style.min.css"> 

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
					<div class="col-lg-6 col-12">
						<div class="customer-login my-account">
							<form method="post" class="login" id="login-form">
								<div class="form-fields">
									<h2>Login</h2>
									<p class="form-row form-row-wide">
										<label for="username">Username or email address <span class="required">*</span></label>
										<input type="text" class="input-text" name="login_email" autocomplete="email" id="login_email" value="">
										<span class="field_error" id="login_email_error"></span>
										
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="login_password" autocomplete="new-password" id="login_password">
											<span class="field_error" id="login_password_error"></span>
									</p>
								</div>
								<div class="form-action">
									<p class="lost_password"> <a href="#">Forgot Password</a></p>
								
									<div class="actions-log">
									<input type="submit" class="button" name="login" value="Login" onclick="user_login()"></input><br><BR>
						
									</div>
									<label for="rememberme" class="inline"> 
									<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
								</div>
								
							</form>
							
						</div>
					</div>
					<div class="form-output login_msg">
							<p class="form-messege field_error"></p>
						</div>
					<div class="col-lg-6 col-12">
						<div class="customer-register my-account">
							<form method="post" class="register">
								<div class="form-fields">
									<h2>Register</h2>
									<p class="form-row form-row-wide">
										<label for="reg_email">Email address <span class="required">*</span></label>
										<input type="email" class="input-text" autocomplete="email" name="email" id="reg_email" value="">
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_password">Password<span class="required">*</span></label>
										<input type="password" class="input-text"  autocomplete="new-password" name="password" id="reg_password">
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
					</div>
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