<?php include 'process/session.php'; ?>
<?php $id_user = $_SESSION['uid']; ?>
<div style="margin-top: 100px;"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<ul class="list-group mb-3">
				<?php $total=0; ?>
				<?php $result = mysqli_query($conn, "SELECT * FROM table_pembelian JOIN tabel_produk ON table_pembelian.id_produk=tabel_produk.id_produk WHERE id_user='$id_user'"); ?> 

				<?php while ($products = mysqli_fetch_assoc($result)){ ?>
					<li class="list-group-item d-inline-flex justify-content-between lh-condensed mb-1">
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
	</div>
</div>