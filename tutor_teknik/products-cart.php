<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tutor Teknik | Home</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./asset/css/style.css">

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })
  </script>
  <script>
    $(document).ready(function(){
      $('.profile').popover({html: "<a href="#">a</a>", content: "Blabla", placement: "bottom"}); 
    });
  </script>
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

  <?php include './components/navbar.php'; ?>
  <!-- my products -->
  <div class="bg-dark text-white mt-0">
    <div class="container">
      <div class="row p-5">
        <h3>Products Cart</h3>
      </div>
    </div>
  </div>
  <!-- end my products -->
<section>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md">
        <h4>1 Course in Chart</h4>
      </div>
    </div>
  </div>
</section>
  <section>
    <div class="container  mb-4">
      <div class="row">
        <div class="col-md-2">
          <img class="card-img-top" src="uploads/1.png" alt="Card image cap">
        </div>
        <div class="col-md-6">
          <h3>Belajar PHP untuk PEMULA : SESSION</h3>
          <small>Anas Shofyan MF</small>
        </div>
        <div class="col-md-2">
         <a href="">Remove</a>
         <div></div>
         <a href="">Move to Wishlist</a>
        </div>
        <div class="col-md-2">
          <h4>Total</h4>
          <h5>Rp. 200.000</h5>
         <a href="check-out.php" class="btn btn-danger"> Check Out 
          </a>
        </div>
      </div>
    </div>
  </section>

<section style="height: 200px;"></section>
  <?php include './components/footer.php'; ?>
</body>
</html>