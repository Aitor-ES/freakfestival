<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main>
    <!-- Banner Start -->
    <div class="mb-5 py-5" id="banner">
      <div class="container-xxl ff-gutter d-flex flex-column align-items-center text-center row-gap-5">
        <img class="banner-logo" src="/images/ui/logos/Letras_dado_fecha.png" alt="Freak Festival" width="250" height="200">

        <div class="banner-box row row-cols-1 row-cols-md-4">
          <!-- Date -->
          <div class="banner-box-item col d-flex flex-row flex-md-column align-items-center py-4 row-gap-2 bg-light">
            <div class="mx-4"><i class="bi bi-calendar-event fs-1 text-ffscarlet"></i></div>
            <div class="flex-fill d-flex flex-column justify-content-center">
              <strong><?php echo $lang["lang.home.banner.date.2024"]; ?></strong>
              <?php echo $lang["lang.home.banner.year.2024"]; ?>
            </div>
          </div>

          <!-- Location -->
          <div class="banner-box-item col d-flex flex-row flex-md-column align-items-center py-4 row-gap-2 bg-light">
            <div class="mx-4"><i class="bi bi-geo fs-1 text-ffscarlet"></i></div>
            <div class="flex-fill d-flex flex-column justify-content-center">
              <strong><?php echo $lang["lang.home.banner.location.building"]; ?></strong>
              <?php echo $lang["lang.home.banner.location.town"]; ?>
            </div>
          </div>

          <!-- Activities -->
          <div class="banner-box-item col d-flex flex-row flex-md-column align-items-center py-4 row-gap-2 bg-light">
            <div class="mx-4"><i class="bi bi-dice-6 fs-1 text-ffscarlet"></i></div>
            <div class="flex-fill d-flex flex-column justify-content-center">
              <?php echo $lang["lang.home.banner.activities"]; ?>
            </div>
          </div>

          <!-- Entrance -->
          <div class="banner-box-item col d-flex flex-row flex-md-column align-items-center py-4 row-gap-2 bg-ffscarlet text-light">
            <div class="mx-4"><i class="bi bi-ticket-perforated fs-1"></i></div>
            <div class="flex-fill d-flex flex-column justify-content-center">
              <span class="fs-4"><?php echo $lang["lang.home.banner.entrance"]; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    <!-- Introduction Start -->
    <div class="container-xxl ff-gutter mb-5">
      <div class="col-md-8 mx-auto text-center">
        <h1 class="f-uncial-antiqua ff-intro-title mb-5"><?php echo $lang["lang.home.introduction.title"]; ?></h1>

        <p><?php echo $lang["lang.home.introduction.paragraph.1"]; ?></p>
        <p><?php echo $lang["lang.home.introduction.paragraph.2"]; ?></p>
        <p><?php echo $lang["lang.home.introduction.paragraph.3"]; ?></p>
      </div>
    </div>
    <!-- Introduction End -->

    <!-- Info Start -->
    <div class="container-md ff-gutter mb-5">
      <!-- Features Start -->
      <div class="mb-5">
        <h2 class="ff-title"><?php echo $lang["lang.home.features.title"]; ?></h2>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center g-5 mb-5">
        <!-- Public -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-people fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.features.public.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.public.description"]; ?></p>
        </div>

        <!-- Local -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-bag-heart fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.features.local.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.local.description"]; ?></p>
        </div>

        <!-- Entrance -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-ticket-perforated fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.features.entrance.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.entrance.description"]; ?></p>
        </div>

        <!-- Date -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-calendar-event fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.features.date.title"]; ?></h3>
          <p>
            <?php echo $lang["lang.home.features.date.days.2024"]; ?>
            <br>
            <?php echo $lang["lang.home.features.date.weekdays.friday"]; ?>
            <br>
            <?php echo $lang["lang.home.features.date.weekdays.saturday"]; ?>
            <br>
            <?php echo $lang["lang.home.features.date.weekdays.sunday"]; ?>
          </p>
          <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".horario-de-actividades"]; ?>.php">
            <?php echo $lang["lang.home.features.date.timetable"]; ?>
            <i class="bi bi-chevron-right ms-1"></i>
          </a>
        </div>

        <!-- Location -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-geo fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.features.location.title"]; ?></h3>
          <p>
            <?php echo $lang["lang.home.features.location.building"]; ?>
            <br>
            <?php echo $lang["lang.home.features.location.address"]; ?>
            <br>
            <?php echo $lang["lang.home.features.location.town"]; ?>
          </p>
          <a class="btn btn-outline-ffscarlet rounded-pill" href="https://goo.gl/maps/KvYQ6pMJYgf7cYjq5" target="_blank">
            <?php echo $lang["lang.home.features.location.map"]; ?>
            <i class="bi bi-chevron-right ms-1"></i>
          </a>
        </div>

        <!-- Hotels -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-moon-stars fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.features.hotels.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.hotels.description"]; ?></p>
          <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".donde-dormir"]; ?>.php">
            <?php echo $lang["lang.home.features.hotels.link"]; ?>
            <i class="bi bi-chevron-right ms-1"></i>
          </a>
        </div>
      </div>
      <!-- Features End -->

      <!-- Activities Start -->
      <div class="mb-5">
        <h2 class="ff-title"><?php echo $lang["lang.home.activities.title"]; ?></h2>
      </div>

      <div class="row row-cols-1 row-cols-lg-2 g-5 mb-5">
        <!-- 1st activity: Board games -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/juegos_de_mesa-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.board-games.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.board-games.description"]; ?></p>
            </div>
          </div>
        </div>

        <!-- 2nd activity: RPG -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/rol-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.rpg.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.rpg.description"]; ?></p>
            </div>
          </div>
        </div>

        <!-- 3rd activity: LARP -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/larp-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.larp.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.larp.description"]; ?></p>
            </div>
          </div>
        </div>

        <!-- 4th activity: Workshops -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/talleres-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.workshops.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.workshops.description"]; ?></p>
            </div>
          </div>
        </div>

        <!-- 5th activity: Artists -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/tiendas_artistas_y_artesanos-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.stands.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.stands.description"]; ?></p>
            </div>
          </div>
        </div>

        <!-- 6th activity: Talks -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/charlas-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.talks-exhibitions.description"]; ?></p>
            </div>
          </div>
        </div>

        <!-- 7th activity: Book releases -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/presentaciones_de_libros-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.book-releases.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.book-releases.description"]; ?></p>
            </div>
          </div>
        </div>

        <!-- 8th activity: Contests -->
        <div class="col">
          <div class="d-flex flex-column flex-sm-row row-gap-4 column-gap-5">
            <div class="text-center">
              <img class="rounded-circle" src="/images/ui/torneos-min.jpg" alt="" width="200" height="200">
            </div>

            <div>
              <h3 class="mb-3"><?php echo $lang["lang.activities.contests.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.contests.description"]; ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="d-grid gap-4 d-lg-flex justify-content-lg-evenly mb-5">
        <a class="btn btn-ffscarlet btn-lg bg-gradient rounded-pill" href="<?php echo $links[$lang["lang"] . ".activities"]; ?>.php">
          <?php echo $lang["lang.home.activities.activities.link"]; ?>
          <i class="bi bi-chevron-right ms-1"></i>
        </a>

        <a class="btn btn-ffscarlet btn-lg bg-gradient rounded-pill" href="<?php echo $links[$lang["lang"] . ".contests"]; ?>.php">
          <?php echo $lang["lang.home.activities.contests.link"]; ?>
          <i class="bi bi-chevron-right ms-1"></i>
        </a>

        <a class="btn btn-ffscarlet btn-lg bg-gradient rounded-pill" href="<?php echo $links[$lang["lang"] . ".stands"]; ?>.php">
          <?php echo $lang["lang.home.activities.stands.link"]; ?>
          <i class="bi bi-chevron-right ms-1"></i>
        </a>
      </div>
      <!-- Activities End -->
    </div>
    <!-- Info End -->
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>