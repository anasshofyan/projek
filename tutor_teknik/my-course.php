<?php include 'process/session.php'; ?>
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
<div style="margin-top: 60px;">
  <?php include './components/navbar.php' ?>

  <!-- my course -->
  <div class="bg-dark text-white mt-0">
    <div class="container">
      <div class="row pt-5">
        <h3>My Courses</h3>
      </div>
      <div class="row pt-3">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Wishlist</a>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- end my course -->

  <!-- all course -->
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md">
            <div class="card">
              <a href="products-details.php">
                <img class="card-img-top" src="./uploads/1.png" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                <p class="card-text">Anas Shofyan</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </li>
                <li class="list-group-item text-lg-right"><h6>Rp. 85.000</h6></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <a href="#">
                <img class="card-img-top" src="./uploads/2.png" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                <p class="card-text">Shofyan</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </li>
                <li class="list-group-item text-lg-right"><h6>Rp. 75.000</h6></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <a href="#">
                <img class="card-img-top" src="./uploads/3.png" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                <p class="card-text">Martunis</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </li>
                <li class="list-group-item text-lg-right"><h6>Rp. 70.000</h6></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <a href="#">
                <img class="card-img-top" src="./uploads/4.png" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                <p class="card-text">Fateh</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </li>
                <li class="list-group-item text-lg-right"><h6>Rp. 65.000</h6></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- wishlist -->
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="container mt-5">
       <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="./uploads/1.png" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
              <p class="card-text">Anas Shofyan</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </li>
              <li class="list-group-item text-lg-right"><h6>Rp. 85.000</h6></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="./uploads/2.png" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
              <p class="card-text">Shofyan</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </li>
              <li class="list-group-item text-lg-right"><h6>Rp. 75.000</h6></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="./uploads/3.png" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
              <p class="card-text">Martunis</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </li>
              <li class="list-group-item text-lg-right"><h6>Rp. 70.000</h6></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="./uploads/4.png" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
              <p class="card-text">Fateh</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </li>
              <li class="list-group-item text-lg-right"><h6>Rp. 65.000</h6></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include './components/footer.php'; ?>
<!-- end Footer -->

</body>
</html>