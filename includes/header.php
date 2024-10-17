<?php

require ('connection.php');
require ('functions.php');
require ('add_to_cart.php');

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

$script_name = $_SERVER['SCRIPT_NAME'];
$script_name_arr = explode('/', $script_name);
$mypage = $script_name_arr[count($script_name_arr) - 1];

$meta_title = "Kapray Vaghera";
$meta_desc = "TKapray Vaghera";
$meta_keyword = "Kapray Vaghera";
$meta_url = SITE_PATH;
$meta_image = "";
// if ($mypage == 'product.php') {
// 	$product_id = get_safe_value($con, $_GET['id']);
// 	$product_meta = mysqli_fetch_assoc(mysqli_query($con, "select * from product where id='$product_id'"));
// 	$meta_title = $product_meta['meta_title'];
// 	$meta_desc = $product_meta['meta_desc'];
// 	$meta_keyword = $product_meta['meta_keyword'];
// 	$meta_url = SITE_PATH . "product.php?id=" . $product_id;
// 	$meta_image = PRODUCT_IMAGE_SITE_PATH . $product_meta['image'];
// }
if ($mypage == 'product.php' && isset($_GET['id'])) {
    $product_id = get_safe_value($con, $_GET['id']);
    $product_meta = mysqli_fetch_assoc(mysqli_query($con, "select * from product where id='$product_id'"));
    $meta_title = $product_meta['meta_title'];
    $meta_desc = $product_meta['meta_desc'];
    $meta_keyword = $product_meta['meta_keyword'];
    $meta_url = SITE_PATH . "product.php?id=" . $product_id;
    // $meta_image = PRODUCT_IMAGE_SITE_PATH . $product_meta['image'];
}

if ($mypage == 'contact.php') {
	$meta_title = 'Contact Us';
}

?>

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

	<!-- Favicon ============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/iconbg.ico">

	<!-- Fonts ============================================ -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
		rel="stylesheet">

	<!-- CSS  -->

	<!-- Bootstrap CSS ============================================ -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- owl.carousel CSS ============================================ -->
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!-- owl.theme CSS ============================================ -->
	<link rel="stylesheet" href="css/owl.theme.css">

	<!-- owl.transitions CSS============================================ -->
	<link rel="stylesheet" href="css/owl.transitions.css">

	<!-- font-awesome.min CSS ============================================ -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- font-icon CSS
	============================================ -->
	<link rel="stylesheet" href="fonts/font-icon.css">

	<!-- nivo slider CSS ============================================ -->
	<link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />

	<!-- animate CSS ============================================ -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- mobile menu CSS ============================================ -->
	<link rel="stylesheet" href="css/meanmenu.min.css">

	<!-- normalize CSS ============================================ -->
	<link rel="stylesheet" href="css/normalize.css">

	<!-- main CSS ============================================ -->
	<link rel="stylesheet" href="css/main.css">

	<!-- style CSS ============================================ -->
	<link rel="stylesheet" href="style.css">

	<!-- responsive CSS ============================================ -->
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">


	<!-- <link rel="stylesheet" href="css/material-design-iconic-font.min.css"> -->


	<!-- Latest compiled and minified CSS -->


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
		integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

	<!-- jquery-ui CSS ============================================ -->
	<link rel="stylesheet" href="css/jquery-ui.css">

	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>