<?php require '../config/db.php' ?>
<?php 
$keyword = $_GET['keyword'];
?>
<?php $result = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE nama_produk LIKE '%$keyword%' OR kategori_produk LIKE '%$keyword%' OR level_produk  LIKE '%$keyword%' OR nama_tutor_pembuat LIKE '%$keyword%' "); ?> 
<?php while ($products = $result->fetch_assoc()) {?>

