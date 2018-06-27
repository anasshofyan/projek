<?php include 'config/db.php'; ?>
<div class="main-container">
	<!--end of section-->
	<section class="bg-dark text-white space-xlg">
		<img alt="Image" src="asset/img/photo-road.jpg" class="bg-image opacity-40">
		<div class="container">
			<div class="row text-center justify-content-center section-intro">
				<div class="col-12 col-md-10 col-lg-8 ">
					<h3 class="display-2 mb-2">Ready</h3>
					<span class="lead">Learning with qualified and certified tutors guidance.</span>
				</div>
				<!--end of col-->
			</div>
			<!--end of row-->
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<form class="card card-sm">
						<div class="card-body row no-gutters align-items-center" id="container">
							<div class="col-auto">
								<i class="icon-magnifying-glass h4 text-body"></i>
							</div>
							<!--end of col-->
							<div class="col">
								<input class="form-control form-control-lg form-control-borderless" id="key_search" type="search" placeholder="Search topics or keywords">
							</div>
							
							<!--end of col-->
							<div class="col-auto">
								<button class="btn btn-lg btn-warning"  type="submit">Search</button>
							</div>
							<!--end of col-->
						</div>
					</form>
				</div>
				<!--end of col-->
			</div>
			<!--end of row-->
			<div class="row text-center mt-4">
				<div class="col">
					<a href="index.php?page=development" class="btn btn-secondary mb-1"><span class="fa fa-code mr-1"></span>Development</a>
					<a href="index.php?page=design" class="btn btn-secondary mb-1"><span class="fa fa-magic mr-1"></span>Design</a>
					<a href="index.php?page=it" class="btn btn-secondary mb-1"><span class="fa fa-desktop mr-1"></span>IT &amp; Software</a>
					<a href="index.php?page=electro" class="btn btn-secondary mb-1"><span class="fa fa-microchip mr-1"></span>Electro</a>
				</div>
				<!--end of col-->
			</div>
			<!--end of row-->
		</div>
		<!--end of container-->
	</section>
	<!--end of section-->
</div>
<!-- fitur tutorteknik -->
<section>
	<div class="container">
		<div class="row text-center mb-3 mt-5">
			<div class="col-lg">
				<h3>Apa yang bisa kamu lakukan di <strong>tutorteknik?</strong></h3>
				<p>Nggak perlu bingung dan repot lagi dalam mencari materi dan tutor terbaik.
				Semuanya telah tersedia di tutorteknik</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg">
				<div class=" text-black mb-3">
					<div class="card-body text-center">
						<span class="fa fa-comments fa-3x" style="color: gold;"></span>
						<p class="card-text mt-4">Live chat dengan tutor</p>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class=" text-black mb-3">
					<div class="card-body text-center">
						<span class="fa fa-user-plus fa-3x" style="color: gold;"></span>
						<p class="card-text mt-4">Undang tutor</p>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="text-black mb-3">
					<div class="card-body text-center">
						<span class="fa fa-book fa-3x" style="color: gold;"></span>
						<p class="card-text mt-4">Banyak pilihan materi</p>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="text-black mb-3">
					<div class="card-body text-center">
						<span class="fa fa-graduation-cap fa-3x" style="color: gold;"></span>
						<p class="card-text mt-4">Praktek dengan tutor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end fitur tutorteknik -->
<!-- product view -->

<div class="container mt-5" id="container">
	<label for=""><h4>Popular Course</h4></label>
	<div class="row">
		<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk, table_kategori, table_level WHERE tabel_produk.id_kategori=table_kategori.id_kategori AND tabel_produk.id_level=table_level.id_level LIMIT 0,4 ") ?> 
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
						<p class="product-category"><?= $products["nama_level"]; ?> | <?= $products["nama_kategori"]; ?></p>
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