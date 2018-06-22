<?php include 'process/session.php'; ?>
<!-- memanggil data tabel produk -->
<?php $edit = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_produk='$_GET[id]'"));?>
<div style="margin-top: 60px;"></div>
<!-- form update products -->
<section>
	<div class="container pt-3 mt-5 mb-4 ">
		<div class="row justify-content-center">
			<div class="col-md-9 content-body box-shadow">
				<h3 class="text-center">Edit  Course</h3>
				<form method='post' enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Title Course</label>
						<small style="font-size: 12px;" class="text-muted">*isikan judul yang menarik</small>
						<input type="text" name="nama" class="form-control" required="" placeholder="Insert your course title" value="<?= $edit['nama_produk']; ?>">
					</div>
					<div class="form-group">
						<label for="title">Sub Title Course</label>
						<small style="font-size: 12px;" class="text-muted">*isikan sub judul agar lebih jelas</small>
						<input type="text" name="sub_judul" class="form-control" required="" placeholder="Insert your course sub title" value="<?= $edit['sub_judul_produk']; ?>">
					</div>
					<div class="form-group">
						<label for="title">Description</label>
						<small style="font-size: 12px;" class="text-muted">*deskripsikan materi yang akan anda buat, agar murid tertarik untuk mempelajarinya</small>
						<textarea type="text" required="" name="deskripsi" class="form-control"><?= $edit['deskripsi_produk']; ?></textarea>
					</div>
					<label for="title">Course Image</label>
					<small style="font-size: 12px;" class="text-muted">*upload gambar thumnail dengan ukuran (500Kb) dan dimensi (740x506)</small>
					<div class="form-group">
						<img src="./uploads/<?= $edit['foto_produk'];?>" width="200px" class="mb-2 img-thumbnail">
						<input type="file" class="form-control" name="image">
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="title">Level</label>
								<small style="font-size: 12px;" class="text-muted">*pilih level</small>
								<select class="form-control"  name="level">
									<option selected><?= $edit['level_produk']; ?></option>
									<option value="Beginner">Beginner</option>
									<option value="Intermediate">Intermediate</option>
									<option value="Advance">Advance</option>
								</select>
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Category</label>
								<small style="font-size: 12px;" class="text-muted">*pilih kategori</small>
								<select class="form-control"  name="kategori">
									<option selected><?= $edit['kategori_produk']; ?></option>
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
								<small style="font-size: 12px;" class="text-muted">*isi nominal harga yang ditawarkan</small>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">Rp</span>
									</div>
									<input type="text" class="form-control" required name="harga" value="<?= number_format($edit['harga_produk']); ?>">
								</div>
							</div>
						</div>
					</div>					
					<div class="form-group">
						<label for="title">Link Iframe Youtube</label>
						<small style="font-size: 12px;" class="text-muted">*sertakan link video youtube review course kamu. Contoh ( https://www.youtube.com/embed/[id_video])</small>
						<input type="text" class="form-control"  name="link" required="" placeholder="Insert your link video" value="<?=  $edit["link_video_iframe"]; ?>">
					</div>
					<div class="form-group">
						<label for="title">What Will  Learn?</label>
						<small style="font-size: 12px;" class="text-muted">*apa yang bisa dipelajari oleh murid, isikan dengan lengkap agar murid tertarik dengan materi anda</small>
						<textarea type="text" required="" name="pejalari" class="form-control"><?= $edit['pelajari_produk']; ?></textarea>
					</div>
					<div class="form-group">
						<label for="title">Requirements</label>
						<small style="font-size: 12px;" class="text-muted">*persyaratan bagi murid, isikan dengan lengkap agar murid tahu apa yang akan diperispkan untuk belajar dengan materi anda</small>
						<textarea type="text"  required="" name="rekruitmen" class="form-control"><?= $edit['rekruitmen_produk']; ?></textarea>
					</div>
					<div class="form-group pt-3 mb-3">
						<button name="update" class="btn btn-warning btn-block">Update</button>
					</div>
				</div>
			</form>
			<script>
				CKEDITOR.replace( 'pejalari' );
				CKEDITOR.replace( 'rekruitmen' );
			</script>
		</div>
	</div>
</div>
</section>
<!-- end form update products -->

<!-- update produk -->
<?php $id_tutor_pembuat = $_SESSION['tid']; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM tabel_tutor WHERE id_tutor='$id_tutor_pembuat' ") ?> 
<?php $tutor = $result->fetch_assoc();?>
<?php 
if (isset($_POST['update'])) {
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


	if (!empty($file_tmp)) {
		if ($errors === 0) {
			if (in_array($file_ext,$expensions)== true) {
				if ($file_size < 500000) {
					if ( $ukuran_asli[0] != $lebar_max and $ukuran_asli[1] != $tinggi_max ) {
						echo "<script>alert('your image size should be 740x506 ');</script>";
					}else{
						move_uploaded_file($file_tmp,"./uploads/".$file_name);
						$result = mysqli_query($conn, "UPDATE tabel_produk SET nama_produk='$_POST[nama]', deskripsi_produk='$_POST[deskripsi]', foto_produk='$file_name', level_produk='$_POST[level]', kategori_produk='$_POST[kategori]', harga_produk='$_POST[harga]', link_video_iframe='$_POST[link]', rekruitmen_produk='$_POST[rekruitmen]', pelajari_produk='$_POST[pejalari]', id_tutor_fk='$id_tutor', nama_tutor_pembuat='$nama_pembuat', tanggal_pembuatan='$date', sub_judul_produk='$_POST[sub_judul]' WHERE id_produk='$_GET[id]'");
						echo "<script>alert('( Update Image ) Successfull Update Course in Database');</script>";
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
	}else{
		$result = mysqli_query($conn, "UPDATE tabel_produk SET nama_produk='$_POST[nama]', deskripsi_produk='$_POST[deskripsi]',level_produk='$_POST[level]', kategori_produk='$_POST[kategori]', harga_produk='$_POST[harga]', link_video_iframe='$_POST[link]', rekruitmen_produk='$_POST[rekruitmen]', pelajari_produk='$_POST[pejalari]', id_tutor_fk='$id_tutor', nama_tutor_pembuat='$nama_pembuat', tanggal_pembuatan='$date', sub_judul_produk='$_POST[sub_judul]' WHERE id_produk='$_GET[id]'");
		echo "<script>alert('( No Update Image ) Successfull Update Course in Database');</script>";
		echo "<meta http-equiv='refresh' content='1'>";
	}
}
?>
<!-- end update produk -->
