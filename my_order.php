<?php 
require('connection.php');
require('functions.php');
require('add_to_cart.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
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
   <div class="ht__bradcaump__area" >
            <div class="ht__bradcaump__wrap"  style="height: 150px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Thank You</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Order ID</th>
                                                <th class="product-name"><span class="nobr">Order Date</span></th>
                                                <th class="product-price"><span class="nobr"> Address </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Order Status </span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$uid=$_SESSION['USER_ID'];
											$res=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where `order`.user_id='$uid' and order_status.id=`order`.order_status order by `order`.id desc");
											while($row=mysqli_fetch_assoc($res)){
											?>
                                            <tr>
												<td class="product-add-to-cart"><a href="my_order_details.php?id=<?php echo $row['id']?>"> <?php echo $row['id']?></a>
												<br/>
												<a href="order_pdf.php?id=<?php echo $row['id']?>"> PDF</a>
												</td>
                                                <td class="product-name"><?php echo $row['added_on']?></td>
                                                <td class="product-name">
												<?php echo $row['address']?><br/>
												<?php echo $row['city']?><br/>
												<?php echo $row['pincode']?>
												</td>
												<td class="product-name"><?php echo $row['payment_type']?></td>
												<td class="product-name"><?php echo ucfirst($row['payment_status'])?></td>
												<td class="product-name"><?php echo $row['order_status_str']?></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        						
<?php require('footer.php')?>        