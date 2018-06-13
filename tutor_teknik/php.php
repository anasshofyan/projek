<?php 
$produk = [["nama" => "Sampo Clear", "berat" => "30gr", "harga" => 5000, "foto" => "sampo.jpg"],
["nama" => "Sabun", "berat" => "50gr", "harga" => 2500 , "foto" => "sabun.jpg" ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Nama Produk</h1>
<?php foreach ($produk as $pro): ?>
	<li><img src="gmbr/<?= $pro["foto"]; ?>"></li>
	<li>Nama Barang : <?= $pro["nama"]; ?></li>
	<li>Berat Barang : <?= $pro["berat"]; ?></li>
	<li>Harga Barang : <?= $pro["harga"]; ?></li>
	<br>
<?php endforeach; ?>
</body>
</html>