<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/KaprayVaghera/');

//Live Crenditals
// $con=mysqli_connect("localhost","customercare","a9EJau~yEUqb","ecom");
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'https://kvonline.shop/');

define('SITE_PATH','');

define('LOGO_SERVER_PATH',SERVER_PATH.'/img/');
define('LOGO_SITE_PATH',SITE_PATH.'../img/');

define('CAT_SERVER_PATH',SERVER_PATH.'/img/category');
define('CAT_SITE_PATH',SITE_PATH.'../img/category');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/img/products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'../img/products/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'/img/products/product-details/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'../img/products/product-details/');

define('BANNER_SERVER_PATH',SERVER_PATH.'/img/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'../img/banner/');

define('SHIPROCKET_TOKEN_EMAIL','gmail');
define('SHIPROCKET_TOKEN_PASSWORD','password');

?>