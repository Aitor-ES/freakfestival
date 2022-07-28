<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Banner Start -->
  <div class="container-fluid ff-main-gutter text-center text-white mb-4 py-5" id="banner">
    <div class="row mb-5">
      <div class="col">
        <h1><img src="/images/logo_freak_festival_22.svg" class="img-fluid" alt="Freak Festival"></h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3 class="display-5 f-uncial-r f-gradient-ff"><?php echo $lang["lang.home.banner.location.town"]; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h4 class="f-gradient-ff"><?php echo $lang["lang.home.banner.location.building"]; ?></h4>
      </div>
    </div>
    <div class="row my-5">
      <div class="col">
        <h2 class="display-5 f-frutiger-b f-gradient-ff"><?php echo $lang["lang.home.banner.date"]; ?></h2>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <div class="container-md ff-main-gutter my-5">
    <!-- Introduction Start -->
    <div class="row">
      <div class="order-lg-1 col-lg-5 text-center mb-4 mb-lg-0">
        <img class="img-fluid rounded-pill" src="/images/photos/general_1_blue-min.jpg" width="400" height="400" alt="">
      </div>
      <div class="order-lg-0 col-lg-7 d-flex flex-column justify-content-center text-center text-lg-end">
        <h2 class="f-uncial-r"><?php echo $lang["lang.home.introduction.title"]; ?></h2>
        <p>
        <?php echo $lang["lang.home.introduction.paragraph.1"]; ?>
        </p>
        <p>
        <?php echo $lang["lang.home.introduction.paragraph.2"]; ?>
        </p>
      </div>
    </div>
    <!-- Introduction End -->

    <hr class="my-5">

    <!-- Features Start -->
    <div class="row">
      <div class="col-12">
        <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.home.features.title"]; ?></h1>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5 justify-content-center text-center">

      <!-- 1st feature -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/juegos_de_mesa_blue-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.board-games.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.board-games.description"]; ?></p>
      </div>

      <!-- 2nd feature -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/torneos_blue-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.tournaments.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.tournaments.description"]; ?></p>
      </div>

      <!-- 3rd feature -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/rol_blue-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.rpg.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.rpg.description"]; ?></p>
      </div>

      <!-- 4th feature -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/cosplay_blue-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.contests.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.contests.description"]; ?></p>
      </div>

      <!-- 5th feature -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/tiendas_artistas_y_artesanos_blue-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.shops-artists-artisans.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.shops-artists-artisans.description"]; ?></p>
      </div>

      <!-- 6th feature -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/charlas_blue-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.talks-exhibitions.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.talks-exhibitions.description"]; ?></p>
      </div>

      <!-- 7th feature -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/talleres_blue-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.workshops.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.workshops.description"]; ?></p>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->

  <!-- Bootstrap JS bundle w/ Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- jQuery JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
</body>