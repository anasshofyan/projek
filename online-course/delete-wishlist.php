<?php session_start(); ?>
<?php include 'process/session.php'; ?>
<?php 
$id_produk = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM tabel_wishlist WHERE tabel_wishlist.id_produk='$id_produk'");
$results = mysqli_query($conn, "SELECT * FROM tabel_wishlist");
$row = mysqli_num_rows($results);
if ($row == 0) {
	echo "<script>location='index.php?page=wishlist&status=1';</script>";
}else{
echo "<script>location='index.php?page=wishlist';</script>";
}
?>