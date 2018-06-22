<?php include 'process/session.php'; ?>
<style>
.line-bottom{
  border-bottom: 1px solid #D3D3D3;
}
.badge-a{
  background-color: #ec5252;
  color: white;
}
.bg{
  background-color: white;
}
</style>

<?php $id_user = $_SESSION['uid']; ?>
<?php $pecah = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_user WHERE id_user = '$id_user'")); ?>
<?php $result = mysqli_query($conn, "SELECT * FROM tabel_wishlist  JOIN tabel_produk WHERE  tabel_wishlist.id_produk=tabel_produk.id_produk AND id_user='$id_user'"); ?> 
<?php $wishlist = mysqli_num_rows($result);?>

<!-- // keranjang -->
<?php $result = mysqli_query($conn, "SELECT * FROM tabel_keranjang JOIN tabel_produk WHERE  tabel_keranjang.id_produk=tabel_produk.id_produk AND id_user='$id_user'"); ?> 
<?php $keranjang = mysqli_num_rows($result);?>

<!-- navbar -->
<div class="navbar navbar-expand-lg navbar-light bg line-bottom fixed-top" style="z-index:99999">
 <nav class="container">
  <a class="navbar-brand" href="index.php?page=home"><img src="./asset/img/logo/logo.png" width="160" height="25" class="mb-1"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item dropdown">
       <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span class="fa fa-th" style="color: #B2B2B2"></span> Level 
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <li><a class="dropdown-item" href="index.php?page=products">All Level</a></li>
         <li><a class="dropdown-item" href="index.php?page=beginner">Beginner</a></li>
         <li><a class="dropdown-item" href="index.php?page=intermediate">Intermediate</a></li>
         <li><a class="dropdown-item" href="index.php?page=advance">Advance</a></li>
       </ul>
     </li>
   </ul>
   <ul class="navbar-nav">
    <li class="nav-item mr-2">
      <a class="nav-link" href="tutor/index.php?page=teach-tutor">Teach on Tutorteknik</a>
    </li>
    <li class="nav-item mr-2">
     <a class="nav-link" href="index.php?page=my-course">My Courses</a>
   </li>
   <li class="nav-item mr-2">
     <a class="nav-link " data-toggle="tooltip" data-html="true" title="Wishlist <?= $wishlist; ?> item" href="index.php?page=wishlist"><span class="fa fa-heart" style="color: #B2B2B2"></i><small class="badge badge-a badge-pill ml-1"><?= $wishlist; ?></small> </a>
     </li>
     <li class="nav-item mr-2">
       <a class="nav-link" href="index.php?page=notification"><i class="fa fa-bell" style="color: #B2B2B2"></i></a>
     </li>
     <li class="nav-item mr-2">
       <a class="nav-link" href="index.php?page=cart" data-html="true" title="Card <?= $keranjang; ?> item"><i class="fa fa-cart-plus" style="color: #B2B2B2"></i><small class="badge badge-a ml-1 badge-pill"><?= $keranjang; ?></small></a>
     </li>
   </ul>
   <pre> </pre>
   <!-- drop profile -->
   <div class="dropdown mr-3">
    <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-html="true" title=" <?php echo $pecah['nama_depan']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="./image/<?= $pecah['foto_user']; ?>" alt="No Image" width='30px;' class='rounded-circle'>
    </a> 
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="index.php?page=user-profile-setting"><img src="./image/<?= $pecah['foto_user']; ?>" alt="No Image" width='18px;' class='rounded-circle mr-2'></span>
      <?php echo $pecah['nama_depan']; ?>
    </a>
    <a class="dropdown-item" href="#"><span class="fa fa-commenting-o mr-2" style="color: #B2B2B2"> </span> Message</a>
    <a class="dropdown-item" href="index.php?page=help"><span class=" fa fa-question mr-3" style="color: #B2B2B2">  </span> Help</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="index.php?page=logout-user"><span class="fa fa-sign-out mr-2"style="color: #B2B2B2">  </span> Log Out</a>
  </div>
</div>
<!-- end drop profile -->
</div>
</nav>
</div>
<!-- end navbar -->
