<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Banner Start -->
  <div class="container-fluid ff-main-gutter text-center text-white mb-4 py-5" id="banner">
    <div class="row">
      <div class="col">
        <h1><img src="/images/logos/Letras_dado_tabla.png" class="img-fluid" alt="Freak Festival" width="375" height="375"></h1>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <div class="container-md ff-main-gutter my-5">
    <!-- Introduction Start -->
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.home.introduction.title"]; ?></h1>

    <div class="row mb-4">
      <div class="col-12 col-lg-4 pb-4 pb-lg-0">
        <p><?php echo $lang["lang.home.introduction.paragraph.1"]; ?></p>
        <p><?php echo $lang["lang.home.introduction.paragraph.2"]; ?></p>
        <p><?php echo $lang["lang.home.introduction.paragraph.3"]; ?></p>
        <p class="text-uppercase"><?php echo $lang["lang.home.introduction.paragraph.4"]; ?></p>
      </div>

      <div class="col-12 col-lg-7 offset-lg-1">
        <div class="row gy-4 text-center text-sm-start">
          <!-- Date -->
          <div class="col-12 col-sm-4 px-3">
            <div class="mb-2"><i class="bi bi-calendar-event fs-1 text-ffmidnight"></i></div>
            <h3 class="fw-light"><?php echo $lang["lang.home.introduction.date.title"]; ?></h3>
            <p>
              <?php echo $lang["lang.home.introduction.date.days.2023"]; ?>
              <br>
              <?php echo $lang["lang.home.introduction.date.weekdays.saturday"]; ?>
              <br>
              <?php echo $lang["lang.home.introduction.date.weekdays.sunday"]; ?>
            </p>
          </div>

          <!-- Location -->
          <div class="col-12 col-sm-4 px-3">
            <div class="mb-2"><i class="bi bi-geo fs-1 text-ffmidnight"></i></div>
            <h3 class="fw-light"><?php echo $lang["lang.home.introduction.location.title"]; ?></h3>
            <p>
              <?php echo $lang["lang.home.introduction.location.building"]; ?>
              <br>
              <?php echo $lang["lang.home.introduction.location.address"]; ?>
              <br>
              <?php echo $lang["lang.home.introduction.location.town"]; ?>
              <br>
              <a href="https://goo.gl/maps/KvYQ6pMJYgf7cYjq5"><?php echo $lang["lang.home.introduction.location.map"]; ?></a>
            </p>
          </div>

          <!-- Entrance -->
          <div class="col-12 col-sm-4 px-3">
            <div class="mb-2"><i class="bi bi-box-arrow-in-right fs-1 text-ffmidnight"></i></div>
            <h3 class="fw-light"><?php echo $lang["lang.home.introduction.entrance.title"]; ?></h3>
            <p><?php echo $lang["lang.home.introduction.entrance.description"]; ?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="row row-cols-1 row-cols-md-3 gy-5 justify-content-center text-center mb-5">
      <div class="col px-4">
        <img class="home-feature-img rounded-circle mb-4" src="/images/placeholder.png" alt="" width="200" height="200">
        <h3 class="fw-light mb-3">Juega</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Erat nam at lectus urna.
        </p>
        <p>
          Cras ornare arcu dui vivamus arcu felis bibendum. Eget sit amet tellus cras adipiscing enim eu turpis.
        </p>
      </div>

      <div class="col px-4">
        <img class="home-feature-img rounded-circle mb-4" src="/images/placeholder.png" alt="" width="200" height="200">
        <h3 class="fw-light mb-3">Descubre</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Erat nam at lectus urna.
        </p>
        <p>
          Cras ornare arcu dui vivamus arcu felis bibendum. Eget sit amet tellus cras adipiscing enim eu turpis.
        </p>
      </div>

      <div class="col px-4">
        <img class="home-feature-img rounded-circle mb-4" src="/images/placeholder.png" alt="" width="200" height="200">
        <h3 class="fw-light mb-3">Crea</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Erat nam at lectus urna.
        </p>
        <p>
          Cras ornare arcu dui vivamus arcu felis bibendum. Eget sit amet tellus cras adipiscing enim eu turpis.
        </p>
      </div>
    </div> -->
    <!-- Introduction End -->

    <!-- Features Start -->
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.home.features.title"]; ?></h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5 justify-content-center text-center">

      <!-- 1st feature: Board games -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/juegos_de_mesa-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.board-games.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.board-games.description"]; ?></p>
      </div>

      <!-- 2nd feature: RPG -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/rol-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.rpg.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.rpg.description"]; ?></p>
      </div>

      <!-- 3rd feature: Workshops -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/talleres-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.workshops.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.workshops.description"]; ?></p>
      </div>

      <!-- 4th feature: Artists -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/tiendas_artistas_y_artesanos-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.stands.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.stands.description"]; ?></p>
      </div>

      <!-- 5th feature: Talks -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/charlas-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.talks-exhibitions.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.talks-exhibitions.description"]; ?></p>
      </div>

      <!-- 6th feature: Tournaments -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/torneos-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.tournaments.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.tournaments.description"]; ?></p>
      </div>

      <!-- 7th feature: Contests -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/concursos-min.jpg" alt="" width="200" height="200">
        <h3 class="fw-light"><?php echo $lang["lang.home.features.contests.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.contests.description"]; ?></p>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>