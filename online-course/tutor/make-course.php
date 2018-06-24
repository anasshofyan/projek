<?php include 'process/session.php'; ?>
<section>
	<div class="container pt-3 mt-4 mb-4">
		<div class="row justify-content-center">
			<div class="col-md-9 content-body box-shadow">
				<h3 class="text-center mt-4">Create a Course</h3>
				<form method='post' enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Title</label>
						<small style="font-size: 12px;" class="text-muted">*isikan judul yang menarik</small>
						<input type="text" name="nama" class="form-control" placeholder="Insert your course title"  required="">
					</div>
					<div class="form-group">
						<label for="title">Sub Title Course</label>
						<small style="font-size: 12px;" class="text-muted">*isikan sub judul agar lebih jelas</small>
						<input type="text" name="sub_judul" class="form-control" placeholder="Insert your course sub title"  required="">
					</div>
					<div class="form-group">
						<label for="title">Description</label>
						<small style="font-size: 12px;" class="text-muted">*deskripsikan materi yang akan anda buat, agar murid tertarik untuk mempelajarinya</small>
						<textarea type="text" name="deskripsi" class="form-control" placeholder="Insert your description"  required=""></textarea>
					</div>
					<div class="form-group">
						<label for="title">Course Image</label>
						<small style="font-size: 12px;" class="text-muted">*upload gambar thumnail dengan ukuran (500Kb) dan dimensi (740x506)</small>
						<input type="file" class="form-control" name="image"   id="file_input">
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="title">Level</label>
								<small style="font-size: 12px;" class="text-muted">*pilih level</small>
								<select class="form-control"  name="level" required="">
									<option selected>Choose...</option>
									<option value="1">Beginner</option>
									<option value="2">Intermediate</option>
									<option value="3">Advance</option>
								</select>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Category</label>
								<small style="font-size: 12px;" class="text-muted">*pilih kategori</small>
								<select class="form-control"  name="kategori" required="">
									<option selected>Choose...</option>
									<option value="1">Development</option>
									<option value="2">Design</option>
									<option value="3">IT & Software</option>
									<option value="4">Electro</option>
								</select>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Price</label>
								<small style="font-size: 12px;" class="text-muted">*isi nominal harga yang ditawarkan</small>
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
						<small style="font-size: 12px;" class="text-muted">*apa yang bisa dipelajari oleh murid, isikan dengan lengkap agar murid tertarik dengan materi anda</small>
						<textarea  type="text" class="form-control"  required="" name="pelajari"></textarea>
					</div>
					<div class="form-group">
						<label for="title">Requirements</label>
						<small style="font-size: 12px;" class="text-muted">*persyaratan bagi murid, isikan dengan lengkap agar murid tahu apa yang akan diperispkan untuk belajar dengan materi anda</small>
						<textarea type="text" name="rekruitmen" class="form-control" placeholder="Insert your Reqeuitment"  required=""></textarea>
					</div>
					<div class="form-group pt-3 mb-3">
						<div class="row">
							<div class="col-md"><button name="save" class="btn btn-warning btn-block">Upload</button></div>
						</div>
					</div>
				</div>
			</form>
			<script>
				CKEDITOR.replace( 'pelajari' );
				CKEDITOR.replace( 'rekruitmen' );
			</script>
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
	$lebar_max       = 740;
	$tinggi_max      = 506;
	$lokasi_gambar   = $file_tmp;
	$ukuran_asli = GetImageSize($file_tmp);

		if ($errors === 0) {
			if (in_array($file_ext,$expensions)== true) {
				if ($file_size < 500000) {
					if ( $ukuran_asli[0] != $lebar_max and $ukuran_asli[1] != $tinggi_max ) {
						echo "<script>alert('your image size should be 740x506 ');</script>";
					}else{
						echo "<script>alert('Successfull upload Course in Database');</script>";
						move_uploaded_file($file_tmp,"./uploads/".$file_name);
						mysqli_query($conn, "INSERT INTO tabel_produk (nama_produk, deskripsi_produk, id_level, id_kategori, foto_produk, harga_produk, link_video_iframe, rekruitmen_produk, pelajari_produk, id_tutor_fk, nama_tutor_pembuat, tanggal_pembuatan, sub_judul_produk) VALUES('$_POST[nama]','$_POST[deskripsi]', '$_POST[level]', '$_POST[kategori]', '$file_name', '$_POST[harga]', '$_POST[link]', '$_POST[rekruitmen]', '$_POST[pelajari]', '$id_tutor', '$nama_pembuat', '$date', '$_POST[sub_judul]')");
						echo "<meta http-equiv='refresh' content='1'>";
					}
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

