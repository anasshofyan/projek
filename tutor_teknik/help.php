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
	<link rel="stylesheet" href="asset/css/style.css">

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
	
	<!-- Navbar  -->
	<nav class="navbar navbar-light bg-light justify-content-between shadow">
		<div class="container">
			<a class="navbar-brand" href="index.php" >
				<span class="color-grey">Back</span>
			</a>
			<a class="navbar-brand" href="#">
				<img src="./asset/img/logo/logo.png" width="160" height="25" class="d-inline-block align-top" alt="">
			</a>
			<div class="form-inline p-2">
				<div class="dropdown">
					<span class="fa fa-user-circle"> </span> Hi 
					<a href="">
					<?php
					$id = $_SESSION['uid'];
					echo mysqli_fetch_array(mysqli_query($conn, "SELECT nama FROM users WHERE id_user = '$id'"))[0];
					?></a>
				</div>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

<!-- content -->
<section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8">
				<h4>Lorem ipsum dolor sit amet.</h4>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati autem odit. Quis dolorum ipsa quisquam officiis harum aperiam nostrum, non officia, voluptates ullam sapiente corporis soluta architecto aliquam ea fugiat amet tempora maiores, et. Illo ipsam nemo rem. Obcaecati quisquam error aspernatur incidunt earum saepe magni quam neque. Aperiam dolorem, accusantium nihil ea impedit quaerat eius! Aliquid repudiandae dolores hic quae, beatae pariatur doloremque, voluptate vitae quibusdam ratione magnam voluptas sint ducimus. Voluptates veniam unde omnis laudantium sit, dignissimos, neque animi in, non praesentium laboriosam tempore. Ratione maxime minus repellendus dolore cupiditate excepturi dolores nemo a reiciendis iusto quod nam ipsum necessitatibus, itaque odio quam blanditiis, minima quibusdam, unde saepe natus veritatis. Doloremque ratione sed, officia enim, cumque ullam. Non repellat consequatur ut, neque impedit expedita temporibus delectus sed magnam libero. Voluptate perferendis porro a voluptatibus cum voluptas! Laborum vitae earum accusamus explicabo consequatur eaque aut esse error hic temporibus aperiam, quae laboriosam quisquam eveniet a omnis. Soluta voluptas a assumenda necessitatibus pariatur dolorum eligendi praesentium animi quod repellat, nihil molestias iusto voluptates minus sit provident error repellendus odio quam fugiat! Id quo, sapiente sequi optio voluptates. Doloribus veniam reprehenderit quasi libero ad tempore necessitatibus! Sunt eum doloremque, culpa officiis itaque vitae nesciunt autem quos vero omnis tempora, quo porro sed aliquam reiciendis. Expedita aperiam sapiente, natus totam quaerat quia cupiditate at fugiat animi molestias dolore est blanditiis possimus maxime ad quam asperiores, magni nesciunt quo omnis culpa, eligendi minus? Ducimus impedit, aliquam ea nobis maiores accusamus quam vero temporibus, placeat vitae iste repudiandae velit ipsam dicta exercitationem quisquam deleniti ipsa unde. Dolorem fugit adipisci eaque iste numquam sit, sed reprehenderit hic aliquam, nam ut provident reiciendis culpa consequuntur asperiores, porro labore in deleniti dicta omnis ratione. Dignissimos soluta, similique quo voluptatem asperiores nemo. Beatae praesentium, quaerat quisquam quas.</p>
			</div>
			<div class="col-md-4">
				<div class="card mt-5">
					<div class="card-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et maiores vitae eos laboriosam rerum? Vitae repellendus recusandae pariatur suscipit quia!</p>
						<a href="#" class="btn btn-outline-secondary ">Learn More</a>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et maiores vitae eos laboriosam rerum? Vitae repellendus recusandae pariatur suscipit quia!</p>
						<a href="#" class="btn btn-outline-secondary ">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end content -->

<!-- footer -->
<?php include 'components/footer.php'; ?>
<!-- end footer -->

</body>
</html>
