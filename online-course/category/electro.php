<?php include 'process/session.php'; ?>
<div style="margin-top: 63px"></div>
<section>
	<div class="carousel-item active bg-info">
		<img class="d-block w-100 " src="./asset/img/12.jpg" style="opacity: 0.7">
		<div class="carousel-caption d-none d-md-block">
			<div style="margin-bottom: 13%;">
				<h1 style="color: #FFFFFF">Electro</h1>
				<p style="color: #FFFFFF">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
			</div>
		</div>
	</div>
</section>
<!-- search -->
<nav class="navbar navbar-expand-lg navbar-light box-shadow" style="background-color: #FDFDFD">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item  mr-5">
					<a class="nav-link" href="index.php?page=development"><span class="mr-1 fa fa-code"></span>Development<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item mr-5">
					<a class="nav-link" href="index.php?page=design"><span class="mr-1 fa fa-magic"></span>Design</a>
				</li>
				<li class="nav-item  mr-5 ">
					<a class="nav-link" href="index.php?page=it"><span class="mr-1 fa fa-desktop"></span>IT & Software</a>
				</li>
				<li class="nav-item active mr-5">
					<a class="nav-link" href="index.php?page=electro"><span class="mr-1 fa fa-microchip"></span>Electro</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- end search -->
<!-- product view -->
<div class="container mt-5">
	<div class="row">
		<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk, table_kategori WHERE  tabel_produk.id_kategori=table_kategori.id_kategori AND  tabel_produk.id_kategori=4 ") ?> 
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
						<p class="product-category"><?= $products["nama_kategori"]; ?></p>
						<!-- title product -->
						<h6 class="product-title"><?= $products["nama_produk"]; ?></h6>
						<!-- price -->
						<div href="#" class="product-price"><strong>Rp. </strong><?= $angka = number_format($products["harga_produk"]); ?></div>
						<!-- level -->
						<small class="product-level" style="font-size: 12px;"><?= $products["nama_tutor_pembuat"]; ?></small>
						<!-- option button -->
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- product view -->
