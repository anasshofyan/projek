<?php include 'process/session.php'; ?>
<?php 
$id_produk = $_GET['id'];

if (isset($_SESSION['wishlist'][$id_produk])) {
	$_SESSION['wishlist'][$id_produk]+=1;
}else{
	$_SESSION['wishlist'][$id_produk]=1;
}
?>
<style>
	.fa-heart-q{
		margin-left: 35px; font-size: 25px; color: #ec5252;
	}
	.fa-heart-q:hover{
		color: #FFCC00;
	}
</style>
<!-- product view -->
<div class="container mt-5">
	<div class="row">
		<?php foreach ($_SESSION['wishlist'] as $id_produk => $jumlah): ?>  
			<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_produk='$id_produk'" ); ?> 
			<?php $products = $result->fetch_assoc();?>
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
						<a href="index.php?page=delete-wishlist&id=<?= $id_produk;  ?>">
							<i class="fa fa-heart fa-heart-q mt-auto mb-auto" data-toggle="tooltip" data-placement="bottom" title="Dalete to Wishlist"></i>
						</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<!-- product view -->
<?php echo $id_produk + 1; ?>