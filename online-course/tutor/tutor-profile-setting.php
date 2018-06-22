<?php include 'process/session.php'; ?>
<?php $id = $_SESSION['tid'];?>
<?php $pecah = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tabel_tutor WHERE id_tutor='$id'" )); ?>

<!-- profile setting -->
<div style="margin-top: 80px;"></div>
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-4 mb-3">
			<div class="content-body box-shadow">
				<img src="./uploads/<?= $pecah['foto_tutor'];
				?>" class="rounded-circle m-5" width="190px"  alt="no image">
				<h5 class="card-title text-center ml-3 mr-3 mt-3"> 
					<?= $pecah['nama_depan_tutor'];  ?> <?= $pecah['nama_belakang_tutor'];  ?>
				</h5>
				<p class="card-text text-center mb-3"><?= $pecah['email_tutor'];  ?></p>
			</div>
		</div>

		<!-- form profile -->
		<div class="col-md-8">
			<div class="content-body box-shadow">
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
											<label for="">First name</label>
											<input type="text" name="Nama" class="form-control"  placeholder="First name" value="<?= $pecah['nama_depan_tutor'];?>"  required="">
										</div>
									</div>
									<div class="col-md">
										<div class="form-group">
											<label for="">Last name</label>
											<input type="text" name="nama" class="form-control"  placeholder="Last name" value="<?= $pecah['nama_belakang_tutor'];?>"  required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="">Photo</label>
									<input type="file" class="form-control" name="image">
								</div>
								<div class="form-group">
									<label for="">Bio</label>
									<textarea class="form-control" name="bio" rows="3"><?= $pecah['bio_tutor'];?></textarea>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="">TTL</label>
											<input type="date" class="form-control" name="tl" 	value="<?= $pecah['tl_tutor'];?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="">Contact</label>
											<input type="number" class="form-control" name="kontak" placeholder="Contact" value="<?= $pecah['telepon_tutor'];?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="">Address</label>
									<input class="form-control" name="alamat" placeholder="Address" value="<?= $pecah['alamat_tutor'];?>">
								</div>										
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Districts</label>
											<input class="form-control" name="kecamatan_tutor" placeholder="Districts" value="<?= $pecah['kecamatan_tutor'];?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="">City</label>
											<input type="text"  name="kota" class="form-control" placeholder="City" value="<?= $pecah['kota_tutor'];?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Zip Code</label>
											<input type="text"  name="zip" class="form-control" placeholder="Zip Code" value="<?= $pecah['zip_tutor'];?>">
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
										<input type="text" class="form-control"   name="link_facebook" aria-describedby="basic-addon3" value="http://www.facebook.com/<?= $pecah['link_facebook'];?>">
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
	$errors = $_FILES['image']['error'];
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
	$expensions= array("jpeg","jpg","png");
	$lebar_max       = 640;
	$tinggi_max      = 640;
	$lokasi_gambar   = $file_tmp;
	$ukuran_asli = GetImageSize($file_tmp);

	if (!empty($file_tmp)) {
		if ($errors === 0) {
			if (in_array($file_ext,$expensions)== true) {
				if ($file_size < 500000) {
					if ( $ukuran_asli[0] != $lebar_max and $ukuran_asli[1] != $tinggi_max ) {
						echo "<script>alert('your profile photo size should be 640x640 ');</script>";
					}else{
						move_uploaded_file($file_tmp, "./uploads/$file_name");
						$result = mysqli_query($conn, "UPDATE tabel_tutor SET nama_depan_tutor='$_POST[Nama]', nama_belakang_tutor='$_POST[nama]', bio_tutor='$_POST[bio]', telepon_tutor='$_POST[kontak]', tl_tutor='$_POST[tl]', alamat_tutor='$_POST[alamat]', kota_tutor='$_POST[kota]', zip_tutor='$_POST[zip]', link_web='$_POST[link_web]', link_twitter='$_POST[link_twitter]', link_facebook='$_POST[link_facebook]', link_linkeid='$_POST[link_linkeid]', foto_tutor='$file_name', kecamatan_tutor='$_POST[kecamatan_tutor]' WHERE id_tutor='$id'");
						echo "<script>alert('( Update Image ) Successfull Update Your Profile');</script>";
						echo "<meta http-equiv='refresh' content='0'>";
					}
					
				}else{
					echo "<script>alert('( Upload Image ) File size must be excately 500 KB');</script>";
				}
			}else{
				echo "<script>alert('( Upload Image ) Extension not allowed, please choose a JPEG or PNG file.');</script>";
			}
		}else{
			echo "<script>alert('( Upload Image ) Image not empty);</script>";
		}
	}else{
		$result = mysqli_query($conn, "UPDATE tabel_tutor SET nama_depan_tutor='$_POST[Nama]', nama_belakang_tutor='$_POST[nama]', bio_tutor='$_POST[bio]', telepon_tutor='$_POST[kontak]',tl_tutor='$_POST[tl]', alamat_tutor='$_POST[alamat]', kota_tutor='$_POST[kota]', zip_tutor='$_POST[zip]', link_web='$_POST[link_web]', link_twitter='$_POST[link_twitter]', link_facebook='$_POST[link_facebook]', link_linkeid='$_POST[link_linkeid]',  kecamatan_tutor='$_POST[kecamatan_tutor]'  WHERE id_tutor='$id'");
		echo "<script>alert('( No Update Image ) Successfull Update Your Profile');</script>";
		echo "<meta http-equiv='refresh' content='0'>";
	}
}
?>