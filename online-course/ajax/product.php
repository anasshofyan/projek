<?php require '../config/db.php' ?>
<?php 
$keyword = $_GET['keyword'];
?>
<!-- product view -->
<div class="row">
	<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE nama_produk LIKE '%$keyword%' OR kategori_produk LIKE '%$keyword%' OR level_produk  LIKE '%$keyword%' OR nama_tutor_pembuat LIKE '%$keyword%' "); ?> 
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
<!-- product view -->
