<?php include 'process/session.php'; ?>
<?php $detail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_produk='$_GET[id]'"));?>
<!-- details products -->
<section>
	<div class="container-fluid content-body-2">
		<div class="">
			<div class="row">
				<div class="col-md-9">
					<div class="m-5">
						<h1><?= $detail['nama_produk'] ?></h1>
						<p style="font-size: 20px;"><?= $detail['sub_judul_produk'] ?></p>
						<span class="fa fa-certificate mr-3" style="color: #0090FF"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="text-muted" style="font-size: 12px;"></span> 4.7 (20 ratings)
						<div class="d-flex">
							<p style="font-size: 15px;">Create by <?= $detail['nama_tutor_pembuat'] ?></p>
							<p class="ml-4" style="font-size: 15px;">Last Update <?= $detail['tanggal_pembuatan'] ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="mr-5 mt-5 " style="position: absolute; right: 8px; width: 100%; z-index: 99;">
						<div class="content-body-3 box-shadow bg-warning">
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item" src="<?= $detail['link_video_iframe']; ?>"></iframe>
							</div>
							<div class=" content-body  ">
								<h3 style="color: black;">Rp. <small style="font-size: 30px;"><?= number_format($detail['harga_produk']); ?></small></h3>
								<div class="mt-3">
									<a href="index.php?page=add-to-card&id=<?=$detail['id_produk']; ?>">
									<button class=" btn btn-danger btn-block  btn-md mb-3">Add to Card</button></a>

									<!-- <a href="index.php?page=check-out&id=<?= $id_user = $_SESSION['uid']; ?>"> -->
								<!-- 	<button class=" btn btn-outline-warning btn-block btn-md">Buy Now</button></a> -->
								</div>
								<hr>
								<div class="text-center">
									<span class="fa fa-instagram mr-4"></span>
									<span class="fa fa-facebook  mr-4"></span>
									<span class="fa fa-twitter  mr-4"></span>
									<span class="fa fa-envelope  mr-4"></span>
									<span class="fa fa-link  mr-4"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid m-5">
		<div class="row">
			<div class="col-md-8">
				<div class="content-body-4 box-shadow">
					<label for=""><h4>What Will I Learn?</h4></label>
					<p class="text-justify"><?= $detail['pelajari_produk']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end content -->

<section>
	<div class="container-fluid m-5">
		<div class="row">
			<div class="col-md-8">
				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Introducting
								</button>
							</h5>
						</div>

						<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
							<div class="content-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Collapsible Group Item #2
								</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="content-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</button>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="content-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid m-5">
		<div class="row">
			<div class="col-md-8">
				<div class="content-body-4 box-shadow">
					<label for=""><h4>Requirements</h4></label>
					<p class="text-justify"><?= $detail['rekruitmen_produk']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid m-5">
		<div class="row">
			<div class="col-md-8">
				<div class="content-body-4 box-shadow">
					<label for=""><h4>Description</h4></label>
					<p class="text-justify"><?= $detail['deskripsi_produk']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $details = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_produk , tabel_tutor WHERE tabel_produk.id_tutor_fk=tabel_tutor.id_tutor AND id_produk='$_GET[id]'"));?>
<?php $detailss = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tabel_produk , tabel_tutor WHERE tabel_produk.id_tutor_fk=tabel_tutor.id_tutor AND id_produk='$_GET[id]'"));?>
<section>
	<div class="container-fluid m-5">
		<div class="row">
			<div class="col-md-8">
				<div class="content-body-4 box-shadow">
					<label for=""><h4>About the Tutor</h4></label>
					<div class="row">
						<div class="col-md-4">
							<img src="./tutor/uploads/<?= $details['foto_tutor']; ?>" alt="" class="rounded-circle" width='180px'>
							<div class="mt-3">
								<p><i class="fa fa-star mr-1"></i> 4.5 Average Rating</p>
								<p><i class="fa fa-comment mr-1"></i> 1,206 Reviews</p>
								<p><i class="fa fa-user-circle mr-1"></i> 12,229 Students</p>
								<p><i class="fa fa-play-circle mr-1"></i> <?= $detailss ?> Courses</p>
							</div>
						</div>
						<div class="col-md-8">
							<h5 class="text-justify"><?= $details['nama_depan_tutor']; ?> <?= $details['nama_belakang_tutor']; ?></h5>
							<p class="text-justify"><?= $details['bio_tutor']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>