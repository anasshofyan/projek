<?php include 'process/session.php'; ?>
<?php $id = $_SESSION['tid'];?>
<?php $pecah = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tabel_tutor WHERE id_tutor='$id'" )); ?>
<!-- profile setting -->
<div style="margin-top: 80px;"></div>
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-4 mb-3">
			<div class="card ">
				<img src="./uploads/<?= $pecah['foto_tutor'];
				?>" class="rounded-circle mt-3 mr-auto ml-auto" width="190px"  alt="no image">
				<h5 class="card-title text-center ml-3 mr-3 mt-3"> 
					<?= $pecah['nama_depan_tutor'];  ?> <?= $pecah['nama_belakang_tutor'];  ?>
				</h5>
				<p class="card-text text-center mb-3"><?= $pecah['email_tutor'];  ?></p>
			</div>
		</div>

		<!-- form profile -->
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<form method="post" enctype="multipart/form-data">
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center">
								<h4 class="card-title">Profile</h4>
								<p class="card-text">Add information about yourself to share on your profile.</p>
							</li>
							<li class="list-group-item">
								<div class="row">
									<div class="col-md">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">First name</label>
											<input type="text" name="Nama" class="form-control"  placeholder="First name" value="<?= $pecah['nama_depan_tutor'];?>"  required="">
										</div>
									</div>
									<div class="col-md">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Last name</label>
											<input type="text" name="nama" class="form-control"  placeholder="Last name" value="<?= $pecah['nama_belakang_tutor'];?>"  required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Photo</label>
									<input type="file" class="form-control" name="foto">
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Bio</label>
									<textarea class="form-control" name="bio" rows="3"><?= $pecah['bio_tutor'];?></textarea>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">TTL</label>
											<input type="date" class="form-control" name="tl" 	value="<?= $pecah['tl_tutor'];?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Contact</label>
											<input type="number" class="form-control" name="kontak" placeholder="Contact" value="<?= $pecah['telepon_tutor'];?>">
										</div>
									</div>
								</div>										
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Address</label>
											<input class="form-control" name="alamat" value="<?= $pecah['alamat_tutor'];?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">City</label>
											<input type="text"  name="kota" class="form-control" placeholder="City" value="<?= $pecah['kota_tutor'];?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Country</label>
											<input type="text"  name="negara" class="form-control" placeholder="Country" value="<?= $pecah['negara_tutor'];?>">
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<label for="basic-url">Links</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">Website http://</span>
										</div>
										<input type="text" class="form-control" name="link_web" aria-describedby="basic-addon3" value="<?= $pecah['link_web'];?>">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon3" >http://twitter.com/</span>
										</div>
										<input type="text" class="form-control"  name="link_twitter"  aria-describedby="basic-addon3"  value="<?= $pecah['link_twitter'];?>">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon3">http://www.facebook.com/</span>
										</div>
										<input type="text" class="form-control"   name="link_facebook" aria-describedby="basic-addon3" value="<?= $pecah['link_facebook'];?>">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon3">http://www.linkeid.com/</span>
										</div>
										<input type="text" class="form-control"  name="link_linkeid" aria-describedby="basic-addon3" value="<?= $pecah['link_linkeid'];?>">
									</div>
								</li>
							</ul>
							<div class="card-group-item text-center mt-3">
								<button class="btn btn-warning btn-block" name="save">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- end form profile -->
		</div>
	</div>
</div>
</div>

<!-- update profile -->
<?php 
if (isset($_POST['save'])) {
	$namafoto = $_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];

		// jika foto diubah
	if (!empty($lokasifoto)) {
		move_uploaded_file($lokasifoto, "./uploads/$namafoto");
		$result = mysqli_query($conn, "UPDATE tabel_tutor SET nama_depan_tutor='$_POST[Nama]', nama_belakang_tutor='$_POST[nama]', bio_tutor='$_POST[bio]', telepon_tutor='$_POST[kontak]', tl_tutor='$_POST[tl]', alamat_tutor='$_POST[alamat]', kota_tutor='$_POST[kota]', negara_tutor='$_POST[negara]', link_web='$_POST[link_web]', link_twitter='$_POST[link_twitter]', link_facebook='$_POST[link_facebook]', link_linkeid='$_POST[link_linkeid]', foto_tutor='$namafoto' WHERE id_tutor='$id'");
	}else{
		$result = mysqli_query($conn, "UPDATE tabel_tutor SET nama_depan_tutor='$_POST[Nama]', nama_belakang_tutor='$_POST[nama]', bio_tutor='$_POST[bio]', telepon_tutor='$_POST[kontak]',tl_tutor='$_POST[tl]', alamat_tutor='$_POST[alamat]', kota_tutor='$_POST[kota]', negara_tutor='$_POST[negara]', link_web='$_POST[link_web]', link_twitter='$_POST[link_twitter]', link_facebook='$_POST[link_facebook]', link_linkeid='$_POST[link_linkeid]' WHERE id_tutor='$id'");
	}
	echo "<meta http-equiv='refresh' content='0'>";
}
?>
<!-- end update profile -->