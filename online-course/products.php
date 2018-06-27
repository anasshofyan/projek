<?php 
require 'config/db.php';
session_start();
if(!isset($_SESSION['login_user']) || !$_SESSION['login_user']){
	include 'component/navbar1.php';
}else{
	include 'component/navbar.php';
}
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="shortcut icon" href="favicon.ico">
	<title>Tutor Teknik | Home</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/style.css">
	<link rel="stylesheet" href="asset/css/edit.css">
</head>
<body class="bg-light">
	
	<div style="margin-top: 58px;"></div>
	<div style="margin-top: 63px"></div>
	<!-- banner dashboard -->
	<section>
		<div class="carousel-item active">
			<img class="d-block w-100 " src="./asset/img/22.jpg">
			<div class="carousel-caption d-none d-md-block">
				<div style="margin-bottom: 13%;">
					<h1>All Levels Course</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end banner dashboard -->
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
					<li class="nav-item active mr-5">
						<a class="nav-link" href="index.php?page=design"><span class="mr-1 fa fa-magic"></span>Design</a>
					</li>
					<li class="nav-item mr-5 ">
						<a class="nav-link" href="index.php?page=it"><span class="mr-1 fa fa-desktop"></span>IT & Software</a>
					</li>
					<li class="nav-item mr-5">
						<a class="nav-link" href="index.php?page=electro"><span class="mr-1 fa fa-microchip"></span>Electro</a>
					</li>
				</ul>
				<span class="navbar-text" style="margin-left: 270px;">
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="search" id="keyword" placeholder="Search" aria-label="Search">
					</form>
				</span>
			</div>
		</div>
	</nav>
	<!-- search -->

	<!-- end search -->
	<?php 
	$jumlahDataPerhalaman = 4;
	$jumlahData = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tabel_produk"));
	$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
	$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
	$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
	?>

	<!-- product view -->

	<div class="container mt-5" id="container">
		<div class="row">
			<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk, table_kategori, table_level WHERE tabel_produk.id_kategori=table_kategori.id_kategori AND tabel_produk.id_level=table_level.id_level LIMIT $awalData, $jumlahDataPerhalaman ") ?> 
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

	<div class="container mt-5">
		<div class="row">
			<div class="col-md">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<?php if ($halamanAktif > 1): ?>
							<li class="page-item">
								<a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" tabindex="-1">Previous</a>
							</li>
							<!-- previous -->
							<?php else: ?>
								<li class="page-item disabled">
									<a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" tabindex="-1">Previous</a>
								</li>
							<?php endif; ?>
							<!-- end previous -->
							<!-- next number -->
							<?php for ($i=1; $i <= $jumlahHalaman ; $i++):?>
								<?php if ($i == $halamanAktif): ?>
									<li class="page-item active"><a class="page-link " href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
									<?php else : ?>
										<li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
									<?php endif; ?>
								<?php endfor; ?>
								<!-- end next number  -->
								<!-- next  -->
								<?php if ($halamanAktif < $jumlahHalaman): ?>
									<li class="page-item">
										<a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" tabindex="-1">Next</a>
									</li>
									<?php else: ?>
										<li class="page-item disabled">
											<a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" tabindex="-1">Next</a>
										</li>
									<?php endif; ?>
									<!-- end next -->
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- end link -->
			<div class="margin-bottom"></div>
			<?php include './component/footer.php' ?>
			<!-- JavaScript -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script src="asset/js/script.js"></script>
		</body>
		</html>