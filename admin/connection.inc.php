<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/KAPRAWAPRA/');
define('SITE_PATH','/KAPRAWAPRA/');

define('LOGO_SERVER_PATH',SERVER_PATH.'/img/');
define('LOGO_SITE_PATH',SITE_PATH.'../img/');

define('CAT_SERVER_PATH',SERVER_PATH.'/img/category');
define('CAT_SITE_PATH',SITE_PATH.'../img/category');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/img/products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'../img/products/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'/img/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'../img/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'/img/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'../img/banner/');

define('SHIPROCKET_TOKEN_EMAIL','gmail');
define('SHIPROCKET_TOKEN_PASSWORD','password');

?>