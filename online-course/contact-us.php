		<!-- contact us -->
		<section id="contact" class="contact mb-5">
			<div class="container">
				<div class="row pt-4 mb-4">
					<div class="col text-center">
						<h2>Contact Us</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<div class="card text-white bg-warning mb-3">
							<div class="card-body text-center">
								<h5 class="card-title">Contact Us</h5>
								<p class="card-text">The Learn Technique Solutions</p>
							</div>
						</div>
						<ul class="list-group">
							<li class="list-group-item"><h1>Location</h1></li>
							<li class="list-group-item">My Office</li>
							<li class="list-group-item">Surabaya</li>
							<li class="list-group-item">East Java</li>
							<li class="list-group-item text-center bg-light">Social Media</li>
							<li class="list-group-item text-center">
								<a href="https://instagram.com/tutorteknik" class="mr-3">
									<span class="fa fa-instagram fa-4x"></span>
								</a>
								<a href="https://facebook.com/tutorteknik" class="mr-3">
									<span class="fa fa-facebook fa-4x"></span>
								</a>
								<a href="https://twitter.com/tutorteknik" class="mr-3">
									<span class="fa fa-twitter fa-4x"></span>
								</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-6">
						<form method="POST">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required="">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" name="email" placeholder="Masukan Email"  required="">
							</div>
							<div class="form-group">
								<label for="telp">No Telp</label>
								<input type="number" class="form-control" name="notel" placeholder="Masukan No telp"  required="">
							</div>
							<div class="form-group">
								<label for="nama">Pesan</label>
								<textarea type="text" class="form-control" name="pesan" placeholder="Masukan Pesan"  required=""></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-warning" name="kirim"> Kirim Pesan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact us -->
		<section>
			<div class="container-fluid">
				<div class="row">
					<iframe <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6380169981962!2d112.78701111436962!3d-7.281963094744023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa15a9cc1a99%3A0x432578fe6f6e2ee5!2sAnak+Teknik+Indonesia!5e0!3m2!1sid!2sid!4v1529966909230"
					width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
		<!-- insert to database -->
		<?php 
		if (isset($_POST['kirim'])) {
			mysqli_query($conn, "INSERT INTO tabel_kontak_kami (nama_pengunjung, email_pengunjung, notel_pengunjung, pesan_pengunjung) VALUES('$_POST[nama]','$_POST[email]', '$_POST[notel]', '$_POST[pesan]')");
			echo "<script>alert('Pesan telah terkirim ')</script>";
			echo "<meta http-equiv='refresh' content='1'>";
		}
		?>
		<!-- end insert to database -->
