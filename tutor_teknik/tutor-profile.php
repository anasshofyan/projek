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

<?php include './components/navbar.php' ?>
	<section class="bg-danger text-white mt-0 mb-5">
		<div class="container p-4">
			<div class="row">
				<h2>Anas Shofyan</h2> 			
			</div>
			<div class="row">
				<h5>Developer and Bootcamp Instructor</h5>		
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4 text-center">
					<img width="60%" class="rounded-circle img-thumbnail" src="./asset/img/icon/004-boy.svg" alt="Image Instructor">
					<div class="row justify-content-center mt-4">
						<a href="instructor-message.php" class="btn btn-warning ">Send Message</a>
					</div>
				</div>
				<div class="col-md-7">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae mollitia et animi beatae voluptates, sint exercitationem magni consequuntur ipsa, recusandae. <strong> Cumque, maxime, sequi. Id at quo, ea eum voluptas.</strong> Dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque inventore architecto, quam aliquam rem odit reiciendis error illum officia facere suscipit dolorum soluta molestiae quos minus nobis ullam cupiditate. Natus!
					</p>
					<p>Lorem ipsum dolor sit amet, <strong> consectetur adipisicing elit. Vitae mollitia et animi beatae voluptates, sint exercitationem magni consequuntur ipsa, recusandae.</strong> Cumque, maxime, sequi. Id at quo, ea eum voluptas. Dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque inventore architecto, quam aliquam rem odit reiciendis error illum officia facere suscipit dolorum soluta molestiae quos minus nobis ullam cupiditate. Natus!
					</p>
					<p>Lorem ipsum dolor sit amet, <strong> consectetur adipisicing elit. Vitae mollitia et animi beatae voluptates, sint exercitationem magni consequuntur </strong> ipsa, recusandae. Cumque, maxime, sequi. Id at quo, ea eum voluptas. Dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque inventore architecto, quam aliquam rem odit reiciendis error illum officia facere suscipit dolorum soluta molestiae quos minus nobis ullam cupiditate. Natus!
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nobis, eum molestias quia repellat id laudantium nihil in corporis ea voluptate perferendis dolorum eveniet deleniti delectus ducimus optio qui deserunt!</p>
					<hr>
					<div class="row">
						<div class="col-sm-4">
							<p>Total Students</p>
							<h4>334,443</h4>
						</div>
						<div style="width: 0px; height: 70px; border: 0.5px #A1A1A1 solid;"></div>
						<div class="col-sm-4">
							<p>Courses</p>
							<h4>4</h4>
						</div>
						<div style="width: 0px; height: 70px; border: 0.5px #A1A1A1 solid;">
							<div class="col-sm-4">
								<p>Reviews</p>
								<h4>34,443</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="bg-light">
			<div class="container p-4 mt-4">
				<div class="row">
					<div class="col-md">
						<h3 class="text-center"> Course taught by Anas Shofyan</h3>
					</div>
				</div>
				<div class="row mt-4 mb-4">
					<div class="col-md">
						<div class="card">
							<a href="#">
								<img class="card-img-top" src="./uploads/1.png" alt="Card image cap">
							</a>
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Anas Shofyan</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</li>
								<li class="list-group-item text-lg-right"><h6>Rp. 85.000</h6></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="card">
							<a href="#">
								<img class="card-img-top" src="./uploads/2.png" alt="Card image cap">
							</a>
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Shofyan</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</li>
								<li class="list-group-item text-lg-right"><h6>Rp. 75.000</h6></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="card">
							<a href="#">
								<img class="card-img-top" src="./uploads/3.png" alt="Card image cap">
							</a>
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Martunis</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</li>
								<li class="list-group-item text-lg-right"><h6>Rp. 70.000</h6></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="card">
							<a href="#">
								<img class="card-img-top" src="./uploads/4.png" alt="Card image cap">
							</a>
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Fateh</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</li>
								<li class="list-group-item text-lg-right"><h6>Rp. 65.000</h6></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php 
		include './components/footer.php';
		?>
</body>
</html>