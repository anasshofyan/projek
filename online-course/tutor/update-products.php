<?php include 'process/session.php'; ?>
<!-- memanggil data tabel produk -->
<?php $edit = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_produk='$_GET[id]'"));?>
<div style="margin-top: 60px;"></div>
<!-- form update products -->
<section>
	<div class="container pt-3 mt-5 mb-4 card">
		<div class="row">
			<div class="col-md">
				<h3 class="text-center">Edit  Course</h3>
				<form method='post' enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="nama" class="form-control" placeholder="Insert your course title" value="<?= $edit['nama_produk']; ?>">
					</div>
					<div class="form-group">
						<label for="title">Description</label>
						<textarea type="text" name="deskripsi" class="form-control"><?= $edit['deskripsi_produk']; ?></textarea>
					</div>
					<label for="title">Course Image</label>
					<div class="form-group">
						<img src="./uploads/<?= $edit['foto_produk'];?>" width="200px" class="mb-2 img-thumbnail">
						<input type="file" class="form-control" name="foto">
					</div>
					<div class="row">
						<div class="col-md">
							<div class="form-group">
								<label for="title">Level</label>
								<input type="text" name="level" class="form-control" placeholder="Level" value="<?= $edit['level_produk']; ?>">
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Category</label>
								<input type="text" name="kategori" class="form-control" placeholder="Category" value="<?= $edit['kategori_produk']; ?>">
							</div>
						</div>
						<div class="col-md">
							<div class="form-group">
								<label for="title">Price</label>
								<input type="number" name="harga" class="form-control" placeholder="<?= number_format($edit['harga_produk']); ?>">
							</div>
						</div>
					</div>						
					<div class="form-group">
						<label for="title">Link Iframe Youtube</label>
						<input type="text" class="form-control" name="link" placeholder="Insert your link video" value="<?= $edit["link_video_iframe"]; ?>">
					</div>
					<div class="form-group">
						<label for="title">Reqruitment for Student</label>
						<textarea type="text" name="rekruitmen" class="form-control"><?= $edit['rekruitmen_produk']; ?></textarea>
					</div>
					<div class="form-group">
						<label for="title">Learn fot Student</label>
						<textarea type="text" name="pejalari" class="form-control"><?= $edit['pelajari_produk']; ?></textarea>
					</div>
					<div class="form-group pt-3 mb-3">
						<button name="update" class="btn btn-warning btn-block">Update</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</section>
<!-- end form update products -->

<!-- update produk -->
<?php 
if (isset($_POST['update'])) {
	$namafoto = $_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
		// jika foto diubah
	if (!empty($lokasifoto)) {
		move_uploaded_file($lokasifoto, "./uploads/$namafoto");
		$result = mysqli_query($conn, "UPDATE tabel_produk SET nama_produk='$_POST[nama]', deskripsi_produk='$_POST[deskripsi]', foto_produk='$namafoto', level_produk='$_POST[level]', kategori_produk='$_POST[kategori]', harga_produk='$_POST[harga]', link_video_iframe='$_POST[link]', rekruitmen_produk='$_POST[rekruitmen]', pelajari_produk='$_POST[pejalari]' WHERE id_produk='$_GET[id]'");
	}else{
		$result = mysqli_query($conn, "UPDATE tabel_produk SET nama_produk='$_POST[nama]', deskripsi_produk='$_POST[deskripsi]',level_produk='$_POST[level]', kategori_produk='$_POST[kategori]', harga_produk='$_POST[harga]', link_video_iframe='$_POST[link]', rekruitmen_produk='$_POST[rekruitmen]', pelajari_produk='$_POST[pejalari]' WHERE id_produk='$_GET[id]'");
	}
	echo "<script>alert('Update Berhasil');
	</script>";
	echo "<meta http-equiv='refresh' content='1'>";
}
?>
<!-- end update produk -->