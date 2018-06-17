<div class="bg-light">
	<div class="container">
		<a href="./index.php"><img src="./asset/img/logo/logo.png" width="219" height="35"  style="display: block; margin-right: auto; margin-left: auto; margin-top: 90px;"></a>
		<div class="row text-center">
			<div class="col">
				<p class="mt-3" style="font-size: 20px;">Account/Register</p>
			</div>
		</div>
		<!-- register user -->
		<?php 
		if (isset($_POST["register"])) {
			if (registrasi($_POST)>0) {
				echo "<div class='row justify-content-center'>
				<div class='col-md-4'>
				<div class='alert alert-info'><p style='font-size: 14px;'>
				Data telah dimasukan ke database, silahkan login </p>
				</div>
				</div>		
				</div>";
				echo "<meta http-equiv='refresh' content='2;url=index.php?page=login-user'>";
			}
		}else{
			echo mysqli_error($conn);
		}
		function registrasi($data){
			GLOBAL $conn;

			$nama = $data["nama"];
			$username = strtolower(stripcslashes($data["username"]));
			$email = $data["email"];
			$password = mysqli_real_escape_string($conn, $data["password"]);
			$password1 = mysqli_real_escape_string($conn, $data["password1"]);

  //cek username sudah ada atau belum
			$result = mysqli_query($conn, "SELECT user_name FROM table_user WHERE user_name = '$username'");

			if (mysqli_fetch_assoc($result)) {
				echo "<div class='row justify-content-center'>
				<div class='col-md-4'>
				<div class='alert alert-danger'><p style='font-size: 14px;'>
				Username telah digunakan </p>
				</div>
				</div>		
				</div>";
				echo "<meta http-equiv='refresh' content='1'>";
				return false;
			}
    //cek password
			if ($password != $password1) {
				echo "<div class='row justify-content-center'>
				<div class='col-md-4'>
				<div class='alert alert-danger'><p style='font-size: 14px;'>
				Password yang anda masuk kan tidak sesuai!</p>
				</div>
				</div>		
				</div>";
				echo "<meta http-equiv='refresh' content='1'>";
				return false;
			}

  //enkripsi password
			$password = password_hash($password, PASSWORD_DEFAULT);

   //menambahkan ke database
			mysqli_query($conn, "INSERT INTO table_user (nama_depan, user_name, email_user, password_user) VALUES ('$nama', '$username', '$email', '$password')");

			return mysqli_affected_rows($conn); 
		}
		?>
		<!-- end register user -->
		<!-- form register -->
		<div class="row justify-content-center mt-2">
			<div class="col-md-4">
				<form method="POST">
					<div class="form-group">
						<label for="nama">Your Name</label>
						<input type="text" class="form-control" name="nama" placeholder="Enter Name" required="">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Enter Username" required="">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" name="email" placeholder="Enter Email" required="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
					</div>
					<div class="form-group">
						<label for="comfirm-password">Comfirm Password</label>
						<input type="password" class="form-control" name="password1" placeholder="Comfirm Password" required="">
					</div>
					<button type="submit" name="register" class="btn btn-warning btn-block">Sign Up</button>
				</form>
			</div>
		</div>
		<!-- end form register -->
		<!-- link -->
		<div class="row justify-content-center mt-3">
			<div class="col-md-4 text-center">
				<p style="font-size: 14px;">or connect with : </p>
				<a href=""><span class="fa fa-google fa-3x pr-3 ico-color" ></span></a>
				<a href=""><span class="fa fa-facebook fa-3x ico-color"></span></a>
				<p class="mt-3" style="font-size: 14px;">Forgot password? <a href="forgot-password.php" class="ico-color"> click here to reset </a></p>
				<p class="mt-0" style="font-size: 14px;">Have an Account? <a href="login-user.php" class="ico-color"> Click here to login </a> </p>
			</div>
		</div>
		<!-- end link -->
	</div>
</div>