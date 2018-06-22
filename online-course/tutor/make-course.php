<?php include 'process/session.php'; ?>
<section>
	<div class="container pt-3 mt-4 mb-4">
		<div class="row justify-content-center">
			<div class="col-md-9 content-body box-shadow">
				<h3 class="text-center mt-4">Create a Course</h3>
				<form method='post' enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="nama" class="form-control" placeholder="Insert your course title"  required="">
					</div>
					<div class="form-group">
						<label for="title">Sub Title Course</label>
						<input type="text" name="sub_judul" class="form-control" placeholder="Insert your course sub title"  required="">
					</div>
					<div class="form-group">
						<label for="title">Description</label>
						<textarea type="text" name="deskripsi" class="form-control" placeholder="Insert your description"  required=""></textarea>
					</div>
					<div class="form-group">
						<label for="title">Course Image</label>
						<input type="file" class="form-control" name="image"   id="file_input">
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="title">Level</label>
								<select class="form-control"  name="level" required="">
									<option selected>Choose...</option>
									<option value="Beginner">Beginner</option>
									<option value="Intermediate">Intermediate</option>
									<option value="Advance">Advance</option>
								</select>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Category</label>
								<select class="form-control"  name="kategori" required="">
									<option selected>Choose...</option>
									<option value="Development">Development</option>
									<option value="Design">Design</option>
									<option value="IT & Software">IT & Software</option>
									<option value="ELectronic">ELectronic</option>
									<option value="Micro">Micro Controller</option>
								</select>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Price</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">Rp</span>
									</div>
									<input type="number" class="form-control" id="validationDefaultUsername" placeholder="Price" aria-describedby="inputGroupPrepend2" required name="harga">
								</div>
							</div>
						</div>
					</div>	
					<div class="form-group">
						<label for="title">Link  Iframe Youtube </label>
						<small style="font-size: 12px;" class="text-muted">*sertakan link video youtube review course kamu. Contoh ( https://www.youtube.com/embed/[id_video])</small>
						<input type="text" class="form-control" name="link" required="" placeholder="Insert your link video ">
					</div>
					<div class="form-group">
						<label for="title">What Will  Learn?</label>
						<small style="font-size: 12px;" class="text-muted">*apa yang bisa dipelajari oleh murid.</small>
						<textarea type="text" name="pelajari" class="form-control" placeholder="Insert your Learn"  required=""></textarea>
					</div>
					<div class="form-group">
						<label for="title">Requirements</label>
						<small style="font-size: 12px;" class="text-muted">*persyaratan bagi murid</small>
						<textarea type="text" name="rekruitmen" class="form-control" placeholder="Insert your Reqeuitment"  required=""></textarea>
					</div>
					<div class="form-group pt-3 mb-3">
						<div class="row">
							<div class="col-md"><button name="save" class="btn btn-warning btn-block">Upload</button></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</section>

<!-- insert product to database  -->
<?php $id_tutor_pembuat = $_SESSION['tid']; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM tabel_tutor WHERE id_tutor='$id_tutor_pembuat' ") ?> 
<?php $tutor = $result->fetch_assoc();?>
<?php if (isset($_POST['save'])) {
	$nama_pembuat = $tutor['nama_depan_tutor'] ;
	$id_tutor = $_SESSION['tid'];
	$date = date('Y-m-d');
	$errors = $_FILES['image']['error'];
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
	$expensions= array("jpeg","jpg","png");

	if ($errors === 0) {
		if (in_array($file_ext,$expensions)== true) {
			if ($file_size < 500000) {
				echo "<script>alert('Successfull upload Course in Database');</script>";
				move_uploaded_file($file_tmp,"./uploads/".$file_name);
				mysqli_query($conn, "INSERT INTO tabel_produk (nama_produk, deskripsi_produk, level_produk, kategori_produk, foto_produk, harga_produk, link_video_iframe, rekruitmen_produk, pelajari_produk, id_tutor_fk, nama_tutor_pembuat, tanggal_pembuatan, sub_judul_produk) VALUES('$_POST[nama]','$_POST[deskripsi]', '$_POST[level]', '$_POST[kategori]', '$file_name', '$_POST[harga]', '$_POST[link]', '$_POST[rekruitmen]', '$_POST[pelajari]', '$id_tutor', '$nama_pembuat', '$date', '$_POST[sub_judul]')");
				echo "<meta http-equiv='refresh' content='1'>";
			}else{
				echo "<script>alert('( Upload Image )File size must be excately 500 KB');</script>";
			}
		}else{
			echo "<script>alert('( Upload Image ) Extension not allowed, please choose a JPEG or PNG file.');</script>";
		}
	}else{
		echo "<script>alert('( Upload Image ) Image not empty);</script>";
	}
}

?>

