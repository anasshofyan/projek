<?php session_start(); ?>
<?php include 'process/session.php'; ?>
<?php 
$id_produk = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM tabel_keranjang WHERE tabel_keranjang.id_produk='$id_produk'");
echo "<script>location='index.php?page=cart';</script>";

?>