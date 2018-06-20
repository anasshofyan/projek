	<?php 
	require 'config/db.php';
	session_start();
	if(!isset($_SESSION['login-tutor']) || !$_SESSION['login-tutor']){
		include './component/nav1.php';
	}else{
		include './component/nav.php';
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
		<title>Tutor Teknik | Tutor</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./asset/css/style.css">
		<link rel="stylesheet" href="asset/css/edit.css">

		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style>
	</style>
</head>
<body class="bg-light">
	<div class="margin-top" style="margin-top: 59px;"></div>

	<!-- link -->
	<?php if (isset($_GET['page'])) {
		if ($_GET['page']=="register-tutor") {
			include 'register-tutor.php';
		}elseif ($_GET['page']=="login-tutor") {
			include 'login-tutor.php';
		}elseif ($_GET['page']=="logout-tutor") {
			include 'logout-tutor.php';
		}elseif ($_GET['page']=="profile-setting") {
			include 'tutor-profile-setting.php';
		}elseif ($_GET['page']=="make-course") {
			include 'make-course.php';
		}elseif ($_GET['page']=="home") {
			include 'home.php';
		}elseif ($_GET['page']=="contact-us") {
			include 'contact-us.php';
		}elseif ($_GET['page']=="tutor-dashboard") {
			include 'tutor-dashboard.php';
		}elseif ($_GET['page']=="blog") {
			include 'blog.php';
		}elseif ($_GET['page']=="about") {
			include 'about.php';
		}elseif ($_GET['page']=="delete-products") {
			include 'delete-products.php';
		}elseif ($_GET['page']=="update-products") {
			include 'update-products.php';
		}else{
			include 'home.php';
		}
	} 
	?>
	<!-- end link -->
	<div class="margin-bottom"></div>
	<?php include './component/footer.php' ?>
</body>
</html>