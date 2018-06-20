<?php include 'process/session.php'; ?>	
<?php $id_user = $_GET['id']; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM  table_user WHERE id_user='$id_user'"); ?> 
<?php $pembelian = mysqli_fetch_assoc($result)?>

<div class="container">
	<div class="row margin-top">
		<div class="col-md-8  content-body box-shadow">
			<h4 class="mb-3">Billing address</h4>
			<form class="needs-validation" method="post">
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="firstName">First name</label>
						<input type="text" class="form-control" id="firstName" readonly="" placeholder="" value="<?= $pembelian['nama_depan'] ?>" required="">
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="lastName">Last name</label>
						<input type="text" class="form-control" id="lastName" readonly=""  placeholder="" value="<?= $pembelian['nama_belakang'] ?>" required="">
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>
				</div>

				<div class="mb-3">
					<label for="address">Location Training</label>
					<input type="text" class="form-control" id="address" name="lokasi_training" placeholder="Location Training" required="">
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
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
				<hr class="mb-4">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="same-address">
					<label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
				</div>
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="save-info">
					<label class="custom-control-label" for="save-info">Save this information for next time</label>
				</div>
				<hr class="mb-4">

				<h4 class="mb-3">Payment</h4>

				<div class="d-block my-3">
					<div class="custom-control custom-radio">
						<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
						<label class="custom-control-label" for="credit">Credit card</label>
					</div>
					<div class="custom-control custom-radio">
						<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
						<label class="custom-control-label" for="debit">Debit card</label>
					</div>
					<div class="custom-control custom-radio">
						<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
						<label class="custom-control-label" for="paypal">Paypal</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="cc-name">Name on card</label>
						<input type="text" class="form-control" id="cc-name" placeholder="" required="">
						<small class="text-muted">Full name as displayed on card</small>
						<div class="invalid-feedback">
							Name on card is required
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="cc-number">Credit card number</label>
						<input type="text" class="form-control" id="cc-number" placeholder="" required="">
						<div class="invalid-feedback">
							Credit card number is required
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 mb-3">
						<label for="cc-expiration">Expiration</label>
						<input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
						<div class="invalid-feedback">
							Expiration date required
						</div>
					</div>
					<div class="col-md-3 mb-3">
						<label for="cc-expiration">CVV</label>
						<input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
						<div class="invalid-feedback">
							Security code required
						</div>
					</div>
				</div>
				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" name="checkout" type="submit">Continue to checkout</button>
			</form>
		</div>
	</div>
</div>
<?php $total=0; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM tabel_keranjang , tabel_produk WHERE  tabel_keranjang.id_produk=tabel_produk.id_produk AND id_user='$id_user'"); ?> 
<?php while ($products = mysqli_fetch_assoc($result)){ ?>

	<?php $total += $products["harga_produk"]; ?>
</li>
<?php } ?>
<?php if (isset($_POST['checkout'])) {
	$id_user = $_GET['id'];
	$tanggal_pembelian = date("Y-m-d"); 
	$lokasi_training = $_POST['lokasi_training'];
	$total_pembelian = $total;
	mysqli_query($conn, "INSERT INTO table_pembelian (id_user, tanggal_pembelian, lokasi_cod, total_pembelian) VALUES ('$id_user', '$tanggal_pembelian', '$lokasi_training', '$total_pembelian')");
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=checkout-nota'>";
} ?>