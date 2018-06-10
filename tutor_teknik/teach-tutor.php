<?php include 'process/session.php'; ?>
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
<body>
	<div style="margin-top: 60px;">
	<?php include './components/navbar.php' ?>
	
	<section class="container-fluid bg-dark p-5">
		<div class="container text-white">
			<div class="row"><h3>Tutor Dashboard</h3></div>
		</div>
	</section>

	<section class="container mt-4 ">
		<div class="jumbotron">
			<h1 class="display-4">Jadi Tutor </h1>
			<hr class="my-4">
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="step-tutor.php" role="button">Buat Tutorial</a>
			</p>
		</div>
	</section>

	<section class="container text-center mt-5">
		<h2>Tata Cara</h2>
	</section>

	<section class="container mt-4 bg-light shadow">
		<div class="row ">
			<div class="col-sm-4 p-5  text-center">
				<i class="fa fa-desktop fa-5x"></i>
			</div>
			<div class="col-sm-8 pt-3">
				<h3>Buatlah  Tutorial yang Menarik</h3>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repellat dolorum commodi non asperiores molestias.</p>
				<a href="#">Get Started</a>
			</div>
		</div>
	</section>

	<section class="container mt-4 bg-light shadow">
		<div class="row ">
			<div class="col-sm-4 p-5  text-center">
				<i class="fa fa-video-camera fa-5x"></i>
			</div>
			<div class="col-sm-8 pt-3">
				<h3>Buatlah Video Singkat</h3>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repellat dolorum commodi non asperiores molestias.</p>
				<a href="#">Get Started</a>
			</div>
		</div>
	</section>

	<section class="container mt-4 bg-light shadow">
		<div class="row ">
			<div class="col-sm-4 p-5  text-center">
				<i class="fa fa-users fa-5x"></i>
			</div>
			<div class="col-sm-8 pt-3">
				<h3>Bangun Audiensi yang Baik</h3>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repellat dolorum commodi non asperiores molestias.</p>
				<a href="#">Get Started</a>
			</div>
		</div>
	</section>

	<section class="container mt-4 bg-light shadow mb-4	">
		<div class="row ">
			<div class="col-sm-4 p-5  text-center">
				<i class="fa fa-clock-o fa-5x"></i>
			</div>
			<div class="col-sm-8 pt-3">
				<h3>
				Bergabunglah dengan Tantangan Pendatang Baru</h3>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repellat dolorum commodi non asperiores molestias.</p>
				<a href="#">Get Started</a>
			</div>
		</div>
	</section>

	<?php 
	include './components/footer.php';
	?>
</body>
</html>