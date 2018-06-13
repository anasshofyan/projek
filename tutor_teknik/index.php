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


	<?php 
	require 'config/db.php';
	session_start();
	if(!isset($_SESSION['login']) || !$_SESSION['login']){
		include './components/navbar1.php';
	}else{
		include './components/navbar.php';
	}
	?>


	<!-- Modal Login -->
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Login Tutor Teknik Account</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
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
				<div class="modal-footer justify-content-center">
					<h6>Belum punya akun? daftar<a href="#modalSignup" data-target="#modalSignup" data-toggle="modal"> disini</a></h6>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal login  -->

	<!-- Modal Sing Up -->
	<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Sign Up and Start Learning</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="./process/register.php">
						<div class="form-group">
							<label for="nama">Your Name</label>
							<input type="text" class="form-control" name="nama" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" class="form-control" name="email" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter Password">
						</div>
						<div class="form-group">
							<label for="comfirm-password">Comfirm Password</label>
							<input type="password" class="form-control" name="password1" placeholder="Comfirm Password">
						</div>
						<button type="submit" name="register" class="btn btn-danger btn-block">Sign Up</button>
					</form>
				</div>
				<div class="modal-footer justify-content-center">
					<h6>Already have an account?<a href="#modalLogin" data-target="#modalLogin" data-toggle="modal"> Login</a></h6>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal Sign Up -->
	<!-- carausell -->
	<section>
		<div class="container" style="margin-top: 80px;">
			<div class="container">
				<div class="row">
					<div class="col">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100 " src="./asset/img/slider1.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="./asset/img/slider2.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="./asset/img/slider3.jpg" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end carausell -->

		<!-- fitur tutorteknik -->
		<section>
			<div class="container">
				<div class="row text-center mb-3 mt-5">
					<div class="col-lg">
						<h3>Apa yang bisa kamu lakukan di <strong>tutorteknik?</strong></h3>
						<p>Nggak perlu bingung dan repot lagi dalam mencari materi dan tutor terbaik.
						Semuanya telah tersedia di tutorteknik</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg">
						<div class=" text-black mb-3">
							<div class="card-body text-center">
								<span class="fa fa-comments fa-3x" style="color: gold;"></span>
								<p class="card-text mt-4">Live chat dengan tutor</p>
							</div>
						</div>
					</div>
					<div class="col-lg">
						<div class=" text-black mb-3">
							<div class="card-body text-center">
								<span class="fa fa-user-plus fa-3x" style="color: gold;"></span>
								<p class="card-text mt-4">Undang tutor</p>
							</div>
						</div>
					</div>
					<div class="col-lg">
						<div class="text-black mb-3">
							<div class="card-body text-center">
								<span class="fa fa-book fa-3x" style="color: gold;"></span>
								<p class="card-text mt-4">Banyak pilihan materi</p>
							</div>
						</div>
					</div>
					<div class="col-lg">
						<div class="text-black mb-3">
							<div class="card-body text-center">
								<span class="fa fa-graduation-cap fa-3x" style="color: gold;"></span>
								<p class="card-text mt-4">Praktek dengan tutor</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end fitur tutorteknik -->

		<!-- products -->
		<section>
			<div class="container mt-5">
				<div class="row">
					<div class="col-md">
						<h4>Top Courses in "Development"</h4>
					</div>
				</div>
				<div class="row">
					<?php for ($i=0; $i < 4 ; $i++) :

						?>
						<div class="col-md">
							<?php for ($j=0; $j < 3 ; $j++) :?>
								<div class="card mb-4">
									<a href="products-details.php">
										<img class="card-img-top" src="uploads/1.png" alt="Card image cap">
									</a>
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<footer>Anas Shofyan <cite title="Source Title">Source Title</cite></footer>			
									</div>
									<div class="list-group-item">
										<div class="text-lg-right">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
										</div>
										<h6>Rp. 85.000</h6></div>
									</div>
								<?php endfor; ?>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</section>

			<!-- end category -->

			<!-- location  -->

			<section id="contact" class="contact mb-5">
				<div class="container">
					<div class="row pt-4 mb-4">
						<div class="col text-center">
							<h2>Contact Us</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<div class="card text-white bg-primary mb-3">
								<div class="card-body text-center">
									<h5 class="card-title">Contact Us</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, deleniti.</p>
								</div>
							</div>
							<ul class="list-group">
								<li class="list-group-item"><h1>Location</h1></li>
								<li class="list-group-item">My Office</li>
								<li class="list-group-item">Lamongan</li>
								<li class="list-group-item">East Java</li>
							</ul>
						</div>

						<div class="col-lg-6">
							<form>
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" placeholder="Masukan Email">
								</div>
								<div class="form-group">
									<label for="telp">No Telp</label>
									<input type="text" class="form-control" id="telp" placeholder="Masukan No telp">
								</div>
								<div class="form-group">
									<label for="nama">Pesan</label>
									<textarea type="text" class="form-control" id="nama" placeholder="Masukan Pesan"></textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-primary"> Kirim Pesan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end location  -->
		<?php include './components/footer.php' ?>
	</body>
	</html>