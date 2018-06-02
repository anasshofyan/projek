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
	include './components/navbar.php';
	?>
	<section class="mb-5">
		<div class="container mt-3">
			<div class="row">
				<div class="col-md">
					<div class="card">
						<div class="card-header">
							<h4>User</h4>
						</div>
						<div class="card-body">
							<h5 class="card-title"><span class="fa fa-user-circle"></span> Anas Shofyan MF</h5>
							<p class="card-text">Jl Gebang Wetan Gang Rodah Sekolahan No 16 Gebang Putih Sukolilo Surabaya </p>
							<form action="#">
								<div class="form-group">
									<label for="exampleFormControlInput1"><span class="fa fa-map-marker"></span> <strong> Address COD</strong></label>
									<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
								</div>
							</form>
							<a href="#" class="btn btn-primary">Save</a>
						</div>
						
						<div class="card-body">
							<h5 class="card-title"><span class="fa fa-file-video-o"></span> Belajar PHP untuk PEMULA : SESSION</h5>
							<h3>Total Rp. 200.000</h3>
							<label for="inputState">Group/Private</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>Group</option>
								<option>Private</option>
							</select>
						</div>
					</div>
					<div class="card-header">
						<h4>Payment</h4>
					</div>
					<div class="card-body">
						<form action="">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Indomart
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Alfamart
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Bank BRI
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Bank BNI
								</label>
							</div>
						</form>
						<a href="#"  class="btn btn-primary btn-md btn-block">Pay</a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<?php include './components/footer.php' ?>
</body>
</html>