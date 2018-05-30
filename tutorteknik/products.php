   <?php include './tag/tagtag/link.php'; ?>
    <body>

      <!-- link navbar  -->
      <?php include './tag/tagtag/navbar.php'; ?>

      <!-- all course -->
    
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
      </body>

    <?php   include './tag/tagtag/footer.php'; ?>
    <?php   include './tag/tagtag/js.php'; ?>

