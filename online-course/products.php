<?php include 'process/session.php'; ?>
<style>
	.fa-heart-q{
		margin-left: 35px; font-size: 25px; color: #ec5252;
	}
	.fa-heart-q:hover{
		color: #FFCC00;
	}
</style>
<div style="margin-top: 100px"></div>
<!-- search -->
<section>
	<div class="container mt-5">
		<div class="row  justify-content-center">
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-warning  my-2 my-sm-0" type="submit"><span class="fa fa-search"></span></button>
			</form>
		</div>
	</div>
</section>
<!-- end search -->
<!-- product view -->
<div class="container mt-5">
	<div class="row">
		<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk") ?> 
		<?php while ($products = $result->fetch_assoc()) {?>
			<div class="col-md-3">
				<div class="card mb-4">
					<a href="index.php?page=detail-products&id=<?= $products['id_produk']  ?> ">
						<img class="card-img-top" src="tutor/uploads/<?= $products["foto_produk"]; ?> ">
					</a>
					<div class="card-body">
						<h6 style="font-size: 13px" class="text-muted"><?= $products["kategori_produk"]; ?></h6>  
						<h6 class="card-title"><?= $products["nama_produk"]; ?></h6>  
						<div href="#" class="card-link"><strong>Rp. </strong><?= $angka = number_format($products["harga_produk"]) ; ?></div>
					</div>
					<div class="card-footer">
						<small class="text-muted" style="font-size: 12px;"><?= $products["level_produk"]; ?></small>
						<small class="text-muted" style="font-size: 12px;"> &rarr;
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</small>
						<a href="index.php?page=wishlist&id=<?= $products['id_produk']  ?>">
						<i class="fa fa-heart fa-heart-q mt-auto mb-auto" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"></i>
						</a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- product view -->
