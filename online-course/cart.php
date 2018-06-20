<?php include 'process/session.php'; ?>
<?php include 'process/session.php'; ?>
<style>
.fa-heart-q{
	margin-left: 52px; font-size: 25px; color: #ec5252;
}
.fa-heart-q:hover{
	color: #FFCC00;
}
.position{
	position: absolute;
	top: 10px;
	left: 160px;
}
</style>
<div style="margin-top: 150px"></div>

<!-- product view -->
<?php $id_prodse = session_id(); ?>

<!-- product view -->
<?php if (isset($_GET['status'])){
	if ($_GET['status']==1) {
		echo '<div class="container">
		<div class="row justify-content-center">
		<div class="col-md">
		<div class="content-body box-shadow text-center">
		<div><span class=" mb-5 fa fa-shopping-cart fa-5x " style="color: #ec5252;">
		</style></span></div>
		<div><h5>No item course yet</h5></div>
		</div>
		</div>
		</div>
		</div>';
	}
} ?>		
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<ul class="list-group mb-3">
				<h4 class="d-flex align-items-center mb-3">
					<span class="badge badge-secondary badge-pill mr-1"><?= $keranjang; ?> </span>
					<span class="text-muted">Course in Cart</span>
				</h4>
				<?php $total=0; ?>
				<?php $result = mysqli_query($conn, "SELECT * FROM tabel_keranjang , tabel_produk WHERE  tabel_keranjang.id_produk=tabel_produk.id_produk AND id_user='$id_user'"); ?> 
				<?php while ($products = mysqli_fetch_assoc($result)){ ?>
					<li class="list-group-item d-inline-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0"><?= $products["nama_produk"]; ?></h6>
							<small class="text-muted"><?= $products["deskripsi_produk"]; ?> |</small> 
							<small class="text-muted"><?= $products["nama_tutor_pembuat"]; ?></small>
							<div>
								<small><a href="delete-card.php?id=<?= $products['id_produk'] ?>">Remove</a></small>
								<small><a href="move-wishlist.php?id=<?= $products['id_produk']; ?>"> Move to Wishlist</a></small>

							</div>
						</div>
						<span class="text-muted">Rp. <?= $angka = number_format($products["harga_produk"]); ?></span>
						<?php $total += $products["harga_produk"]; ?>
					</li>
				<?php } ?>
			</ul>
		</div>
		<div class="col-md-4">
			<form action="" method="post">
				<ul class="list-group mb-3">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-muted">Total</span>
					</h4>
					<li class="list-group-item d-flex justify-content-between bg-light">
						<div class="text-success">
							<h6 class="my-0">Promo code</h6>
							<small>-</small>
						</div>
						<span class="text-success">-$5</span>
					</li>
					<li class="list-group-item d-flex justify-content-between">
						<span>Total (Rp)</span>
						<strong><?= number_format($total);  ?></strong>
					</li>
				</ul>
				<div class="card p-2">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Promo code">
						<div class="input-group-append">
							<button type="submit" class="btn btn-secondary">Redeem</button>
						</div>
					</div>
				</div>
				<a href="index.php?page=check-out&id=<?= $id_user = $_SESSION['uid']; ?>" class="mt-2 btn btn-warning btn-lg btn-block"> Checkout</a>
			</div>
		</form>
	</div>
</div>
