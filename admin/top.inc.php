<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="../img/iconbg.ico">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
   <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav mb-4">
                <li class="menu-title">Menu</li>

                <!-- Admin Role Menu Items -->
                <?php if($_SESSION['ADMIN_ROLE'] == "Admin"){ ?>
                    <li class="menu-item-has-children dropdown">
                        <a href="vendor_management.php"><i class="bi bi-person"></i> Admin Management</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="users.php"><i class="bi bi-people"></i> User Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="contact_us.php"><i class="bi bi-phone"></i> Contact</a>
                    </li>
                <?php } ?>

                <!-- Product Team Role Menu Items -->
                <?php if($_SESSION['ADMIN_ROLE'] == "Admin" || $_SESSION['ADMIN_ROLE'] == "Product Team"){ ?>
                    <li class="menu-item-has-children dropdown">
                        <a href="product.php"><i class="bi bi-box-seam"></i> Product Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="categories.php"><i class="bi bi-menu-button-wide"></i> Categories Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="sub_categories.php"><i class="bi bi-menu-app"></i> Sub Categories Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="color.php"><i class="bi bi-palette"></i> Color Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="size.php"><i class="bi bi-textarea-resize"></i> Size Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="coupon_master.php"><i class="bi bi-coin"></i> Coupon Master</a>
                    </li>
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="banner.php"><i class="bi bi-columns-gap"></i> Banner</a>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="product_review.php"><i class="bi bi-star"></i> Product Review</a>
                    </li>
                <?php } ?>

                <!-- Order Team and Admin Role Menu Items -->
                <?php if($_SESSION['ADMIN_ROLE'] == "Admin" || $_SESSION['ADMIN_ROLE'] == "Order Team"){ ?>
                    <li class="menu-item-has-children dropdown">
                      <a href="order_master.php"><i class="bi bi-cart4"></i> Order Master</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</aside>

      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
               <!-- <a class="navbar-brand" href="index.php"><img src="../media/Logo.jpeg" alt="Logo" width="45" height="45" ></a> -->
                  <!-- <a class="navbar-brand" href="index.php"><img src="admin/images/newlogoo.png" alt="" width="45" height="45" ></a> -->
                  <a class="navbar-brand" href="index.php"><img src="../img/newlogoo.png" alt="" width="70" height="70" ></a> 

                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars fa-lg text-dark"></i></a>
               </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <div class="dropdown for-notification">
                           <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-bell"></i>
                              <span id="notification-count" class="count bg-danger">0</span>
                           </button>
                           <div class="dropdown-menu" aria-labelledby="notification">
                              <p class="red">You have <span id="notification-message">0</span> Notification</p>
                              
                              <div class="notification-menu" id="notification-menu"></div>
                              <!-- <a class="dropdown-item media" href="#">
                                 <i class="fa fa-check"></i>
                                 <p>Server #1 overloaded.</p>
                              </a>
                              <a class="dropdown-item media" href="#">
                                 <i class="fa fa-info"></i>
                                 <p>Server #2 overloaded.</p>
                              </a>
                              <a class="dropdown-item media" href="#">
                                 <i class="fa fa-warning"></i>
                                 <p>Server #3 overloaded.</p>
                              </a> -->
                           </div>
                        </div>

                        <!-- <div class="dropdown for-notification">
                           <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-bell"></i>
                              <span id="notification-count" class="count bg-danger">0</span>
                           </button>
                           <div class="dropdown-menu" aria-labelledby="notification" id="notification-menu">
                              <p class="red">You have <span id="notification-message">0</span> Notifications</p>
                           </div>
                        </div> -->


                        <!-- message -->
                        <!-- <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                    </div>

                    <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle welcome-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mt-3"> Welcome <?php echo $_SESSION['ADMIN_USERNAME']?>
                     </a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
               </div>
            </div>    
         </header>
         <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>

         <script>
            function fetchNotifications() {
               debugger;
               $.ajax({
                     url: 'fetch_notifications.php', 
                     type: 'GET',
                     dataType: 'json',
                     success: function(response) {
                        debugger;
                        $('#notification-count').text(response.count);
                        $('#notification-message').text(response.count);

                        // Update notification list
                        $('#notification-menu').empty();
                        if (response.notifications.length > 0) {
                           debugger;
                           $.each(response.notifications, function(index, notification) {
                              debugger;
                              if (notification.message && notification.message.includes("New order")) {
                                const orderNumberMatch = notification.message.match(/#(\d+)/);
                                const orderNumber = orderNumberMatch ? orderNumberMatch[1] : null;
                                    $('#notification-menu').append('<a class="dropdown-item media" href="order_master_detail.php?id=' + orderNumber + '">' +
                                    '<i class="fa ' + notification.icon + '"></i>' +
                                    '<p>' + notification.message + '</p>' +
                                    '</a>');
                                }
                           });
                        } else {
                           $('#notification-menu').append('<p>No notifications found.</p>');
                        }
                     },
                     error: function(xhr, status, error) {
                        console.error('Error fetching notifications:', error);
                     }
               });
            }

            // Initial fetch of notifications
            fetchNotifications();

            // Refresh notifications every 2-3 seconds
            //setInterval(fetchNotifications, 2000)
         </script>