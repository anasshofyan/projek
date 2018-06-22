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
<!-- products view  -->
<div class="container mt-5" id="container">
  <div class="row">
    <?php   $id_tutor = $_SESSION['tid']; ?>
    <?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_tutor_fk='$id_tutor' ") ?> 
    <?php while ($products = $result->fetch_assoc()) {?>
      <div class="col-md-3">
        <div class="mb-4 box-shadow">
          <img class="product-img" src="uploads/<?= $products["foto_produk"]; ?> ">
          <div class="product-body">
            <!-- category -->
            <p class="product-category"><?= $products["kategori_produk"]; ?> </p>
            <!-- title product -->
            <h6 class="product-title"><?= $products["nama_produk"]; ?></h6>
            <!-- price -->
            <div href="#" class="product-price"><strong>Rp. </strong><?= $angka = number_format($products["harga_produk"]); ?></div>
            <!-- level -->
            <small class="product-level" style="font-size: 12px;"><?= $products["nama_tutor_pembuat"]; ?></small>

            <!-- option button -->
            <div class="product-btn">

              <div class="btn-group " role="group" aria-label="Basic example">
                <a href="index.php?page=preview&id=<?php echo $products["id_produk"]; ?>" class="btn btn-info btn-sm " data-toggle="tooltip" data-html="true" title="Preview Your Course" ><span class="fa fa-eye"></span>
                </a>
                <a href="index.php?page=update-products&id=<?php echo $products["id_produk"]; ?>" class="btn btn-success btn-sm " data-toggle="tooltip" data-html="true" title="Update Your Course" ><span class="fa fa-edit"></span>
                </a>
                <a href="index.php?page=delete-products&id=<?php echo $products["id_produk"];?>" class="btn btn-danger btn-sm " data-toggle="tooltip" data-html="true" title="Remove Your Course" ><span class="fa fa-trash"></span></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- products view  -->