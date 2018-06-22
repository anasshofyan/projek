<?php include 'process/session.php'; ?>
<div style="margin-top: 63px"></div>
<!-- banner dashboard -->
<section>
	<div class="carousel-item active">
		<img class="d-block w-100 " src="./asset/img/11.jpg">
		<div class="carousel-caption d-none d-md-block">
			<div style="margin-bottom: 13%;">
				<h1>All Levels Course</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
			</div>
		</div>
	</div>
</section>
<!-- end banner dashboard -->
<!-- nav pills -->
<div class="container-fluid">
	<div class="row justify-content-center content-body-3 box-shadow">
		<ul class="nav nav-pills " id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link" id="pills-development-tab" data-toggle="pill" href="#pills-development" role="tab" aria-controls="pills-development" aria-selected="true">Development</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-design-tab" data-toggle="pill" href="#pills-design" role="tab" aria-controls="pills-design" aria-selected="false">Design</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-it-tab" data-toggle="pill" href="#pills-it" role="tab" aria-controls="pills-it" aria-selected="false">IT & Software</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-electronic-tab" data-toggle="pill" href="#pills-electronic" role="tab" aria-controls="pills-electronic" aria-selected="false">Electronic</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-micro-tab" data-toggle="pill" href="#pills-micro" role="tab" aria-controls="pills-micro" aria-selected="false">Micro Controller</a>
			</li>
		</ul>
	</div>
</div>
<!-- end nav pills -->


<!-- search -->
<section>
	<div class="container mt-5">
		<div class="row  justify-content-center">
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" id="keyword" placeholder="Search" aria-label="Search">
			</form>
		</div>
	</div>
</section>
<!-- end search -->
<!-- product view -->

<div class="container mt-5" id="container">
	<div class="row">
		<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk ") ?> 
		<?php while ($products = $result->fetch_assoc()) {?>
			<div class="col-md-3">
				<div class="mb-4 box-shadow">
					<a class="product-btn-wishlist" href="add-wishlist.php?id=<?= $products['id_produk'] ; ?>">
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
						<small class="product-level" style="font-size: 12px;"><?php echo $products['nama_tutor_pembuat']; ?></small>
						<!-- option button -->
					</div>
				</div>
			</div>
		<?php } ?>
	</div>		
</div>
<!-- product view -->
