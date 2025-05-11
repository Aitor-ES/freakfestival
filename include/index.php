<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main>
    <!-- Banner Start -->
    <div class="mb-5 py-5" id="banner">
      <div class="container-md ff-gutter d-flex flex-column row-gap-5">
        <div class="row g-5">
          <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
            <img class="banner-logo" src="/images/ui/logos/Letras_dado_fecha_borde.png" alt="Freak Festival" width="200"
              height="200">
          </div>

          <div class="col-12 col-lg-8 d-flex flex-column align-items-start">
            <p
              class="d-inline-flex flex-column flex-md-row row-gap-2 column-gap-1 text-uppercase text-ffsunlight fw-semibold ff-text-shadow fs-5 mb-4">
              <span><?php echo $lang["lang.home.banner.date"]; ?></span>
              <span class="d-none d-md-inline">-</span>
              <span><?php echo $lang["lang.home.banner.location"]; ?></span>
            </p>
            <h1 class="ff-intro-title text-white text-white ff-text-shadow mb-5">
              <?php echo $lang["lang.home.banner.title"]; ?>
            </h1>
            <ul class="list-unstyled text-white ff-text-shadow fs-5 mb-5">
              <li class="mb-3">
                <i class="bi bi-diamond me-2"></i><?php echo $lang["lang.home.banner.paragraph.1"]; ?>
              </li>
              <li class="mb-3">
                <i class="bi bi-diamond me-2"></i><?php echo $lang["lang.home.banner.paragraph.2"]; ?>
              </li>
              <li>
                <i class="bi bi-diamond me-2"></i><?php echo $lang["lang.home.banner.paragraph.3"]; ?>
              </li>
            </ul>
            <div class="row row-cols-auto g-4">
              <div class="col">
                <p
                  class="rounded-pill border border-3 border-ffsunlight text-ffsunlight text-uppercase fw-semibold ff-text-shadow fs-5 py-3 px-4">
                  <?php echo $lang["lang.home.banner.entrance"]; ?>
                </p>
              </div>
              <div class="col">
                <a class="btn btn-lg btn-ffsunlight rounded-pill border-3 text-uppercase fw-semibold py-3 px-4"
                  href="https://forms.gle/Z7N7NZj59DWfs2VU6" target="_blank">
                  <?php echo $lang["lang.home.banner.contribute"]; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    <!-- Features Start -->
    <div class="container-md ff-gutter text-center mb-5">
      <div class="mb-5">
        <h1 class="ff-intro-title"><?php echo $lang["lang.home.features.title"]; ?></h1>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-5">
        <!-- Activities -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <i class="bi bi-dice-5 fs-1 text-ffscarlet"></i>
            <h3 class="mb-3"><?php echo $lang["lang.home.features.activities.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.activities.description"]; ?></p>
            <a class="btn btn-outline-ffscarlet rounded-pill"
              href="/<?php echo $links[$lang["lang"] . ".activities"]; ?>.php">
              <?php echo $lang["lang.home.features.activities.link"]; ?>
              <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Contests -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <i class="bi bi-brush fs-1 text-ffscarlet"></i>
            <h3 class="mb-3"><?php echo $lang["lang.home.features.contests.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.contests.description"]; ?></p>
            <a class="btn btn-outline-ffscarlet rounded-pill"
              href="/<?php echo $links[$lang["lang"] . ".contests"]; ?>.php">
              <?php echo $lang["lang.home.features.contests.link"]; ?>
              <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Stands -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <i class="bi bi-bag-heart fs-1 text-ffscarlet"></i>
            <h3 class="mb-3"><?php echo $lang["lang.home.features.stands.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.stands.description"]; ?></p>
            <a class="btn btn-outline-ffscarlet rounded-pill"
              href="/<?php echo $links[$lang["lang"] . ".stands"]; ?>.php">
              <?php echo $lang["lang.home.features.stands.link"]; ?>
              <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Guests -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <i class="bi bi-star fs-1 text-ffscarlet"></i>
            <h3 class="mb-3"><?php echo $lang["lang.home.features.guests.title"]; ?></h3>
            <p><?php echo $lang["lang.home.features.guests.description"]; ?></p>
            <a class="btn btn-outline-ffscarlet rounded-pill"
              href="/<?php echo $links[$lang["lang"] . ".guests"]; ?>.php">
              <?php echo $lang["lang.home.features.guests.link"]; ?>
              <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Info Start -->
    <div class="container-md ff-gutter text-center mb-5">
      <div class="mb-5">
        <h2 class="ff-title"><?php echo $lang["lang.home.info.title"]; ?></h2>
      </div>

      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-5">
        <!-- Timetable -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <h3 class="mb-3"><?php echo $lang["lang.home.info.date.weekdays.friday"]; ?></h3>
            <p class="text-ffscarlet mb-0">
              <strong><?php echo $lang["lang.home.info.date.weekdays.friday.timetable"]; ?></strong>
            </p>
          </div>
        </div>

        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <h3 class="mb-3"><?php echo $lang["lang.home.info.date.weekdays.saturday"]; ?></h3>
            <p class="text-ffscarlet mb-0">
              <strong><?php echo $lang["lang.home.info.date.weekdays.saturday.timetable"]; ?></strong>
            </p>
          </div>
        </div>

        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <h3 class="mb-3"><?php echo $lang["lang.home.info.date.weekdays.sunday"]; ?></h3>
            <p class="text-ffscarlet mb-0">
              <strong><?php echo $lang["lang.home.info.date.weekdays.sunday.timetable"]; ?></strong>
            </p>
          </div>
        </div>

        <!-- Location -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <i class="bi bi-geo fs-1 text-ffscarlet"></i>
            <h3 class="mb-3"><?php echo $lang["lang.home.info.location.title"]; ?></h3>
            <p>
              <?php echo $lang["lang.home.info.location.building"]; ?>
              <br>
              <?php echo $lang["lang.home.info.location.address"]; ?>
              <br>
              <?php echo $lang["lang.home.info.location.town"]; ?>
            </p>
            <a class="btn btn-outline-ffscarlet rounded-pill" href="https://goo.gl/maps/KvYQ6pMJYgf7cYjq5"
              target="_blank">
              <?php echo $lang["lang.home.info.location.map"]; ?>
              <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Food -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <i class="bi bi-fork-knife fs-1 text-ffscarlet"></i>
            <h3 class="mb-3"><?php echo $lang["lang.home.info.food.title"]; ?></h3>
            <p><?php echo $lang["lang.home.info.food.description"]; ?></p>
            <a class="btn btn-outline-ffscarlet rounded-pill" href="/<?php echo $links[$lang["lang"] . ".maps"]; ?>.php">
              <?php echo $lang["lang.home.info.food.link"]; ?>
              <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Hotels -->
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <i class="bi bi-moon-stars fs-1 text-ffscarlet"></i>
            <h3 class="mb-3"><?php echo $lang["lang.home.info.hotels.title"]; ?></h3>
            <p><?php echo $lang["lang.home.info.hotels.description"]; ?></p>
            <a class="btn btn-outline-ffscarlet rounded-pill"
              href="/<?php echo $links[$lang["lang"] . ".hotels"]; ?>.php">
              <?php echo $lang["lang.home.info.hotels.link"]; ?>
              <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Info End -->

    <!-- Values Start -->
    <div class="container-md ff-gutter mb-5">
      <div class="mb-5">
        <h2 class="ff-title"><?php echo $lang["lang.home.values.title"]; ?></h2>
      </div>

      <div class="row row-cols-1 row-cols-md-3 justify-content-center g-5 mb-5">
        <!-- Public -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-people fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.values.public.title"]; ?></h3>
          <p><?php echo $lang["lang.home.values.public.description"]; ?></p>
        </div>

        <!-- Local -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-bag-heart fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.values.local.title"]; ?></h3>
          <p><?php echo $lang["lang.home.values.local.description"]; ?></p>
        </div>

        <!-- Entrance -->
        <div class="col">
          <div class="feature-icon text-ffscarlet bg-ffscarlet-10 bg-gradient mb-4">
            <i class="bi bi-ticket-perforated fs-2"></i>
          </div>
          <h3 class="mb-3"><?php echo $lang["lang.home.values.entrance.title"]; ?></h3>
          <p><?php echo $lang["lang.home.values.entrance.description"]; ?></p>
        </div>
      </div>
    </div>
    <!-- Values End -->

    <!-- Activities Start -->
    <div class="container-md ff-gutter mb-5">
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
              <img class="rounded-circle" src="/images/ui/tiendas_artistas_y_artesanos-min.jpg" alt="" width="200"
                height="200">
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
              <img class="rounded-circle" src="/images/ui/presentaciones_de_libros-min.jpg" alt="" width="200"
                height="200">
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
    </div>
    <!-- Activities End -->

    <!-- FAQ Start -->
    <div class="container-md ff-gutter mb-5">
      <div class="mb-5">
        <h2 class="ff-title"><?php echo $lang["lang.activities.faq.title"]; ?></h2>
      </div>

      <div class="accordion accordion-flush" id="accordion-faq">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-faq-registration" aria-expanded="false"
              aria-controls="collapse-faq-registration">
              <?php echo $lang["lang.activities.faq.registration.question"]; ?>
            </button>
          </h2>
          <div id="collapse-faq-registration" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="alert alert-ffglacier mb-0" role="alert">
                <p><?php echo $lang["lang.activities.faq.registration.answer.details"]; ?></p>
                <ul>
                  <li><?php echo $lang["lang.activities.faq.registration.answer.details.friday"]; ?></li>
                  <li><?php echo $lang["lang.activities.faq.registration.answer.details.saturday.morning"]; ?></li>
                  <li><?php echo $lang["lang.activities.faq.registration.answer.details.saturday.afternoon"]; ?></li>
                  <li><?php echo $lang["lang.activities.faq.registration.answer.details.sunday"]; ?></li>
                </ul>
                <p class="mb-0"><?php echo $lang["lang.activities.faq.registration.answer.open"]; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-faq-children" aria-expanded="false" aria-controls="collapse-faq-children">
              <?php echo $lang["lang.activities.faq.children.question"]; ?>
            </button>
          </h2>
          <div id="collapse-faq-children" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="alert alert-ffglacier mb-0" role="alert">
                <?php echo $lang["lang.activities.faq.children.answer"]; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-faq-rpg" aria-expanded="false" aria-controls="collapse-faq-rpg">
              <?php echo $lang["lang.activities.faq.rpg.question"]; ?>
            </button>
          </h2>
          <div id="collapse-faq-rpg" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="alert alert-ffglacier mb-0" role="alert">
                <?php echo $lang["lang.activities.faq.rpg.answer"]; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQ End -->
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>