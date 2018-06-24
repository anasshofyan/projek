<?php include 'process/session.php'; ?>
<?php $id_user = $_SESSION['uid']; ?>
<div style="margin-top: 100px;"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<ul class="list-group mb-3">
				<?php $total=0; ?>
				<?php $result = mysqli_query($conn, "SELECT * FROM table_pembelian JOIN tabel_produk ON table_pembelian.id_produk=tabel_produk.id_produk WHERE id_user='$id_user'"); ?> 

				<?php while ($products = mysqli_fetch_assoc($result)){ ?>
					<li class="list-group-item d-inline-flex justify-content-between lh-condensed mb-1">
						<div>
							<h6 class="my-0"><?= $products["nama_produk"]; ?></h6>
							<div>
								<small><a href="delete-transaction.php?id=<?= $products['id_produk'];?>">Remove</a></small>
								<small><a href="" data-toggle="modal" data-target="#exampleModalCenter" >Details</a></small>
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
<!-- modal details -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Detail Transaction</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php $hasil =mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_pembelian JOIN tabel_produk ON table_pembelian.id_produk=tabel_produk.id_produk WHERE id_user='$id_user'")); ?> 
			<div class="modal-body">
				<h6><?= $hasil['nama_produk']; ?></h6>
				<p><?= $hasil['deskripsi_produk']; ?></p>
				<p><?= $hasil['tanggal_pembelian']; ?></p>
				<p><?= $hasil['total_pembelian']; ?></p>
				<p><?= $hasil['lokasi_cod']; ?></p>
			</div>
		</div>
	</div>
</div>
<!-- end modal details -->