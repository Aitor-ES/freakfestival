<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Banner Start -->
  <div class="container-fluid ff-main-gutter d-flex flex-column align-items-center text-center mb-5 py-5 row-gap-5" id="banner">
    <img class="banner-logo" src="/images/logos/Letras_dado_fecha.png" alt="Freak Festival" width="auto" height="240">

    <div class="banner-box row row-cols-1 row-cols-md-4">
      <!-- Date -->
      <div class="banner-box-item col d-flex flex-row flex-md-column py-4 bg-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-calendar-event fs-1 text-ffscarlet"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <strong><?php echo $lang["lang.home.banner.date.2024"]; ?></strong>
          <?php echo $lang["lang.home.banner.year.2024"]; ?>
        </div>
      </div>

      <!-- Location -->
      <div class="banner-box-item col d-flex flex-row flex-md-column py-4 bg-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-geo fs-1 text-ffscarlet"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <strong><?php echo $lang["lang.home.banner.location.building"]; ?></strong>
          <?php echo $lang["lang.home.banner.location.town"]; ?>
        </div>
      </div>

      <!-- Activities -->
      <div class="banner-box-item col d-flex flex-row flex-md-column py-4 bg-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-dice-6 fs-1 text-ffscarlet"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <?php echo $lang["lang.home.banner.activities"]; ?>
        </div>
      </div>

      <!-- Entrance -->
      <div class="banner-box-item col d-flex flex-row flex-md-column py-4 bg-ffscarlet text-light">
        <div class="mx-4 mb-md-2"><i class="bi bi-ticket-perforated fs-1"></i></div>
        <div class="flex-fill d-flex flex-column justify-content-center">
          <span class="fs-4"><?php echo $lang["lang.home.banner.entrance"]; ?></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <div class="container-md ff-main-gutter mb-5">
    <h1 class="f-uncial-r fs-0 text-center mb-5"><?php echo $lang["lang.home.introduction.title"]; ?></h1>

    <!-- Introduction Start -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-12 col-lg-8">
        <p><?php echo $lang["lang.home.introduction.paragraph.1"]; ?></p>
        <p><?php echo $lang["lang.home.introduction.paragraph.2"]; ?></p>
        <p><?php echo $lang["lang.home.introduction.paragraph.3"]; ?></p>
        <p class="text-uppercase"><?php echo $lang["lang.home.introduction.paragraph.4"]; ?></p>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center g-5 mb-5">
      <!-- Public -->
      <div class="col">
        <div class="mb-2"><i class="bi bi-people fs-1 text-ffscarlet"></i></div>
        <h3 class="mb-4"><?php echo $lang["lang.home.introduction.public.title"]; ?></h3>
        <p><?php echo $lang["lang.home.introduction.public.description"]; ?></p>
      </div>

      <!-- Local -->
      <div class="col">
        <div class="mb-2"><i class="bi bi-bag-heart fs-1 text-ffscarlet"></i></div>
        <h3 class="mb-4"><?php echo $lang["lang.home.introduction.local.title"]; ?></h3>
        <p><?php echo $lang["lang.home.introduction.local.description"]; ?></p>
      </div>

      <!-- Entrance -->
      <div class="col">
        <div class="mb-2"><i class="bi bi-ticket-perforated fs-1 text-ffscarlet"></i></div>
        <h3 class="mb-4"><?php echo $lang["lang.home.introduction.entrance.title"]; ?></h3>
        <p><?php echo $lang["lang.home.introduction.entrance.description"]; ?></p>
      </div>

      <!-- Date -->
      <div class="col">
        <div class="mb-2"><i class="bi bi-calendar-event fs-1 text-ffscarlet"></i></div>
        <h3 class="mb-3"><?php echo $lang["lang.home.introduction.date.title"]; ?></h3>
        <p>
          <?php echo $lang["lang.home.introduction.date.days.2024"]; ?>
          <br>
          <?php echo $lang["lang.home.introduction.date.weekdays.friday"]; ?>
          <br>
          <?php echo $lang["lang.home.introduction.date.weekdays.saturday"]; ?>
          <br>
          <?php echo $lang["lang.home.introduction.date.weekdays.sunday"]; ?>
        </p>
      </div>

      <!-- Location -->
      <div class="col">
        <div class="mb-2"><i class="bi bi-geo fs-1 text-ffscarlet"></i></div>
        <h3 class="mb-3"><?php echo $lang["lang.home.introduction.location.title"]; ?></h3>
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
    </div>
    <!-- Introduction End -->

    <!-- Features Start -->
    <h1 class="f-uncial-r text-start text-lg-center mb-5"><?php echo $lang["lang.home.features.title"]; ?></h1>

    <div class="row row-cols-1 row-cols-lg-2 justify-content-center g-5">
      <!-- 1st feature: Board games -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/juegos_de_mesa-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.board-games.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.board-games.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- 2nd feature: RPG -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/rol-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.rpg.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.rpg.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- 3rd feature: Workshops -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/talleres-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.workshops.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.workshops.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- 4th feature: Artists -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/tiendas_artistas_y_artesanos-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.stands.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.stands.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- 5th feature: Talks -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/charlas-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.talks-exhibitions.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.talks-exhibitions.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- 6th feature: Book releases -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/presentaciones_de_libros-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.book-releases.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.book-releases.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- 7th feature: Tournaments -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/torneos-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.tournaments.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.tournaments.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- 8th feature: Contests -->
      <div class="col">
        <div class="row gy-4 gx-5">
          <div class="col-12 col-sm-auto d-flex justify-content-center">
            <img class="rounded-circle" src="/images/photos/concursos-min.jpg" alt="" width="200" height="200">
          </div>

          <div class="col">
            <h3 class="mb-3"><?php echo $lang["lang.home.features.contests.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.contests.description"]; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>