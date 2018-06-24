<?php include 'process/session.php'; ?>
<style>
.fa-heart-q{
	margin-left: 52px; font-size: 25px; color: #ec5252;
}
.fa-heart-q:hover{
	color: #FFCC00;
}
.position{
	position: absolute;
	top: 10px;
	left: 160px;
}
</style>
<div style="margin-top: 100px"></div>
<!-- product view -->
<?php $id_prodse = session_id(); ?>
<?php $id_user = $_SESSION['uid'] ?>
<div class="container mt-5" id="container">
	<div class="row">
		<?php $result = mysqli_query($conn, "SELECT * FROM tabel_wishlist , tabel_produk, table_kategori, table_level WHERE tabel_produk.id_kategori=table_kategori.id_kategori AND tabel_produk.id_level=table_level.id_level AND  tabel_wishlist.id_produk=tabel_produk.id_produk AND id_user='$id_user'"); ?> 
		<?php while ($products = mysqli_fetch_assoc($result)){ ?>
			<div class="col-md-3">
				<div class="mb-4 box-shadow">
					<a class="product-btn-wishlist" href="delete-wishlist.php?id=<?= $products['id_produk'];?>">
						<i class="fa fa-heart fa-heart-q mt-auto mb-auto" data-toggle="tooltip" data-placement="bottom" title="Delete to Wishlist"></i>
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
<?php if (isset($_GET['status'])){
	if ($_GET['status']==1) {
		echo '<div class="container">
		<div class="row justify-content-center">
		<div class="col-md">
		<div class="content-body box-shadow text-center">
		<div><span class=" mb-5 fa fa-gratipay fa-5x " style="color: #ec5252;">
		</style></span></div>
		<div><h5>No favorite course yet</h5></div>
		</div>
		</div>
		</div>
		</div>';
	}
} ?>		

