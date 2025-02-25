<?php

require ('connection.php');
require ('functions.php');
require ('add_to_cart.php');

?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> 
		<?php
		if (isset($title)) {
			echo $title;
		}
		?>
	</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/iconbg.ico">

	<link rel="stylesheet" href="css/all.min.css">
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

	<!-- nivo slider CSS
	============================================ -->
	<link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />

	<!-- jquery-ui CSS
	============================================ -->
	<link rel="stylesheet" href="css/jquery-ui.css">

	<!-- animate CSS
	============================================ -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Vendor CSS
	============================================ -->
	<link href="js/vendor/aos/aos.css" rel="stylesheet">

	<!-- mobile menu CSS
	============================================ -->
	<link rel="stylesheet" href="css/meanmenu.min.css">

	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">


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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
		integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
	<!-- Include Owl Carousel CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>