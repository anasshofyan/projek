<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tutor Teknik | Home</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./asset/css/style.css">
	<link rel="stylesheet" href="asset/css/edit.css">

	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script>
		$('#myModal').on('shown.bs.modal', function () {
			$('#myInput').trigger('focus')
		})
	</script>
	<script>
		$(document).ready(function(){
			$('.profile').popover({html: "<a href="#">a</a>", content: "Blabla", placement: "bottom"}); 
		});
	</script>
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
	<?php include './components/navbar1.php'; ?>
	<div class="container">
		<a href="index.php"><img src="asset/img/logo/logo.png" width="219" height="35"  style="display: block; margin-right: auto; margin-left: auto; margin-top: 90px;"></a>
		<div class="row text-center">
			<div class="col">
				<p class="mt-3" style="font-size: 20px;">Account/Login</p>
			</div>
		</div>
		<div class="row justify-content-center mt-3">
			<div class="col-md-4">
				<form method="POST" action="process/login.php">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
					<button type="submit" name="login" class="btn btn-warning  btn-block">Login</button>
				</form>
			</div>
		</div>
		<div class="row justify-content-center mt-3">
			<div class="col-md-4 text-center">
				<p style="font-size: 14px;">or connect with : </p>
				<a href=""><span class="fa fa-google fa-3x pr-3 ico-color" ></span></a>
				<a href=""><span class="fa fa-facebook fa-3x ico-color"></span></a>
				<p class="mt-3" style="font-size: 14px;">Forgot password? <a href="" class="ico-color"> click here to reset </a></p>
				<p class="mt-0" style="font-size: 14px;">New User? <a href="register.php" class="ico-color"> click here to register </a> </p>
			</div>
		</div>
	</div>
</body>
</html>
