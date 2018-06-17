<?php include 'process/session.php'; ?>
<?php 
$id_produk = $_GET['id'];
unset($_SESSION['wishlist'][$id_produk]);
echo "<script>location='index.php?page=wishlist'</script>";
 ?>