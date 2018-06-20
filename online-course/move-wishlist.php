<?php session_start(); ?>
<?php include 'process/session.php'; ?>
<?php 
if (isset($_GET['id'])) {
	$id_user = $_SESSION['uid'];
	$id_product = $_GET['id'];
	$result = mysqli_query($conn, "DELETE FROM tabel_keranjang WHERE tabel_keranjang.id_produk='$id_product'");

	$sql = mysqli_query($conn, "SELECT id_produk FROM tabel_wishlist WHERE id_produk = '$id_product'  AND id_user='$id_user' ");
	$ketemu = mysqli_num_rows($sql);
	if ($ketemu==0){
		mysqli_query($conn, "INSERT INTO tabel_wishlist (id_produk, jumlah_wishlist, id_user ) VALUES ('$id_product', 1, '$id_user') ");
	}else{
		mysqli_query($conn, "UPDATE tabel_wishlist SET jumlah_wishlist = jumlah_wishlist + 1 WHERE  id_produk='$id_product' AND id_user='$id_user'");
		echo "<meta http-equiv='refresh' content='1;url=index.php?page=cart'>";
	}
}
?>


