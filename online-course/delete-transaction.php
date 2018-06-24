<?php session_start(); ?>
<?php include 'process/session.php'; ?>
<?php 
$id_produk = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM table_pembelian WHERE table_pembelian.id_produk='$id_produk'");
echo "<script>alert('Transacrion daleted');location='index.php?page=checkout-nota';</script>";
?>