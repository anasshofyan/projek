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
					<li class="list-group-item">Lamongan</li>
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

<!-- insert to database -->
<?php 
if (isset($_POST['kirim'])) {
	mysqli_query($conn, "INSERT INTO tabel_kontak_kami (nama_pengunjung, email_pengunjung, notel_pengunjung, pesan_pengunjung) VALUES('$_POST[nama]','$_POST[email]', '$_POST[notel]', '$_POST[pesan]')");
	echo "<script>alert('Pesan telah terkirim ')</script>";
	echo "<meta http-equiv='refresh' content='1'>";
}
?>
<!-- end insert to database -->
