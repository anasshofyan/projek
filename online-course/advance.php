<?php include 'process/session.php'; ?>
<div style="margin-top: 63px"></div>
<section>
	<div class="carousel-item active">
		<img class="d-block w-100 " src="./asset/img/14.jpg">
		<div class="carousel-caption d-none d-md-block">
			<div style="margin-bottom: 13%;">
				<h1 style="color: #3A3A3A;">Advance</h1>
				<p style="color: #656565;">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
			</div>
		</div>
	</div>
</section>
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
		<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE level_produk='advance'") ?> 
		<?php while ($products = $result->fetch_assoc()) {?>
			<div class="col-md-3">
				<div class="mb-4 box-shadow">
					<a class="product-btn-wishlist" href="add-wishlist.php?id=<?= $products['id_produk']  ?>">
						<i class="fa fa-heart fa-heart-q mt-auto mb-auto" data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist"></i>
					</a>
					<a href="index.php?page=detail-products&id=<?= $products['id_produk'];  ?>">
						<img class="product-img" src="tutor/uploads/<?= $products["foto_produk"]; ?> " >
					</a>	
					<div class="product-body">
						<!-- category -->
						<p class="product-category"><?= $products["kategori_produk"]; ?></p>
						<!-- title product -->
						<h6 class="product-title"><?= $products["nama_produk"]; ?></h6>
						<!-- price -->
						<div href="#" class="product-price"><strong>Rp. </strong><?= $angka = number_format($products["harga_produk"]); ?></div>
						<!-- level -->
						<small class="product-level" style="font-size: 12px;"><?= $products["level_produk"]; ?></small>
						<!-- option button -->
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- product view -->
