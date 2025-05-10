<header class="navbar navbar-expand-lg sticky-top ff-navbar" data-bs-theme="dark">
  <nav id="header-nav" class="container-xxl">
    <button id="navbar-toggler-header" class="navbar-toggler p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#header-offcanvas" aria-controls="header-offcanvas" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list" style="font-size: 1.5rem;"></i>
    </button>

    <a id="navbar-brand" class="navbar-brand p-0 mx-auto" href="/<?php echo $links[$lang["lang"] . ".index"]; ?>.php">
      <img src="/images/ui/logos/Sin_dado.png" id="navbar-brand-logo" class="my-1 my-lg-2" alt="Freak Festival" width="40" height="40">
    </a>

    <button id="navbar-toggler-footer" class="navbar-toggler d-lg-none p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#footer-offcanvas" aria-controls="footer-offcanvas" aria-expanded="false" aria-label="Toggle footer">
      <i class="bi bi-three-dots" style="font-size: 1.5rem;"></i>
    </button>

    <div class="offcanvas offcanvas-start bg-ffscarlet bg-gradient d-lg-contents flex-grow-1" tabindex="-1" id="header-offcanvas" aria-labelledby="offcanvas-logo">
      <div class="offcanvas-header text-light px-4 pb-0">
        <a href="/<?php echo $links[$lang["lang"] . ".index"]; ?>.php">
          <img src="/images/ui/logos/Letras_dado_fecha_borde.png" id="offcanvas-logo" alt="Freak Festival" width="60" height="60">
        </a>

        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" data-bs-target="#header-offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body d-lg-contents p-4 pt-0 p-lg-0">
        <hr class="d-lg-none text-white-50">

        <div id="sticky-nav" class="navbar-primary navbar-collapse">
          <ul class="navbar-nav nav-justified flex-grow-1">
            <!-- Festival -->
            <li class="nav-item dropdown">
              <a class="nav-link text-uppercase text-start text-lg-center dropdown-toggle
              <?php echo in_array($curPageName, ["index", "photos", "posters", "hotels", "maps", "organizers", "contributors", "inscripciones-candidaturas"])
                ? "fw-bold active\" aria-current=\"page"
                : "fw-semibold"; ?>"
                href="#" id="navbarDropdown-festival" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.festival"]; ?>
              </a>

              <ul class="dropdown-menu" data-bs-theme="light" aria-labelledby="navbarDropdown-festival">
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".index"]; ?>.php"><?php echo $lang["lang.header.home"]; ?></a></li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".photos"]; ?>.php"><?php echo $lang["lang.header.photos"]; ?></a></li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".posters"]; ?>.php"><?php echo $lang["lang.header.posters"]; ?></a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header"><?php echo $lang["lang.header.info"]; ?></h6>
                </li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".hotels"]; ?>.php"><?php echo $lang["lang.header.hotels"]; ?></a></li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".maps"]; ?>.php"><?php echo $lang["lang.header.maps"]; ?></a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header"><?php echo $lang["lang.header.about-us"]; ?></h6>
                </li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".organizers"]; ?>.php"><?php echo $lang["lang.header.organizers"]; ?></a></li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".contributors"]; ?>.php"><?php echo $lang["lang.header.contributors"]; ?></a></li>
                <!-- <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header"><?php echo $lang["lang.header.editions.2025"]; ?></h6>
                </li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".registrations-applications"]; ?>.php"><?php echo $lang["lang.header.activities.registrations-applications"]; ?></a></li> -->
              </ul>
            </li>

            <!-- Program -->
            <li class="nav-item dropdown">
              <a class="nav-link text-uppercase text-start text-lg-center dropdown-toggle
              <?php echo in_array($curPageName, ["activities", "contests", "timetable"]) ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>"
                href="#" id="navbarDropdown-program" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.program"]; ?>
              </a>

              <ul class="dropdown-menu" data-bs-theme="light" aria-labelledby="navbarDropdown-program">
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".activities"]; ?>.php"><?php echo $lang["lang.header.activities"]; ?></a></li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".contests"]; ?>.php"><?php echo $lang["lang.header.contests"]; ?></a></li>
                <li><a class="dropdown-item" href="/<?php echo $links[$lang["lang"] . ".timetable"]; ?>.php"><?php echo $lang["lang.header.timetable"]; ?></a></li>
              </ul>
            </li>

            <!-- Puestos -->
            <li class="nav-item">
              <a class="nav-link text-uppercase text-start text-lg-center
              <?php echo $curPageName == "stands" ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>" href="/<?php echo $links[$lang["lang"] . ".stands"]; ?>.php">
                <?php echo $lang["lang.header.stands"]; ?>
              </a>
            </li>

            <!-- Invitados -->
            <li class="nav-item">
              <a class="nav-link text-uppercase text-start text-lg-center
              <?php echo $curPageName == "guests" ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>" href="/<?php echo $links[$lang["lang"] . ".guests"]; ?>.php">
                <?php echo $lang["lang.header.guests"]; ?>
              </a>
            </li>
          </ul>
        </div>

        <hr class="d-lg-none text-white-50">

        <!-- Language -->
        <div id="navbar-lang" class="navbar-secondary navbar-collapse">
          <ul class="navbar-nav flex-row flex-nowrap">
            <!-- ES -->
            <li class="nav-item d-flex align-items-center">
              <a class="nav-link text-uppercase fw-semibold" href="/<?php echo $links["es." . $curPageName]; ?>.php">ES</a>
            </li>

            <!-- EU -->
            <li class="nav-item d-flex align-items-center">
              <a class="nav-link text-uppercase fw-semibold" href="/<?php echo $links["eu." . $curPageName]; ?>.php">EU</a>
            </li>
          </ul>
        </div>

        <hr class="d-lg-none text-white-50">

        <!-- Social -->
        <div id="navbar-social" class="navbar-secondary navbar-collapse">
          <ul class="navbar-nav flex-row flex-wrap column-gap-lg-3">
            <li class="nav-item col-6 col-lg-auto">
              <a class="nav-link" href="mailto:info@freakfestival.es" target="_blank">
                <i class="bi bi-envelope-fill"></i>
                <small class="d-lg-none ms-2"><?php echo $lang["lang.header.social.mail"]; ?></small>
              </a>
            </li>

            <li class="nav-item col-6 col-lg-auto">
              <a class="nav-link" href="https://www.instagram.com/asovalinor" target="_blank">
                <i class="bi bi-instagram"></i>
                <small class="d-lg-none ms-2">Instagram</small>
              </a>
            </li>

            <li class="nav-item col-6 col-lg-auto">
              <a class="nav-link" href="https://www.facebook.com/asociacionvalinor" target="_blank">
                <i class="bi bi-facebook"></i>
                <small class="d-lg-none ms-2">Facebook</small>
              </a>
            </li>

            <li class="nav-item col-6 col-lg-auto">
              <a class="nav-link" href="https://twitter.com/AsoValinor" target="_blank">
                <i class="bi bi-twitter-x"></i>
                <small class="d-lg-none ms-2">X</small>
              </a>
            </li>

            <li class="nav-item col-6 col-lg-auto">
              <a class="nav-link" href="https://www.discord.com/invite/w4DQ2kZ9TV" target="_blank">
                <i class="bi bi-discord"></i>
                <small class="d-lg-none ms-2">Discord</small>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>