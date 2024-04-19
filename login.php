<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Login | Kapray Vaghera';
include 'includes/header.php';
?>

<body>
	<!-- header area start -->
	<!-- header area start -->
	<?php include 'includes/navBar2.php' ?>
	<!-- account-details Area Start -->

	<div class="customer-login-area">
		<div class="container mt-5 mb-5">
			<div class="row mt-5 mb-5">
				<div class="col-lg-12 col-md-12 col-12 mb-5">
					<div class="customer-login my-account">
						<form id="login-form" method="post">
							<div class="form-fields">
								<h2 style="color:#026bbe;">Login</h2>
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
							<div class="form-action">
								<p class="lost_password"> <a href="forgot_password.php" style="padding-right: 115px;">Lost your password?</a></p>

							</div>

							<div class="login-btn row col-lg-6 col-md-8 col-sm-12 col-xs-12" style="position: relative; left: 300px;">
								<button type="button " class="btn btn-primary mt-3"
									onclick="user_login()">Login</button>
								<button type="button" class="btn btn-secondary" data-bs-toggle="modal"
									data-bs-target="#loginModal"> Create An Account </button>
							</div>
						</form>
					</div>
				</div>
				<div class="form-output login_msg">
					<p class="form-messege field_error"></p>
				</div>
				<div>

					<div class="modal fade" id="loginModal" style="z-index: 10000;" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header border-bottom-0">
									<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-title text-center mb-4">
										<h5 style="color:#026bbe;">
											Create a new Account</h5>
										<p>Enter your details and register </p>
									</div>
									<p class="text-danger fs--1">
									</p>
									<div class="d-flex flex-column mr-5 ml-5">
										<form id="register-form" method="post">
											<div class="single-contact-form">
												<div class="contact-box name mb-3">
													<label for="name">Name<span class="required">*</span></label>
													<input type="text" name="name" id="name" style="width:100%">
												</div>
												<span class="field_error" id="name_error"></span>
											</div>
											<div class="single-contact-form">
												<div class="contact-box name mb-3">
													<label for="email">Email<span class="required">*</span></label>
													<input type="text" name="email" id="email" style="width:100%">
												</div>
												<span class="field_error" id="email_error"></span>
											</div>
											<div class="single-contact-form">
												<div class="contact-box name mb-3">
													<label for="mobile">Mobile<span class="required">*</span></label>
													<input type="text" name="mobile" maxlength="11" id="mobile"
														style="width:100%">
												</div>
												<span class="field_error" id="mobile_error"></span>
											</div>
											<div class="single-contact-form">
												<div class="contact-box name mb-3">
													<label for="password">Password<span
															class="required">*</span></label>
													<input type="password" name="password" id="password"
														style="width:100%">
												</div>
												<span class="field_error" id="password_error"></span>
											</div>

											<div class="contact-btn">
												<button type="button" class="btn btn-primary align-center"
													onclick="user_register()" id="btn_register">Register</button>
											</div>
										</form>
										<div class="form-output register_msg">
											<p class="form-messege field_success"></p>
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