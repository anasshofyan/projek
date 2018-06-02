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
	<!-- Image and text -->
	<nav class="navbar navbar-light bg-light justify-content-between 	shadow">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="./asset/img/logo/logo.png" width="160" height="25" class="d-inline-block align-top" alt="">
			</a>
			<div class="form-inline p-2">
				<a href="teach-tutor.php"><button class="btn btn-outline-warning">Exit</button></a>
			</div>
		</div>
	</nav>

	<body >
		<section>
			<div class="container shadow pt-3 mt-4 mb-4">
				<div class="row">
					<div class="col-md">
						<h3 class="text-center">Make Course</h3>
						<form>
							<div class="form-group">
								<label for="title">Title</label>
								<input type="email" class="form-control" id="title" placeholder="Insert your course title">
							</div>
							<div class="form-group">
								<label for="title">Subtitle</label>
								<input type="email" class="form-control" id="title" placeholder="Insert your course subtitle">
							</div>
							<div class="form-group">
								<label for="title">Description</label>
								<textarea type="text" class="form-control" id="nama" placeholder="Insert your description"></textarea>
							</div>
							<div class="row">
								<div class="col-md">
									<label for="title">Level</label>
									<select class="custom-select custom-select mb-3">
										<option selected>Select Category</option>
										<option value="1">Baginner</option>
										<option value="2">Intermediate</option>
										<option value="3">Advance</option>
										<option value="3">All Levels</option>
									</select>
								</div>
								<div class="col-md">
									<label for="title">Category</label>
									<select class="custom-select custom-select mb-3">
										<option selected>Select Category</option>
										<option value="1">Design</option>
										<option value="2">IT & Software</option>
										<option value="3">Electronic</option>
										<option value="3">Micro</option>
									</select>
								</div>
								<div class="col-md">
									<label for="title">Sub Category</label>
									<select class="custom-select custom-select mb-3">
										<option selected>Select Sub Category</option>
										<option value="1">Design</option>
										<option value="2">IT & Software</option>
										<option value="3">Electronic</option>
										<option value="3">Micro</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="title">Course Image</label>
								<div class="input-group mb-3">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputGroupFile02">
										<label class="custom-file-label" for="inputGroupFile02">Choose image</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text" id="">Upload</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="title">Price</label>
								<select class="custom-select custom-select">
									<option selected>Select</option>
									<option value="1">Rp. 200.000/hours</option>
									<option value="2">Rp. 200.000/hours</option>
									<option value="3">Rp. 200.000/hours</option>
									<option value="3">Rp. 200.000/hours</option>
								</select>
							</div>
							<div class="form-group">
								<label for="title">Link Video</label>
								<input type="email" class="form-control" id="title" placeholder="Insert your link video ">
							</div>
							<div class="form-group pt-3 mb-3">
								<button type="button" class="btn btn-warning btn-block">Upload</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>

	<?php include './components//footer.php'; ?>

</body>
</html>