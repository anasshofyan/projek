<?php include 'process/session.php'; ?>
<?php if (isset($_GET['status'])){
	if ($_GET['status']==1) {
		echo '<div class="container">
		<div class="row justify-content-center" >
		<div class="col-md-3 text-center">
		<div class="alert alert-info" style="z-index: 99; position:absolute; top:100px ;">Data added in database</div>
		</div>
		</div>
		</div>';
	}
} ?>	
<section>
	<div class="container pt-3 mt-4 mb-4">
		<div class="row justify-content-center">
			<div class="col-md-9 content-body box-shadow">
				<h3 class="text-center mt-4">Make Course</h3>
				<form method='post' enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="nama" class="form-control" placeholder="Insert your course title"  required="">
					</div>
					<div class="form-group">
						<label for="title">Description</label>
						<textarea type="text" name="deskripsi" class="form-control" placeholder="Insert your description"  required=""></textarea>
					</div>
					<div class="form-group">
						<label for="title">Course Image</label>
						<input type="file" class="form-control" name="foto"  required="">
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="title">Level</label>
								<input type="text" name="level" required="" class="form-control" placeholder="Level">
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Category</label>
								<input type="text" name="kategori" required="" class="form-control" placeholder="Category" >
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Price</label>
								<input type="number" name="harga" required="" class="form-control" placeholder="Price">
							</div>
						</div>
					</div>	
					<div class="form-group">
						<label for="title">Link  Iframe Youtube </label>
						<input type="text" class="form-control" name="link" required="" placeholder="Insert your link video ">
					</div>
					<div class="form-group">
						<label for="title">Recomendation for Student</label>
						<textarea type="text" name="rekruitmen" class="form-control" placeholder="Insert your Reqeuitment"  required=""></textarea>
					</div>
					<div class="form-group">
						<label for="title">Learn for Student</label>
						<textarea type="text" name="pelajari" class="form-control" placeholder="Insert your Learn"  required=""></textarea>
					</div>
					<div class="form-group pt-3 mb-3">
						<button name="save" class="btn btn-warning btn-block">Upload</button>
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
		$nama = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, "./uploads/".$nama);
		mysqli_query($conn, "INSERT INTO tabel_produk (nama_produk, deskripsi_produk, level_produk, kategori_produk, foto_produk, harga_produk, link_video_iframe, rekruitmen_produk, pelajari_produk, id_tutor_fk, nama_tutor_pembuat) VALUES('$_POST[nama]','$_POST[deskripsi]', '$_POST[level]', '$_POST[kategori]', '$nama', '$_POST[harga]', '$_POST[link]', '$_POST[rekruitmen]', '$_POST[pelajari]', '$id_tutor', '$nama_pembuat')");
		echo "<meta http-equiv='refresh' content='1;url=index.php?page=make-course&status=1'>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?page=make-course'>";
	} ?>
	<!-- end insert product to database -->



