<?php include 'process/session.php'; ?>
<?php $id_user = $_SESSION['uid']; ?>
<div style="margin-top: 100px;"></div>

<div class="container">
	<div class="row">
		<?php $total=0; ?>
		<?php $nomor=1 ?>
		<?php $result = mysqli_query($conn, "SELECT * FROM table_pembelian JOIN tabel_produk ON table_pembelian.id_produk=tabel_produk.id_produk WHERE id_user='$id_user'"); ?> 
		<?php while ($products = mysqli_fetch_assoc($result)){ ?>
			<div class="col-md-12 mb-4">
				<div class="content-body box-shadow">
					<div class="table-responsive-md">
						<span class="badge badge-pill badge-info mb-2"><?= $nomor++; ?></span>
						<table class="table table-hover">
							<tr style="background-color:  #FFA4A4;">
								<th><small class="nav-link text-secondary">KODE TRANSAKSI</small></th>
								<th><small class="nav-link text-secondary">KODE PEMBELIAN</small></th>
								<th><small class="nav-link text-secondary">TOTAL PEMBELIAN</small></th>
								<th></th>
							</tr>
							<tr>
								<?php $id_produk = $products["id_produk"]; ?>
								<th><small class="nav-link"><?= $products['kode_transaksi']; ?></small></th>
								<th><small class="nav-link"><?= $products['kode_pembelian']; ?></small></th>
								<th><small class="nav-link">Rp. <?= number_format($total += $products["harga_produk"]); ?></small></th>
								<th><small class="nav-link text-secondary"><a  href="index.php?page=details-nota&id=<?= $products['id_pembelian'];?>">Detail</a></small></th>
							</tr>
							<tr style="background-color:  #FFEBA4;">
								<th><small class="nav-link">IMAGE</small></th>
								<th><small class="nav-link">COURSE</small></th>
								<th><small class="nav-link">TUTOR</small></th>
								<th></th>
							</tr>
							<tr>
								<th><img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 100px; height: 70px;" src="tutor/uploads/<?= $products['foto_produk']; ?>"  data-holder-rendered="true"></th>
								<th><small class="nav-link"><?= $products['nama_produk']; ?></small></th>
								<th><small class="nav-link"><?= $products['nama_tutor_pembuat']; ?></small></th>
								<th><small class="nav-link"><a href="delete-transaction.php?id=<?= $products['id_produk'];?>">Remove</a></small></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>






<!-- Rp //$angka = number_format($products["harga_produk"]); ?> -->
<!-- <small><a href="index.php?page=details-nota&id=//$products['id_pembelian'];?>">Detail</a></small> -->
<!-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 100px; height: 70px;" src="tutor/uploads/$products['foto_produk']; ?>"  data-holder-rendered="true"> -->






