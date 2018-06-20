<?php session_start(); ?>
<?php include 'process/session.php'; ?>	
<?php 
$id_product = $_GET['id'];
$id_user = $_SESSION['uid'];
$sql = mysqli_query($conn, "SELECT id_produk FROM tabel_keranjang WHERE id_produk = '$id_product'  AND id_user='$id_user' ");
$ketemu = mysqli_num_rows($sql);
if ($ketemu==0){
	mysqli_query($conn, "INSERT INTO tabel_keranjang (id_produk, jumlah_keranjang, id_user ) VALUES ('$id_product', 1, '$id_user') ");
}else{
	mysqli_query($conn, "UPDATE tabel_keranjang SET jumlah_keranjang = jumlah_keranjang + 1 WHERE  id_produk='$id_product' AND id_user='$id_user'");
}
echo "<meta http-equiv='refresh' content='0;url=index.php?page=cart'>";
?>

<!-- product view -->

