    <!doctype html>
    <html lang="en">
    <?php include './tag/tagtag/link.php'; ?>
    <body>

      <!-- link navbar  -->
      <?php include './tag/tagtag/navbar.php'; ?>

      <!-- my course -->
      <footer class="bg-dark text-white mt-2">
        <div class="container">
          <div class="row pt-5">
            <h3>Beginner</h3>
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
      </footer>
      <!-- end my course -->

      <!-- all course -->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="container mt-5 mb-5">
            <?php for ($i=1; $i <=3 ; $i++) : ?>
              <div class="row mt-4">
                <?php for ($j=1; $j <= 4; $j++) : ?>
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
                <?php endfor; ?>
              </div>
            <?php endfor; ?>
          </div>
        </div>

        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>



        <!-- wishlist -->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="container mt-5">
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
      </div>
    </div>

    <?php   include './tag/tagtag/footer.php'; ?>
    <?php   include './tag/tagtag/js.php'; ?>

  </body>
  </html>

  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor a, sapiente, maiores nam iusto! Dolor deleniti accusantium assumenda qui ipsa, perspiciatis iure iusto. Provident ratione ab consectetur pariatur repudiandae?