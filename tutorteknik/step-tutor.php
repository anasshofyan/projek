<?php 
include './tag/tagtag/link.php';
include './tag/tagtag/js.php';
?>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light justify-content-between 	shadow">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="./asset/img/logo.png" width="160" height="25" class="d-inline-block align-top" alt="">
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

<?php include './tag/tagtag/footer.php'; ?>

