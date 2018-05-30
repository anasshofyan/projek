 <!-- navbar -->
 
 <div class="navbar con navbar-expand-lg navbar-light bg-light shadow ">
  <nav class="container ">
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
    <a href="teach-tutor.php">
      <button type="button" class="btn btn-light">Teach on Tutorteknik</button></a>
      <a href="my-course.php">
        <button type="button" class="btn btn-light">My Courses</button></a>
        <a href="my-course.php">
          <button type="button" class="btn btn-light "><i class="fa fa-heart" style="color: #8D8D8D"></i>
          </button></a>
          <button type="button" class="btn btn-light"><i class="fa fa-bell" style="color: #8D8D8D"></i></button>
          <button type="button" class="btn btn-light mr-3"><i class="fa fa-cart-plus" style="color: #8D8D8D"></i></button>
          <!-- drop profile -->
          <div class="dropdown show">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="./asset/img/svg/004-boy.svg" class="rounded-circle  profile img-fluid mr-3" width="30px">
            </a> 
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="profile-setting.php"><i class="fa fa-user-circle" style="color: #8D8D8D"> </i> <?php 
              $conn = mysqli_connect('localhost', 'root', '', 'tutorteknik');
              if (isset($_SESSION['id_user'])) {
                $id = $_SESSION['id_user'];
               $result = mysqli_query($conn, "SELECT nama FROM users WHERE id_user=$id ");

               echo ".$result.";
             }


             ?>
           </a>
           <a class="dropdown-item" href="#"><i class="fa fa-commenting-o" style="color: #8D8D8D"> </i> Message</a>
           <a class="dropdown-item" href="#"> <i class=" fa fa-question" style="color: #8D8D8D">  </i> Help</a>
           <a class="dropdown-item" href="index.php"><i class="fa fa-sign-out"style="color: #8D8D8D">  </i> Log Out</a>
         </div>
       </div>
       <!-- end drop profile -->
     </div>
   </nav>
 </div>
        <!-- end navbar -->