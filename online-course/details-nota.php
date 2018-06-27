<?php include 'process/session.php'; ?>
<?php 

$id_produk = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM table_pembelian JOIN tabel_produk JOIN tabel_tutor JOIN table_kategori JOIN table_level WHERE table_pembelian.id_produk=tabel_produk.id_produk AND id_pembelian='$id_produk'");
?>
<?php $hasil = mysqli_fetch_assoc($result); ?>
<?php $total=0; ?>
<div style="margin-top: 110px;"></div>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<form action="" method="post">
				<div class="content-body box-shadow">
					<h5 class="my-0 ">Detail Transcation</h5>
					<div class="row justify-content-end mb-4">

						<button class="btn btn-info btn-sm mr-4" name="print"><span class="fa fa-print"></span> Cetak</button>

					</div>

					<div class="table-responsive-md">
						<table class="table table-hover">
							<tr style="background-color:  #FFA4A4;">
								<th><small class="nav-link text-secondary">KODE TRANSAKSI</small></th>
								<th><small class="nav-link text-secondary">KODE PEMBELIAN</small></th>
								<th><small class="nav-link text-secondary">TANGGAL PEMBELIAN</small></th>
								<th><small class="nav-link text-secondary">TOTAL PEMBELIAN</small></th>

							</tr>
							<tr>
								<?php $id_produk = $hasil["id_produk"]; ?>
								<th><small class="nav-link"><?= $hasil['kode_transaksi']; ?></small></th>
								<th><small class="nav-link"><?= $hasil['kode_pembelian']; ?></small></th>
								<th><small class="nav-link"><?= $hasil['tanggal_pembelian']; ?></small></th>
								<th><small class="nav-link">Rp. <?= number_format($total += $hasil["harga_produk"]); ?></small></th>
							</tr>
							<!--  -->
							<!--  -->
							<tr style="background-color:  #FFEBA4;">
								<th><small class="nav-link">IMAGE</small></th>
								<th colspan="2"><small class="nav-link">COURSE</small></th>
								<th><small class="nav-link">TUTOR</small></th>

							</tr>
							<tr>
								<th><img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 100px; height: 70px;" src="tutor/uploads/<?= $hasil['foto_produk']; ?>"  data-holder-rendered="true"></th>
								<th colspan="2"><small class="nav-link"><?= $hasil['nama_produk']; ?></small></th>
								<th><small class="nav-link"><?= $hasil['nama_tutor_pembuat']; ?></small></th>

							</tr>
							<!--  -->
							<tr>
								<th colspan="4"><small class="nav-link text-center">CATATAN</small></th>
							</tr>
							<tr>
								<th colspan="4"><small class="text-justify"><?= $hasil['catatan_user'] ?></small></th>
							</tr>
							<!--  -->
						</table>
						<div>
							<small><span class="fa fa-level-up mr-3 ml-3"></span><?=$hasil['nama_level'];  ?></small>
							<small><span class="fa fa-list mr-3 ml-3"></span><?=$hasil['nama_kategori'];  ?></small>

							<small><span class="fa fa-credit-card-alt mr-3 ml-3"></span><?=$hasil['metode_pembayaran'];  ?></small>
							<small><span class="fa fa-map-marker mr-3 ml-3"></span><?=$hasil['lokasi_cod']  ?></small>
						</div>
						<div>
							<div class="mt-3">
								<div ">
									<h5 class="alert-heading">Ketentuan pembayaran:</h5>
									<small>Pembayaran dapat dilakukan melalui transfer ke rekening Bank BRI, Bank Mandiri, Bank BNI.
										Tambahkan 3 digit kode pembelian ke transfer.
									</small>
									<!-- row bank -->
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="p-4">
												<img alt="Logo BCA" src="asset/img/logo/bri.png" style="width: 45px; margin-right: auto; margin-left: auto;">
												<div class="d-block">
													<div><small>Bank BRI, Surabaya</small></div>
													<div><small>034 101 000 743 303</small></div>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="p-4">
												<img alt="Logo BCA" src="asset/img/logo/mandiri.png" style="width: 60px; margin-right: auto; margin-left: auto;">
												<div class="d-block">
													<div><small>Bank Mandiri, Surabaya
													</small></div>
													<div><small>731 025 2527</small></div>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="p-4">
												<img alt="Logo BCA" src="asset/img/logo/bni.png" style="width: 60px; margin-right: auto; margin-left: auto;">
												<div class="d-block">
													<div><small>Bank BNI, Surabaya</small></div>
													<div><small>023 827 2088 </small></div>
												</div>
											</div>
										</div>
									</div>
									<!-- end row bank -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<?php if (isset($_POST['print'])): ?>
		<script>
			window.load = print_d();
			function print_d(){
				window.print();
			}
		</script> 
		<?php endif ?>