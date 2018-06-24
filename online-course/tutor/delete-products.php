<!-- delete products  -->
<?php 
$pecah = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_produk='$_GET[id]'"));
$fotoproduk = $pecah['uploads'];
if (file_exists("uploads/$fotoproduk")) {
	unlink("uploads/$fotoproduk");
}
mysqli_query($conn, "DELETE FROM tabel_produk WHERE id_produk='$_GET[id]'");
echo "<script>alert('Your Course Daleted');</script>";
$row = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tabel_produk WHERE id_tutor_fk='$_SESSION[tid]'"));
if ( $row == 0) {
	echo "<script>location='index.php?page=tutor-dashboard&status=1';</script>";
}else{
	echo "<script>location='index.php?page=tutor-dashboard';</script>";
}		
?>
<!-- delete products  -->