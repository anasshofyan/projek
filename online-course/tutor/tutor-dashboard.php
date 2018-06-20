<?php include 'process/session.php'; ?>
<!-- banner dashboard -->
<section>
	<div class="carousel-item active">
		<img class="d-block w-100 " src="./asset/img/s.jpg">
		<div class="carousel-caption d-none d-md-block">
			<div style="margin-bottom: 10%;">
				<h1>Tutor Dashboard</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
				<a class="btn btn-outline-warning" href="index.php?page=make-course"><span class="fa fa-pencil-square margin-xs-right"></span> Create a Course</a>
			</div>
		</div>
	</div>
</section>
<!-- end banner dashboard -->
<!-- search -->
<section>
	<div class="container mt-5">
		<div class="row  justify-content-center">
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-warning btn-lg my-2 my-sm-0" type="submit"><span class="fa fa-search"></span></button>
			</form>
		</div>
	</div>
</section>
<!-- end search -->
<!-- products view  -->
<div class="container mt-5">
  <div class="row">
    <?php   $id_tutor = $_SESSION['tid']; ?>
    <?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_tutor_fk='$id_tutor' ") ?> 
    <?php while ($products = $result->fetch_assoc()) {?>
      <div class="col-md-3">
        <div class="mb-4 box-shadow">
          <img class="product-img" src="uploads/<?= $products["foto_produk"]; ?> ">
          <div class="product-body">
            <!-- category -->
            <p class="product-category"><?= $products["kategori_produk"]; ?></p>
            <!-- title product -->
            <h6 class="product-title"><?= $products["nama_produk"]; ?></h6>
            <!-- price -->
            <div href="#" class="product-price"><strong>Rp. </strong><?= $angka = number_format($products["harga_produk"]); ?></div>
            <!-- level -->
            <small class="product-level" style="font-size: 12px;"><?= $products["nama_tutor_pembuat"]; ?></small>
            <!-- option button -->
            <div class="product-btn">
              <a href="index.php?page=delete-products&id=<?php echo $products["id_produk"];?>" class="btn btn-danger btn-sm ml-5"><span class="fa fa-trash"></span>
              </a>
              <a href="index.php?page=update-products&id=<?php echo $products["id_produk"]; ?>" class="btn btn-info btn-sm ml-2"><span class="fa fa-edit"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- products view  -->