<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/KAPRAYVAGHERA/');
define('SITE_PATH','');

define('INSTAMOJO_REDIRECT',SITE_PATH.'payment_complete.php');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'img/products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'img/products/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'img/products/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'img/products/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'img/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'img/banner/');

define('INSTAMOJO_KEY','key');
define('INSTAMOJO_TOKEN','token');

define('SMTP_EMAIL','Zainabnaveed.hcc@gmail.com');
define('SMTP_PASSWORD','password');

define('SMS_KEY','sms_key');
?>