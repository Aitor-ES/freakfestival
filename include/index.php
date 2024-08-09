<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main>
    <!-- Banner Start -->
    <div class="mb-5 py-5" id="banner">
      <div class="container-xxl ff-gutter d-flex flex-column align-items-center text-center row-gap-5">
        <img class="banner-logo" src="/images/logos/Letras_dado_fecha.png" alt="Freak Festival" width="250" height="200">

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
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white bg-ffscarlet bg-gradient fs-2 mb-3">
            <i class="bi bi-people"></i>
          </div>
          <h3 class="mb-4"><?php echo $lang["lang.home.features.public.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.public.description"]; ?></p>
        </div>

        <!-- Local -->
        <div class="col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white bg-ffscarlet bg-gradient fs-2 mb-3">
            <i class="bi bi-bag-heart"></i>
          </div>
          <h3 class="mb-4"><?php echo $lang["lang.home.features.local.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.local.description"]; ?></p>
        </div>

        <!-- Entrance -->
        <div class="col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white bg-ffscarlet bg-gradient fs-2 mb-3">
            <i class="bi bi-ticket-perforated"></i>
          </div>
          <h3 class="mb-4"><?php echo $lang["lang.home.features.entrance.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.entrance.description"]; ?></p>
        </div>

        <!-- Date -->
        <div class="col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white bg-ffscarlet bg-gradient fs-2 mb-3">
            <i class="bi bi-calendar-event"></i>
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
            <i class="bi bi-chevron-right"></i>
          </a>
        </div>

        <!-- Location -->
        <div class="col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white bg-ffscarlet bg-gradient fs-2 mb-3">
            <i class="bi bi-geo"></i>
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
            <i class="bi bi-chevron-right"></i>
          </a>
        </div>

        <!-- Hotels -->
        <div class="col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-white bg-ffscarlet bg-gradient fs-2 mb-3">
            <i class="bi bi-moon-stars"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.features.hotels.title"]; ?></h3>
          <p><?php echo $lang["lang.home.features.hotels.description"]; ?></p>
          <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".donde-dormir"]; ?>.php">
            <?php echo $lang["lang.home.features.hotels.link"]; ?>
            <i class="bi bi-chevron-right"></i>
          </a>
        </div>
      </div>
      <!-- Features End -->

      <!-- Activities Start -->
      <div class="mb-5">
        <h2 class="ff-title"><?php echo $lang["lang.home.activities.title"]; ?></h2>
      </div>

      <div class="row row-cols-1 row-cols-lg-2 g-5">
        <!-- 1st activity: Board games -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/juegos_de_mesa-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.board-games.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.board-games.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".juegos-de-mesa"]; ?>.php">
                <?php echo $lang["lang.home.activities.board-games.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 2nd activity: RPG -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/rol-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.rpg.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.rpg.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".rol-de-mesa"]; ?>.php">
                <?php echo $lang["lang.home.activities.rpg.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 3rd activity: LARP -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/larp-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.larp.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.larp.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".rol-en-vivo"]; ?>.php">
                <?php echo $lang["lang.home.activities.larp.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 4th activity: Workshops -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/talleres-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.workshops.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.workshops.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".talleres"]; ?>.php">
                <?php echo $lang["lang.home.activities.workshops.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 5th activity: Artists -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/tiendas_artistas_y_artesanos-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.stands.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.stands.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".puestos"]; ?>.php">
                <?php echo $lang["lang.home.activities.stands.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 6th activity: Talks -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/charlas-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.talks-exhibitions.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".charlas"]; ?>.php">
                <?php echo $lang["lang.home.activities.talks-exhibitions.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 7th activity: Book releases -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/presentaciones_de_libros-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.book-releases.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.book-releases.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".presentaciones-de-libros"]; ?>.php">
                <?php echo $lang["lang.home.activities.book-releases.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 8th activity: Tournaments -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/torneos-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.tournaments.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.tournaments.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".torneos"]; ?>.php">
                <?php echo $lang["lang.home.activities.tournaments.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 9th activity: Contests -->
        <div class="col">
          <div class="row gy-4 gx-5">
            <div class="col-12 col-sm-auto d-flex justify-content-center">
              <img class="rounded-circle" src="/images/photos/concursos-min.jpg" alt="" width="200" height="200">
            </div>

            <div class="col">
              <h3 class="mb-3"><?php echo $lang["lang.activities.contests.title"]; ?></h3>
              <p><?php echo $lang["lang.activities.contests.description"]; ?></p>
              <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $links[$lang["lang"] . ".concursos"]; ?>.php">
                <?php echo $lang["lang.home.activities.contests.link"]; ?>
                <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
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