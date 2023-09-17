<header class="navbar navbar-expand-lg sticky-top flex-wrap ff-navbar" data-bs-theme="dark">
  <nav class="container-xxl">
    <button id="nav-toggler" class="navbar-toggler p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list" style="font-size: 2rem;"></i>
    </button>
    <a id="nav-logo" class="navbar-brand mx-auto mx-lg-0" href="index.php">
      <img src="/images/logos/Letras_dado_tabla2.png" class="navbar-logo" alt="Freak Festival" width="40" height="40">
    </a>
    <div class="offcanvas offcanvas-start bg-ffmidnight d-lg-contents" tabindex="-1" id="navbarOffcanvas" aria-labelledby="offcanvasTitle">
      <div class="offcanvas-header text-light px-4 pb-0">
        <img src="/images/logos/Letras_dado_tabla2.png" id="offcanvasTitle" alt="Freak Festival" width="60" height="60">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" data-bs-target="#navbarOffcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-lg-contents p-4 pt-0 p-lg-0">
        <hr class="d-lg-none text-white-50">
        <div id="nav-links-start" class="navbar-collapse">
          <ul class="navbar-nav justify-content-lg-evenly align-items-lg-center w-100">
            <!-- Inicio -->
            <li class="nav-item">
              <a class="nav-link fw-bold text-uppercase text-lg-center
              <?php if ($curPageName == "index") echo "active\" aria-current=\"page"; ?>" href="index.php">
                <?php echo $lang["lang.header.home"]; ?>
              </a>
            </li>
            <!-- Programa -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "horario" || $curPageName == "mapas-recinto") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-program" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.program"]; ?>
              </a>
              <ul class="dropdown-menu rounded-4 p-1" data-bs-theme="light" aria-labelledby="navbarDropdown-program">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".horario"]; ?>.php"><?php echo $lang["lang.header.timetable"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".mapas-recinto"]; ?>.php"><?php echo $lang["lang.header.maps-of-the-facilities"]; ?></a></li>
              </ul>
            </li>
            <!-- Actividades -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-uppercase text-lg-center dropdown-toggle
              <?php if (in_array($curPageName, ["juegos-de-mesa", "torneos", "rol-de-mesa", "rol-en-vivo", "charlas", "presentaciones-de-libros", "talleres", "inscripciones-candidaturas"])) echo "active\" aria-current=\"page"; ?>"
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
                <!-- <li><hr class="dropdown-divider"></li> -->
                <!-- <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".inscripciones-candidaturas"]; ?>.php"><?php echo $lang["lang.header.activities.registrations-applications"]; ?></a></li> -->
              </ul>
            </li>
            <!-- Concursos -->
            <li class="nav-item">
              <a class="nav-link fw-bold text-uppercase text-lg-center
              <?php if ($curPageName == "concursos") echo "active\" aria-current=\"page"; ?>" href="<?php echo $links[$lang["lang"] . ".concursos"]; ?>.php">
                <?php echo $lang["lang.activities.contests.title"]; ?>
              </a>
            </li>
          </ul>
        </div>
        <div id="nav-links-end" class="navbar-collapse">
          <ul class="navbar-nav justify-content-lg-evenly align-items-lg-center w-100">
            <!-- Invitados -->
            <li class="nav-item">
              <a class="nav-link fw-bold text-uppercase text-lg-center
              <?php if ($curPageName == "invitados") echo "active\" aria-current=\"page"; ?>" href="<?php echo $links[$lang["lang"] . ".invitados"]; ?>.php">
                <?php echo $lang["lang.header.guests"]; ?>
              </a>
            </li>
            <!-- Info -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "organizadores" || $curPageName == "colaboradores") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-info" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.info"]; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end rounded-4 p-1" data-bs-theme="light" aria-labelledby="navbarDropdown-info">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".organizadores"]; ?>.php"><?php echo $lang["lang.header.organizers"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".colaboradores"]; ?>.php"><?php echo $lang["lang.header.partners"]; ?></a></li>
              </ul>
            </li>
            <!-- Fotos -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-uppercase text-lg-center dropdown-toggle
              <?php if (str_contains($curPageName, "edicion")) echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-editions" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.editions"]; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end rounded-4 p-1" data-bs-theme="light" aria-labelledby="navbarDropdown-editions">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".edicion-2023"]; ?>.php"><?php echo $lang["lang.header.editions.2023"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".edicion-2022"]; ?>.php"><?php echo $lang["lang.header.editions.2022"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="<?php echo $links[$lang["lang"] . ".edicion-2018"]; ?>.php"><?php echo $lang["lang.header.editions.2018"]; ?></a></li>
              </ul>
            </li>
            <!-- Idioma -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-lowercase nav-link-lang dropdown-toggle" href="#" id="navbarDropdown-lang" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Idioma seleccionado: español">
                <?php echo $lang["lang.header.lang." . $lang["lang"]]; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end rounded-4 p-1" data-bs-theme="light" aria-labelledby="navbarDropdown-lang">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="/<?php echo $links["es." . $curPageName]; ?>.php"><?php echo $lang["lang.header.lang.es"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="/eu/<?php echo $links["eu." . $curPageName]; ?>.php"><?php echo $lang["lang.header.lang.eu"]; ?></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <button id="footer-toggler" class="navbar-toggler d-lg-none p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#footerOffcanvas" aria-controls="footerOffcanvas" aria-expanded="false" aria-label="Toggle footer">
      <i class="bi bi-three-dots-vertical" style="font-size: 1.5rem;"></i>
    </button>
  </nav>
</header>