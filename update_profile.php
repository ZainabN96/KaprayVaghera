<?php
// require('connection.php');
// require('functions.php');
include 'includes/header2.php';
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$name=get_safe_value($con,$_POST['name']);
$uid=$_SESSION['USER_ID'];
mysqli_query($con,"update users set name='$name' where id='$uid'");
$_SESSION['USER_NAME']=$name;
echo "Your name updated";
?>