<!DOCTYPE html>
<html class="no-js" lang="">
	
    <?php 
		$title='Login | Kapray Vaghera';
		include 'includes/header.php'; 
	?>

<body>
	<!-- header area start -->
	<!-- header area start -->
	<?php include 'includes/navBar2.php' ?>
    	<!-- header area end -->
		<!-- breadcrumbs area start -->
		<!-- <div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Login</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- breadcrumbs area end -->
		<!--Login Area Start --> 
		<div class="customer-login-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="customer-login my-account">
							<form method="post" class="login">
								<div class="form-fields">
									<h2 style="color:#026bbe;" >Login</h2>
									<p class="form-row form-row-wide">
										<label for="username">Username or email address <span class="required">*</span></label>
										<input type="text" class="input-text" name="username" id="username" value="">
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" id="password">
									</p>
								</div>
								<div class="form-action">
									<p class="lost_password"> <a href="#">Lost your password?</a></p>
									<div class="actions-log">
										<input type="submit" class="button" name="login" value="Login">
									</div>
									<label for="rememberme" class="inline"> 
									<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="customer-register my-account">
							<form method="post" class="register">
								<div class="form-fields">
									<h2  style="color: #026bbe;">Register</h2>
									<p class="form-row form-row-wide">
										<label for="reg_email">Email address <span class="required">*</span></label>
										<input type="email" class="input-text" name="email" id="reg_email" value="">
									</p>
									<p class="form-row form-row-wide">
										<label for="reg_password">Password <span class="required">*</span></label>
										<input type="password" class="input-text" name="password" id="reg_password">
									</p>
									<div style="left: -999em; position: absolute;">
										<label for="trap">Anti-spam</label>
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

    </body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:16 GMT -->
</html>