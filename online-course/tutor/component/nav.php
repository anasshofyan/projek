<?php $id = $_SESSION['tid'];?>
<?php $pecah = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tabel_tutor WHERE id_tutor='$id'" )); ?>
<style>
.line{
	border-bottom: 1px solid #D3D3D3;
}
.bg{
    background-color: white;
  }
</style>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg fixed-top line">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand ml-5" href="index.php?page=fitur-index">
		<img src="./asset/img/logo/logo.png" width="160" height="25" class="d-inline-block align-top">
	</a>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="index.php?page=home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?page=tutor-dashboard">Tutor Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://anakteknik.co.id">Blog</a>
			</li>
		</ul>
		<ul class="navbar-nav mr-5">
			<li class="nav-item">
				<img src="./uploads/<?= $pecah['foto_tutor']; ?>" alt="No Image" width='30px;' class='rounded-circle mt-1'>
			</li>
			<li class="nav-item mr-3">
				<a class="nav-link" href="index.php?page=profile-setting">Hi <?= $pecah['nama_depan_tutor']; ?> <?= $pecah['nama_belakang_tutor']; ?></a>
			</li>
			<li class="nav-item">
				<a class="btn btn-outline-secondary" href="index.php?page=logout-tutor">Logout</a>
			</li>
		</ul>
	</div>
</nav>
<!-- end navbar -->