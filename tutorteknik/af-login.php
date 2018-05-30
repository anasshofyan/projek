     <!doctype html>
     <html lang="en">

     <?php 
     session_start();
     include './tag/tagtag/link.php'; ?>
     <body>
       <?php  include './tag/tagtag/navbar.php'; ?>
       <!-- sub nav -->
       <nav>
        <ul class="nav justify-content-center bg-light mb-3 mt-1">
          <li class="nav-item">
            <button type="button" class="btn btn-light"><i class="fa fa-desktop"></i> IT & Software</button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-light"><i class="fa fa-edit"></i> Design</button>
          </li>
          <li class="nav-item">
           <button type="button" class="btn btn-light"><i class="fa fa-microchip"></i> Electronis</button>
         </li>
         <li class="nav-item">
           <button type="button" class="btn btn-light"><i class="fa fa-code"></i> Personal Development</button>
         </li>
       </ul>
     </nav>
   </div>
   
   <!-- carausell -->
   <section>
    <div class="container">
      <div class="row">
        <div class="col">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 " src="./asset/img/kod.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./asset/img/koding.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./asset/img/arduino.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end carausell -->

<!-- products -->
<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md">
        <h4>Top Courses in "Development"</h4>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <a href="#">
            <img class="card-img-top" src="./asset/img/thumbs/1.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/2.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/3.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/4.png" alt="Card image cap">
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
    <div class="row">
      <div class="col-md">
        <h4>Top Courses in "Electronic"</h4>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <a href="#">
            <img class="card-img-top" src="./asset/img/thumbs/1.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/2.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/3.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/4.png" alt="Card image cap">
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
    <div class="row">
      <div class="col-md">
        <h4>Top Courses in "Electronic"</h4>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <a href="#">
            <img class="card-img-top" src="./asset/img/thumbs/1.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/2.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/3.png" alt="Card image cap">
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
            <img class="card-img-top" src="./asset/img/thumbs/4.png" alt="Card image cap">
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

</section>
<!-- end category -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php 
include './tag/tagtag/footer.php';
include './tag/tagtag/js.php';
?>
</body>
</html>