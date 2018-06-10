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
	<div style="margin-top: 80px;">
	<?php include './components/navbar.php' ?>

	<!-- profile setting -->
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card " style="width: 18rem;">
					<img width="80%" class="m-4 rounded-circle img-thumbnail" src="./asset/img/icon/004-boy.svg" alt="Card image cap">
					<h4 class="card-title text-center ml-3 mr-3"> <?php
						$id = $_SESSION['uid'];
						echo mysqli_fetch_array(mysqli_query($conn, "SELECT nama FROM users WHERE id_user = '$id'"))[0];
						?> </h4>
					<p class="card-text text-center"> 
						<?php
						$id = $_SESSION['uid'];
						echo mysqli_fetch_array(mysqli_query($conn, "SELECT email FROM users WHERE id_user = '$id'"))[0];
						?>
					</p>
					<ul class="nav flex-column nav-pills text-center"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<li class="list-group-item">
							<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Photo</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content col-md-8" id="v-pills-tabContent">

				<!-- photo -->
				<div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					<div class="card">
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item text-center">
									<h3 class="card-title">Photo</h3>
									<p class="card-text">Add a nice photo of yourself for your profile.</p>
								</li>
								<li class="list-group-item">
									<label for="exampleFormControlTextarea1">Img Preview</label>
									<div class="card mb-4">
										<div class="card-img-top text-center">
											<div class="jumbotron">
												<i class="fa fa-user-circle-o fa-5x" style="color: #BBBBBB;"></i>
											</div>
											<p class="card-text pb-3">Your image should be at minimum 200x200 pixels and maximum 6000x6000 pixels.</p>
										</div>
									</div>
									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="inputGroupFile02">
											<label class="custom-file-label" for="inputGroupFile02">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text" id="">Upload</span>
										</div>
									</div>
								</li>
							</ul>
							<div class="card-group-item text-center mt-3">
								<button class="btn btn-warning">Save</button>
							</div>
						</div>
					</div>
				</div>
				<!-- ent photo -->

				<!-- profile -->
				<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					<div class="card">
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item text-center">
									<h3 class="card-title">Profile</h3>
									<p class="card-text">Add information about yourself to share on your profile.</p>
								</li>
								<li class="list-group-item">
									<form>
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Basic</label>
											<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Firts Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
										</div>
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Headline" aria-label="Recipient's username" aria-describedby="basic-addon2">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">60</span>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Biograpy</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Address</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										</div>
									</form>
								</li>
								<li class="list-group-item">
									<label for="basic-url">Links</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon3">Website http://</span>
										</div>
										<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon3">http://twitter.com/</span>
										</div>
										<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon3">http://www.facebook.com/</span>
										</div>
										<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon3">http://www.youtube.com/</span>
										</div>
										<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
									</div>
								</li>
							</ul>
							<div class="card-group-item text-center mt-3">
								<button class="btn btn-warning">Save</button>
							</div>
						</div>
					</div>
				</div>
				<!-- end profile  -->
			</div>
		</div>
	</div>
	<!-- end profile sstting -->
	<div class="m-5"></div>
	<!-- Footer -->
	<?php
	include './components/footer.php'; ?>
	<!-- end Footer -->

</body>
</html>