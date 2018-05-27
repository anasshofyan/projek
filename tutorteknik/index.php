  <!doctype html>
  <html lang="en">
  <?php include './tag/tagtag/link.php'; ?>
  <?php include './config/config.php'; ?>
  <body>
    <!-- navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
      <a class="navbar-brand" href="#"><img src="./asset/img/logo.png" width="120" height="20" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-th"></i> Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Beginner</a></li>
              <li><a class="dropdown-item" href="#">Intermediate</a></li>
              <li><a class="dropdown-item" href="#">Advance</a></li>
            </ul>
          </li>
          <form class="form-inline my-2 my-lg-0">
           <div class="input-group">
            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-warning" type="button"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </ul>
      <button type="button" class="btn btn-light">Bisnis</button>
      <button type="button" class="btn btn-light">Belajar Online</button>
      <button type="button" class="btn btn-light mr-3"><i class="fa fa-cart-plus"></i></button>
      <button data-toggle="modal" data-target="#modalLogin" href="#myModal" class="btn btn-outline-warning  mr-2">Login</button>
      <button data-toggle="modal" data-target="#modalSignup" href="#myModal" class="btn btn-danger  mr-4">Sign Up</button>
    </div>
  </nav>
  <!-- end navbar -->


  <!-- Modal Login -->
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Login Tutor Teknik Acount</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="proses/login.php">
            <div class="form-group">
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn btn-warning btn-lg btn-block">Login</button>
          </form>
        </div>
        <div class="modal-footer justify-content-center">
          <h6>Belum punya akun? daftar<a href="#modalSignup" data-target="#modalSignup" data-toggle="modal"> disini</a></h6>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal login  -->

  <!-- Modal Sing Up -->
  <div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Sign Up and Start Learning</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="./proses/register.php">
            <div class="form-group">
              <input type="text" class="form-control" name="nama" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password1" placeholder="Comfirm Password">
            </div>
            <button type="submit" name="register" class="btn btn-danger btn-lg btn-block">Sign Up</button>
          </form>
        </div>
        <div class="modal-footer justify-content-center">
          <h6>Already have an account?<a href="#modalLogin" data-target="#modalLogin" data-toggle="modal"> Login</a></h6>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Sign Up -->

  
  <section>
    <div class="container" style="margin-top: 70px;">
      <div class="row mt-5">
        <div class="col">
          <!-- <?php 
          $status = $_REQUEST['status'];
          if ($status == 1) {
            echo  '<div class="alert alert-danger" style="z-index:9999;" role="alert">
           User dan Password anda salah!</div>
           </div>';
         }
         ?> -->
       </div>
     </div>
   </div>
 </section>
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
            <img class="d-block w-100 " src="./asset/img/main.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./asset/img/main1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./asset/img/main4.jpg" alt="Third slide">
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

<!-- fitur tutorteknik -->
<section>
  <div class="container">
    <div class="row text-center mb-3 mt-5">
      <div class="col-lg">
        <h3>Apa yang bisa kamu lakukan di tutorteknik?</h3>
        <p>Nggak perlu bingung dan repot lagi dalam mencari materi dan tutor terbaik.
        Semuanya telah tersedia di tutorteknik</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg">
       <div class="card text-white bg-success mb-3">
        <div class="card-body text-center">
          <span class="fa fa-comments fa-3x"></span>
          <p class="card-text">Live chat dengan tutor</p>
        </div>
      </div>
    </div>
    <div class="col-lg">
     <div class="card text-white bg-primary mb-3">
      <div class="card-body text-center">
        <span class="fa fa-user-plus fa-3x"></span>
        <p class="card-text">Undang tutor</p>
      </div>
    </div>
  </div>
  <div class="col-lg">
   <div class="card text-white bg-warning mb-3">
    <div class="card-body text-center">
      <span class="fa fa-book fa-3x"></span>
      <p class="card-text">Banyak pilihan materi</p>
    </div>
  </div>
</div>
<div class="col-lg">
 <div class="card text-white bg-danger mb-3">
  <div class="card-body text-center">
    <span class="fa fa-graduation-cap fa-3x"></span>
    <p class="card-text">Praktek dengan tutor</p>
  </div>
</div>
</div>
</div>
</div>
</section>
<!-- end fitur tutorteknik -->

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
  </div>
</section>
<!-- end category -->

<!-- location  -->

<section id="contact" class="contact mb-5">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact Us</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body text-center">
            <h5 class="card-title">Contact Us</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, deleniti.</p>
          </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item"><h1>Location</h1></li>
          <li class="list-group-item">My Office</li>
          <li class="list-group-item">Lamongan</li>
          <li class="list-group-item">East Java</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukan Email">
          </div>
          <div class="form-group">
            <label for="telp">No Telp</label>
            <input type="text" class="form-control" id="telp" placeholder="Masukan No telp">
          </div>
          <div class="form-group">
            <label for="nama">Pesan</label>
            <textarea type="text" class="form-control" id="nama" placeholder="Masukan Pesan"></textarea>
          </div>
          <div class="form-group">
           <button class="btn btn-primary"> Kirim Pesan</button>
         </div>
       </form>
     </div>
   </div>
 </div>
</div>
</section>
<!-- end location  -->

<!-- Footer -->
<?php include './tag/tagtag/footer.php'; ?>
<!-- end Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include './tag/tagtag/js.php'; ?>
</body>
</html>
