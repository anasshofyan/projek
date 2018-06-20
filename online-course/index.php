<?php 
require 'config/db.php';
session_start();
if(!isset($_SESSION['login_user']) || !$_SESSION['login_user']){
	include 'component/navbar1.php';
}else{
	include 'component/navbar.php';
}
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="shortcut icon" href="favicon.ico">
	<title>Tutor Teknik | Home</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./asset/css/style.css">
	<link rel="stylesheet" href="asset/css/edit.css">

	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
	
	<div style="margin-top: 58px;"></div>
	
	<!-- link -->
	<?php if (isset($_GET['page'])) {
		// produk
		if ($_GET['page']=="products") { 
			include 'products.php';
		}elseif ($_GET['page']=="cart") {
			include 'cart.php';
		}elseif ($_GET['page']=="detail-products") {
			include 'detail-products.php';
		}elseif ($_GET['page']=="help") {
			include 'help.php';
		}elseif ($_GET['page']=="teach-tutor") {
			include 'tutor/teach-tutor.php';
		}elseif ($_GET['page']=="my-course") {
			include 'my-course.php';
		}elseif ($_GET['page']=="login-user") {
			include 'login-user.php';
		}elseif ($_GET['page']=="register-user") {
			include 'register-user.php';
		}elseif ($_GET['page']=="logout-user") {
			include 'logout-user.php';
		}elseif ($_GET['page']=="user-profile-setting") {
			include 'user-profile-setting.php';
		}elseif ($_GET['page']=="wishlist") {
			include 'wishlist.php';
		}elseif ($_GET['page']=="contact-us") {
			include 'contact-us.php';
		}elseif ($_GET['page']=="about") {
			include 'about.php';
		}elseif ($_GET['page']=="beginner") {
			include 'beginner.php';
		}elseif ($_GET['page']=="intermediate") {
			include 'intermediate.php';
		}elseif ($_GET['page']=="add-to-card") {
			include 'add-to-card.php';
		}elseif ($_GET['page']=="advance") {
			include 'advance.php';
		}elseif ($_GET['page']=="check-out") {
			include 'check-out.php';
		}else{
			include 'home.php';
		}
	} ?>

	<!-- end link -->
	<div class="margin-bottom"></div>
	<?php include './component/footer.php' ?>
</body>
</html>