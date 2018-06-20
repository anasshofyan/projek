<?php include 'process/session.php'; ?>
<?php $detail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_produk='$_GET[id]'"));?>
<div style="margin-top: 100px;"></div>

<!-- details products -->
<section>
	<div class="container">
		<div class="row mt-3">
			<div class="col-md">
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" src="<?= $detail['link_video_produk']; ?>"></iframe>
				</div>
			</div>
			<div class="col-md">
				<p style="font-size: 25px"><?= $detail['nama_produk']; ?></p>
				<div>
					<small class="text-muted" style="font-size: 12px;">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<small class="text-muted" style="font-size: 12px;">10 Ulasan | <small class="text-muted" style="font-size: 12px;"><?= $detail["level_produk"]; ?></small> | <small class="text-muted" style="font-size: 12px;"><?= $detail["kategori_produk"]; ?></small></small>
					</small>
				</div>
				<p style="font-size: 20px;" class="mt-3">Discription</p>
				<p class="text-justify"><?= $detail['deskripsi_produk']; ?></p>
				<hr>
				<p style="font-size: 18px;"><strong>Rp. </strong> <?= $angka = number_format($detail["harga_produk"]) ; ?></p>
				<hr>
				<a href="add-to-card.php?id=<?= $detail['id_produk']; ?>" class="btn btn-danger"> Add to Card	
				</a>
				<a href="?page=add-to-card&id=<?= $detail['id_produk']; ?>" class="btn btn-info"> Buy Now	
				</a>
				<hr>
				<div>
					<span class="fa fa-instagram mr-4"></span>
					<span class="fa fa-facebook  mr-4"></span>
					<span class="fa fa-twitter  mr-4"></span>
					<span class="fa fa-envelope  mr-4"></span>
					<span class="fa fa-link  mr-4"></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end detail products -->
<!-- tab -->
<div class="bg-light">
	<section>
		<div class="container-fluid bg-light card ">
			<div class="container ">
				<div class="row">
					<nav>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
<!-- end tab -->
<!-- content -->
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<div class="container">
			<div class="row mt-4">
				<div class="col-md bg-light p-3">
					<p style="font-size: 25px">What Will I Learn?</p>
					<p class="text-justify"><?= $detail['pelajari_produk']; ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<div class="container">
			<div class="row mt-4">
				<div class="col-md p-3">
					<p style="font-size: 25px">Reqruitments for Student</p>
					<p class="text-justify"><?= $detail['rekruitmen_produk']; ?></p>
				</div>
			</div>
		</div></div>
		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">	<section class="mb-5">
			<div class="container bg-light  mt-4	">
				<div class="row  p-3">
					<p style="font-size: 25px">Futured Review</p>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-3 bg-warning p-3">
						<h1>4.7</h1>
						<div class="rating">
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
						</div>
						<h4>Average Rating</h4>
					</div>
					<div class="col-md-6">
						<div class="progress m-2">
							<div class="progress-bar" role="progressbar" style="width: 71%" aria-valuenow="71%" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="progress m-2">
							<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25%" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="progress m-2">
							<div class="progress-bar" role="progressbar" style="width: 17%" aria-valuenow="17%" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="progress m-2">
							<div class="progress-bar" role="progressbar" style="width: 4%" aria-valuenow="4%" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="progress m-2">
							<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0%" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-md-3">
						<div>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
						</div>
						<div>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
						</div>
						<div>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
						</div>
						<div>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
						</div>
						<div>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
							<span class="fa fa-star chacked"></span>
						</div>	
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<!-- end content -->