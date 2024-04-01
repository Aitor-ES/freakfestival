<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Banner Start -->
  <div class="container-fluid ff-main-gutter d-flex flex-column align-items-center text-center mb-5 py-5" id="banner">
    <h1 class="mb-5">
      <img class="banner-logo" src="/images/logos/Letras_dado_tabla2.png" alt="Freak Festival" width="auto" height="300">
    </h1>

    <div class="banner-box row row-cols-1 row-cols-md-4">
      <!-- Date -->
      <div class="banner-box-item col d-flex flex-row flex-lg-column py-4 bg-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-calendar-event fs-1 text-ffscarlet"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <strong><?php echo $lang["lang.home.banner.date.2024"]; ?></strong>
          <br>
          <?php echo $lang["lang.home.banner.year.2024"]; ?>
        </div>
      </div>

      <!-- Location -->
      <div class="banner-box-item col d-flex flex-row flex-lg-column py-4 bg-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-geo fs-1 text-ffscarlet"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <strong><?php echo $lang["lang.home.banner.location.building"]; ?></strong>
          <br>
          <?php echo $lang["lang.home.banner.location.town"]; ?>
        </div>
      </div>

      <!-- Activities -->
      <div class="banner-box-item col d-flex flex-row flex-lg-column py-4 bg-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-dice-6 fs-1 text-ffscarlet"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <?php echo $lang["lang.home.banner.activities"]; ?>
        </div>
      </div>

      <!-- Entrance -->
      <div class="banner-box-item col d-flex flex-row flex-lg-column py-4 bg-ffscarlet text-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-ticket-perforated fs-1"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <span class="fs-4"><?php echo $lang["lang.home.banner.entrance"]; ?></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <div class="container-md ff-main-gutter mb-5">
    <!-- Introduction Start -->
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.home.introduction.title"]; ?></h1>

    <div class="row mb-5">
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
            <div class="mb-2"><i class="bi bi-calendar-event fs-1 text-ffscarlet"></i></div>
            <h3><?php echo $lang["lang.home.introduction.date.title"]; ?></h3>
            <p>
              <?php echo $lang["lang.home.introduction.date.days.2024"]; ?>
              <!-- <br> -->
              <!-- <?php echo $lang["lang.home.introduction.date.weekdays.saturday"]; ?> -->
              <!-- <br> -->
              <!-- <?php echo $lang["lang.home.introduction.date.weekdays.sunday"]; ?> -->
            </p>
          </div>

          <!-- Location -->
          <div class="col-12 col-sm-4 px-3">
            <div class="mb-2"><i class="bi bi-geo fs-1 text-ffscarlet"></i></div>
            <h3><?php echo $lang["lang.home.introduction.location.title"]; ?></h3>
            <p>
              <?php echo $lang["lang.home.introduction.location.building"]; ?>
              <br>
              <?php echo $lang["lang.home.introduction.location.address"]; ?>
              <br>
              <?php echo $lang["lang.home.introduction.location.town"]; ?>
              <br>
              <a class="link-ffscarlet" href="https://goo.gl/maps/KvYQ6pMJYgf7cYjq5"><?php echo $lang["lang.home.introduction.location.map"]; ?></a>
            </p>
          </div>

          <!-- Entrance -->
          <div class="col-12 col-sm-4 px-3">
            <div class="mb-2"><i class="bi bi-box-arrow-in-right fs-1 text-ffscarlet"></i></div>
            <h3><?php echo $lang["lang.home.introduction.entrance.title"]; ?></h3>
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
    <h2 class="f-uncial-r mb-5"><?php echo $lang["lang.home.features.title"]; ?></h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5 justify-content-center text-center">

      <!-- 1st feature: Board games -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/juegos_de_mesa-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.board-games.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.board-games.description"]; ?></p>
      </div>

      <!-- 2nd feature: RPG -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/rol-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.rpg.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.rpg.description"]; ?></p>
      </div>

      <!-- 3rd feature: Workshops -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/talleres-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.workshops.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.workshops.description"]; ?></p>
      </div>

      <!-- 4th feature: Artists -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/tiendas_artistas_y_artesanos-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.stands.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.stands.description"]; ?></p>
      </div>

      <!-- 5th feature: Talks -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/charlas-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.talks-exhibitions.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.talks-exhibitions.description"]; ?></p>
      </div>

      <!-- 6th feature: Book releases -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/presentaciones_de_libros-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.book-releases.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.book-releases.description"]; ?></p>
      </div>

      <!-- 7th feature: Tournaments -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/torneos-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.tournaments.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.tournaments.description"]; ?></p>
      </div>

      <!-- 8th feature: Contests -->
      <div class="col px-4">
        <img class="rounded-circle mb-4" src="/images/photos/concursos-min.jpg" alt="" width="200" height="200">
        <h3><?php echo $lang["lang.home.features.contests.title"]; ?></h3>
        <p><?php echo $lang["lang.home.features.contests.description"]; ?></p>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>