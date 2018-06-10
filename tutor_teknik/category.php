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
		<?php include './components/navbar.php'; ?>

		<div style="margin-top: px;">

			<?php if (isset($_GET['page'])) {
				if ($_GET['page']=="beginner") {
					include "category/beginner.php";	
				}elseif($_GET['page']=="intermediate"){
					include "category/intermediate.php";
				}elseif($_GET['page']=="advance"){
					include "category/advance.php";
				}
			} ?> 

		</body>
		</html>
