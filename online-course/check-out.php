<?php include 'process/session.php'; ?> 
<?php $id_user = $_GET['id']; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM  table_user WHERE id_user='$id_user'"); ?> 
<?php $pembelian = mysqli_fetch_assoc($result)?> 
<div class="container">
  <div style="margin-top: 150px;"></div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill mr-1"><?= $keranjang; ?> </span>  
      </h4>
      <ul class="list-group mb-3">
       <?php $total=0; ?>
       <?php $result = mysqli_query($conn, "SELECT * FROM tabel_keranjang , tabel_produk WHERE  tabel_keranjang.id_produk=tabel_produk.id_produk AND id_user='$id_user'"); ?> 
       <?php while ($products = mysqli_fetch_assoc($result)){ ?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?= $products['nama_produk'];  ?>e</h6>
            <small class="text-muted"><?= $products['deskripsi_produk'];  ?></small>
          </div>
          <span class="text-muted">Rp. <?= number_format($products['harga_produk']);  ?></span>
        </li>
        <?php $total += $products["harga_produk"]; ?>
        <?php $id_produk = $products["id_produk"]; ?>
      <?php } ?>
      <li class="list-group-item d-flex justify-content-between bg-light">
        <div class="text-success">
          <h6 class="my-0">Promo code</h6>
          <small>EXAMPLECODE</small>
        </div>
        <span class="text-success">-$5</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong class=""><?= number_format($total);  ?></strong>
      </li>
    </ul>
    <form class="card p-2">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Promo code">
        <div class="input-group-append">
          <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Billing address</h4>
    <form class="needs-validation" novalidate="" method="post">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">First name</label>
          <input type="text" class="form-control" id="firstName" placeholder="" readonly="" value="<?= $pembelian['nama_depan'] ?>" required="">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="" readonly="" value="<?= $pembelian['nama_belakang'] ?>" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row">
          <div class="col-sm">
           <label for="username">Username</label>
           <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username"  readonly="" value="<?= $pembelian['user_name'] ?>" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="col-sm">
         <label for="username">Contact</label>
         <div class="input-group">
          <input type="text" class="form-control" id="username" placeholder="Username" readonly="" value="<?= $pembelian['telepon_user'] ?>" required="">
        </div>
      </div>
    </div>
  </div>
  <div class="mb-3">
    <label for="email">Email <span class="text-muted">(Optional)</span></label>
    <input type="email" class="form-control" id="email" readonly="" value="<?= $pembelian['email_user'] ?>" placeholder="you@example.com">
    <div class="invalid-feedback" readonly="">
      Please enter a valid email address for shipping updates.
    </div>
  </div>
  <div class="mb-3">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" readonly="" value="<?= $pembelian['alamat_user'] ?>" required="">
    <div class="invalid-feedback" readonly="">
      Please enter your shipping address.
    </div>
  </div>
  <div class="mb-3">
    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
    <input type="text" class="form-control" id="address2" name="lokasi_training" placeholder="Apartment or suite">
  </div>
  <div class="mb-3">
    <label for="address">Note</label>
    <textarea type="text" class="form-control" id="address" name="catatan" placeholder="Location Training"></textarea>
  </div>
  <div class="row">
    <div class="col-md-5 mb-3">
      <label for="country">Country</label>
      <select class="custom-select d-block w-100" id="country" required=""  >
        <option value=""><?= $pembelian['negara_user'] ?></option>
      </select>
      <div class="invalid-feedback">
        Please select a valid country.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="state">State</label>
      <select class="custom-select d-block w-100" id="state" required="" readonly="">
        <option value=""><?= $pembelian['kota_user'] ?></option>
      </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="zip">Zip</label>
      <input type="text" class="form-control" id="zip" placeholder="" readonly="" value="<?= $pembelian['zip_user'] ?>" required="">
      <div class="invalid-feedback">
        Zip code required.
      </div>
    </div>
  </div>
  <hr class="mb-4">
  <h4 class="mb-3">Payment</h4>
  <div class="d-block my-3">
    <div class="custom-control custom-radio">
      <input id="bri" name="paymentMethod" type="radio" class="custom-control-input" checked="" value="Bank BRI" required="">
      <label class="custom-control-label" for="bri">Bank BRI</label>
    </div>
    <div class="custom-control custom-radio">
      <input id="mandiri" name="paymentMethod" type="radio" class="custom-control-input" value="Bank Mandiri" required="">
      <label class="custom-control-label" for="mandiri">Bank Mandiri</label>
    </div>
    <div class="custom-control custom-radio">
      <input id="bni" name="paymentMethod" type="radio" class="custom-control-input" value="Bank BNI" required="">
      <label class="custom-control-label" for="bni">Bank BNI</label>
    </div>
    <div class="custom-control custom-radio">
      <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="Paypal" required="">
      <label class="custom-control-label" for="paypal">Paypal</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="cc-name">Name on card</label>
      <input type="text" class="form-control" id="cc-name" placeholder="" required="">
      <small class="text-muted">Full name as displayed on card</small>
      <div class="invalid-feedback">
        Name on card is required
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="cc-number">Credit card number</label>
      <input type="text" class="form-control" id="cc-number" placeholder="" required="">
      <div class="invalid-feedback">
        Credit card number is required
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3">
      <label for="cc-expiration">Expiration</label>
      <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
      <div class="invalid-feedback">
        Expiration date required
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="cc-expiration">CVV</label>
      <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
      <div class="invalid-feedback">
        Security code required
      </div>
    </div>
  </div>
  <hr class="mb-4">
  <button class="btn btn-warning btn-md btn-block" name="checkout" type="submit">Continue to checkout</button>
</form>
</div>
</div>

<?php 
// kode transaksi
$angka=range(0,9); //code dibuat dari angka 0-9
shuffle($angka); //untuk mengacak angka
$ambilangka=array_rand($angka,8); //pengambilan angka sebanyak 6 digit
$angkastring=implode($ambilangka); //membuat angka-angka yang digenerate dipisahkan dengan -
$code=$angkastring;
$string = 'TT';
// kode transaksi
$number=range(0,9); //code dibuat dari angka 0-9
shuffle($number); //untuk mengacak angka
$getnumber=array_rand($number,3); //pengambilan angka sebanyak 6 digit
$numberstring=implode($ambilangka); //membuat angka-angka yang digenerate dipisahkan dengan -
$code_buy=$numberstring;
$string_ = 'TT';
?>
<?php if (isset($_POST['checkout'])) {
// generate kode transaksi 

	$id_user = $_GET['id'];
	date_default_timezone_set('Asia/Jakarta');	
	$lokasi_training = $_POST['lokasi_training'];
	$total_pembelian = $total;
	mysqli_query($conn, "INSERT INTO table_pembelian (id_user, lokasi_cod, total_pembelian, kode_transaksi, kode_pembelian, id_produk, catatan_user, metode_pembayaran) VALUES ('$id_user', '$lokasi_training', '$total_pembelian', '$string$code','$string_$code_buy', '$id_produk', '$_POST[catatan]', '$_POST[paymentMethod]' )");
	mysqli_query($conn, "DELETE FROM tabel_keranjang WHERE tabel_keranjang.id_user='$id_user'");
	echo "<meta http-equiv='refresh' content='1;url=index.php?page=checkout-nota'>";
} ?> -->