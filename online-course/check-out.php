<?php include 'process/session.php'; ?>	
<?php $id_user = $_GET['id']; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM  table_user WHERE id_user='$id_user'"); ?> 
<?php $pembelian = mysqli_fetch_assoc($result)?>

<div class="container">
	<div class="row margin-top">
		<div class="col-md-7  content-body box-shadow">
			<h4 class="mb-3">Billing address</h4>
			<form class="needs-validation" method="post">
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="firstName">First name</label>
						<input type="text" class="form-control" id="firstName" readonly="" placeholder="" value="<?= $pembelian['nama_depan'] ?>" required="">
					</div>
					<div class="col-md-6 mb-3">
						<label for="lastName">Last name</label>
						<input type="text" class="form-control" id="lastName" readonly=""  placeholder="" value="<?= $pembelian['nama_belakang'] ?>" required="">
					</div>
				</div>
				<div class="mb-3">
					<label for="address">Location Training</label>
					<input type="text" class="form-control" id="address" name="lokasi_training" placeholder="Location Training" required="">
				</div>
				<div class="  mb-3">
					<label for="address">Contact</label>
					<input type="text" class="form-control" id="address" readonly=""  placeholder="Your Contact" value="<?= $pembelian['telepon_user'] ?>" required="">
				</div>
				<div class="row">
					<div class="col-md-4 mb-3">
						<label for="address">Address</label>
						<input type="text" class="form-control" id="address" readonly=""  placeholder="Your Address" value="<?= $pembelian['alamat_user']; ?>" required="">
					</div>
					<div class="col-md-4 mb-3">
						<label for="address">City</label>
						<input type="text" class="form-control" id="address" readonly=""  placeholder="Your City" value="<?= $pembelian['kota_user'] ?>" required="">
					</div>
					<div class="col-md-4 mb-3">
						<label for="address">Country</label>
						<input type="text" class="form-control" id="address" readonly=""  placeholder="Your Country" value="<?= $pembelian['negara_user'] ?>" required="">
					</div>
				</div>
				<hr class="mb-3">
				<button class="btn btn-warning btn-md btn-block" name="checkout" type="submit">Continue to checkout</button>
			</form>
		</div>
		<div class="col-md-5">
			<form action="" method="post">
				<ul class="list-group mb-3 box-shadow">
					<?php $total=0; ?>
					<?php $result = mysqli_query($conn, "SELECT * FROM tabel_keranjang , tabel_produk WHERE  tabel_keranjang.id_produk=tabel_produk.id_produk AND id_user='$id_user'"); ?> 
					<?php while ($products = mysqli_fetch_assoc($result)){ ?>
						<li class="list-group-item d-flex justify-content-between ">
							<div class="">
								<h6 class="my-0"><?= $products['nama_produk'];  ?>e</h6>
								<small><?= $products['deskripsi_produk'];  ?></small>
							</div>
							<span class="text-warning"><?= number_format($products['harga_produk']);  ?></span>
						</li>
						<?php $total += $products["harga_produk"]; ?>
						<?php $id_produk = $products["id_produk"]; ?>
					<?php } ?>
					<li class="list-group-item d-flex justify-content-between bg-danger">
						<span class="text-white">Total (Rp)</span>
						<strong class="text-white"><?= number_format($total);  ?></strong>
					</li>
				</ul>
			</div>
		</form>
	</div>
</div>
</div>

<?php if (isset($_POST['checkout'])) {
	$id_user = $_GET['id'];
	$tanggal_pembelian = date("Y-m-d"); 
	$lokasi_training = $_POST['lokasi_training'];
	$total_pembelian = $total;
	mysqli_query($conn, "INSERT INTO table_pembelian (id_user, tanggal_pembelian, lokasi_cod, total_pembelian, id_produk) VALUES ('$id_user', '$tanggal_pembelian', '$lokasi_training', '$total_pembelian', '$id_produk')");
	mysqli_query($conn, "DELETE FROM tabel_keranjang WHERE tabel_keranjang.id_user='$id_user'");
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=checkout-nota'>";
} ?>