<body class="bg-light">
	<div class="container">
		<a href="./index.php"><img src="./asset/img/logo/logo.png" width="219" height="35"  style="display: block; margin-right: auto; margin-left: auto; margin-top: 90px;"></a>
		<div class="row text-center">
			<div class="col">
				<p class="mt-3" style="font-size: 20px;">Account/Login</p>
			</div>
		</div>
		<!-- validation login -->
		<?php 
		if (isset($_POST["login"])) {

			$username = $_POST["username"];
			$password = $_POST["password"];

			$result = mysqli_query($conn, "SELECT * FROM table_user WHERE user_name = '$username'");

  			//cek username
			if (mysqli_num_rows($result)===1) {
   				 //cek password
				$row = mysqli_fetch_assoc($result);
				if(password_verify($password, $row["password_user"])){
      			//set sesion 
					$_SESSION['login_user'] = true;
					$_SESSION['uid'] = $row["id_user"];
					
					echo "<div class='row justify-content-center'>
					<div class='col-md-4'>
					<div class='alert alert-info'><p style='font-size: 14px;'>
					Login Berhasil</p>
					</div>
					</div>
					</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php?page=home'>";
				}
			}else{
				echo "<div class='row justify-content-center'>
				<div class='col-md-4'>
				<div class='alert alert-danger'><p style='font-size: 14px;'>
				Username dan Password yang kamu masukkan salah!</p>
				</div>
				</div>
				</div>";
				echo "<meta http-equiv='refresh' content='1'>";
			}
		}
		?>
		<!-- end validation login -->
		<!-- form login -->
		<div class="row justify-content-center mt-2">
			<div class="col-md-4">
				<form method="POST">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control"  name="username" placeholder="Enter Username" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>
					<button type="submit" name="login" class="btn btn-warning  btn-block">Login</button>
				</form>
			</div>
		</div>
		<!-- form login -->
		<!-- lin -->
		<div class="row justify-content-center mt-3">
			<div class="col-md-4 text-center">
				<p style="font-size: 14px;">or connect with : </p>
				<a href=""><span class="fa fa-google fa-3x pr-3 ico-color" ></span></a>
				<a href=""><span class="fa fa-facebook fa-3x ico-color"></span></a>
				<p class="mt-3" style="font-size: 14px;">Forgot password? <a href="forgot-password.php" class="ico-color"> click here to reset </a></p>
				<p class="mt-0" style="font-size: 14px;">New User? <a href="index.php?page=register-user" class="ico-color"> click here to register </a> </p>
			</div>
		</div>
		<!-- end link -->
	</div>
</body>
