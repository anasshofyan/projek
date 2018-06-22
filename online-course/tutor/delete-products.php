<!-- delete products  -->
<?php 
$pecah = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_produk='$_GET[id]'"));
$fotoproduk = $pecah['uploads'];
if (file_exists("uploads/$fotoproduk")) {
	unlink("uploads/$fotoproduk");
}
mysqli_query($conn, "DELETE FROM tabel_produk WHERE id_produk='$_GET[id]'");
echo "<script>alert('Your Course Daleted'); location='index.php?page=tutor-dashboard';</script>";
?>
<!-- delete products  -->