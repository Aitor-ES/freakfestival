<header class="navbar navbar-expand-lg sticky-top ff-navbar bg-ffscarlet-gradient-bottom-90" data-bs-theme="dark">
  <nav id="header-nav" class="container-xxl">
    <button id="navbar-toggler-header" class="navbar-toggler p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#header-offcanvas" aria-controls="header-offcanvas" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list" style="font-size: 1.5rem;"></i>
    </button>

    <a id="navbar-brand" class="navbar-brand p-0 mx-auto" href="index.php">
      <img src="/images/logos/Letras_dado.png" id="navbar-brand-logo" class="my-2" alt="Freak Festival" width="40" height="40">
    </a>

    <button id="navbar-toggler-footer" class="navbar-toggler d-lg-none p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#footer-offcanvas" aria-controls="footer-offcanvas" aria-expanded="false" aria-label="Toggle footer">
      <i class="bi bi-three-dots" style="font-size: 1.5rem;"></i>
    </button>

    <div class="offcanvas offcanvas-start bg-ffscarlet d-lg-contents flex-grow-1" tabindex="-1" id="header-offcanvas" aria-labelledby="offcanvas-logo">
      <div class="offcanvas-header text-light px-4 pb-0">
        <a href="index.php">
          <img src="/images/logos/Letras_dado.png" id="offcanvas-logo" alt="Freak Festival" width="60" height="60">
        </a>

        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" data-bs-target="#header-offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body d-lg-contents p-4 pt-0 p-lg-0">
        <hr class="d-lg-none text-white-50">

        <div id="sticky-nav" class="navbar-primary navbar-collapse">
          <ul class="navbar-nav nav-justified flex-grow-1">
            <!-- Inicio -->
            <li class="nav-item">
              <a class="nav-link text-uppercase text-start text-lg-center
              <?php echo $curPageName == "index" ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>" href="index.php">
                <?php echo $lang["lang.header.home"]; ?>
              </a>
            </li>

            <!-- Programa -->
            <li class="nav-item dropdown">
              <a class="nav-link text-uppercase text-start text-lg-center dropdown-toggle
              <?php echo $curPageName == "horario-de-actividades" || $curPageName == "salas" ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>"
              href="#" id="navbarDropdown-program" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.program"]; ?>
              </a>

              <ul class="dropdown-menu rounded-4 p-1" data-bs-theme="light" aria-labelledby="navbarDropdown-program">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".horario-de-actividades"]; ?>.php"><?php echo $lang["lang.header.timetable"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".salas"]; ?>.php"><?php echo $lang["lang.header.maps-of-the-facilities"]; ?></a></li>
              </ul>
            </li>

            <!-- Actividades -->
            <li class="nav-item dropdown">
              <a class="nav-link text-uppercase text-start text-lg-center dropdown-toggle
              <?php echo in_array($curPageName, ["juegos-de-mesa", "torneos", "rol-de-mesa", "rol-en-vivo", "charlas", "presentaciones-de-libros", "talleres", "otros"]) ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>"
              href="#" id="navbarDropdown-activities" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.activities"]; ?>
              </a>

              <ul class="dropdown-menu rounded-4 p-1" data-bs-theme="light" aria-labelledby="navbarDropdown-activities">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".juegos-de-mesa"]; ?>.php"><?php echo $lang["lang.activities.board-games.title"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".torneos"]; ?>.php"><?php echo $lang["lang.activities.tournaments.title"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".rol-de-mesa"]; ?>.php"><?php echo $lang["lang.activities.rpg.title"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".rol-en-vivo"]; ?>.php"><?php echo $lang["lang.activities.larp.title"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".charlas"]; ?>.php"><?php echo $lang["lang.activities.talks-exhibitions.title"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".presentaciones-de-libros"]; ?>.php"><?php echo $lang["lang.activities.book-releases.title"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".talleres"]; ?>.php"><?php echo $lang["lang.activities.workshops.title"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".otras-actividades"]; ?>.php"><?php echo $lang["lang.activities.others.title"]; ?></a></li>
              </ul>
            </li>

            <!-- Concursos -->
            <li class="nav-item">
              <a class="nav-link text-uppercase text-start text-lg-center
              <?php echo $curPageName == "concursos" ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>" href="<?php echo $links[$lang["lang"] . ".concursos"]; ?>.php">
                <?php echo $lang["lang.header.contests"]; ?>
              </a>
            </li>

            <!-- Puestos -->
            <li class="nav-item">
              <a class="nav-link text-uppercase text-start text-lg-center
              <?php echo $curPageName == "puestos" ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>" href="<?php echo $links[$lang["lang"] . ".puestos"]; ?>.php">
                <?php echo $lang["lang.header.stands"]; ?>
              </a>
            </li>

            <!-- Invitados -->
            <li class="nav-item">
              <a class="nav-link text-uppercase text-start text-lg-center
              <?php echo $curPageName == "invitados" ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>" href="<?php echo $links[$lang["lang"] . ".invitados"]; ?>.php">
                <?php echo $lang["lang.header.guests"]; ?>
              </a>
            </li>

            <!-- Más -->
            <li class="nav-item dropdown">
              <a class="nav-link text-uppercase text-start text-lg-center dropdown-toggle
              <?php echo in_array($curPageName, ["donde-dormir", "organizadores", "colaboradores", "rol-en-vivo", "inscripciones-candidaturas"]) || str_contains($curPageName, "edicion") ? "fw-bold active\" aria-current=\"page" : "fw-semibold"; ?>"
              href="#" id="navbarDropdown-more" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.more"]; ?>
              </a>

              <ul class="dropdown-menu dropdown-menu-lg-end rounded-4 p-1" data-bs-theme="light" aria-labelledby="navbarDropdown-more">
                <li><h6 class="dropdown-header"><?php echo $lang["lang.header.info"]; ?></h6></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".donde-dormir"]; ?>.php"><?php echo $lang["lang.header.hotels"]; ?></a></li>

                <li><hr class="dropdown-divider"></li>

                <li><h6 class="dropdown-header"><?php echo $lang["lang.header.about-us"]; ?></h6></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".organizadores"]; ?>.php"><?php echo $lang["lang.header.organizers"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".colaboradores"]; ?>.php"><?php echo $lang["lang.header.partners"]; ?></a></li>

                <!-- <li><hr class="dropdown-divider"></li> -->

                <!-- <li><h6 class="dropdown-header"><?php echo $lang["lang.header.editions.2024"]; ?></h6></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".inscripciones-candidaturas"]; ?>.php"><?php echo $lang["lang.header.activities.registrations-applications"]; ?></a></li> -->

                <li><hr class="dropdown-divider"></li>

                <li><h6 class="dropdown-header"><?php echo $lang["lang.header.photos"]; ?></h6></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".edicion-2024"]; ?>.php"><?php echo $lang["lang.header.editions.2024"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".edicion-2023"]; ?>.php"><?php echo $lang["lang.header.editions.2023"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".edicion-2022"]; ?>.php"><?php echo $lang["lang.header.editions.2022"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".edicion-2018"]; ?>.php"><?php echo $lang["lang.header.editions.2018"]; ?></a></li>
              </ul>
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
              <a class="nav-link text-uppercase fw-semibold" href="/eu/<?php echo $links["eu." . $curPageName]; ?>.php">EU</a>
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