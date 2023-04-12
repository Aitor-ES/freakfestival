<header class="navbar navbar-expand-lg sticky-top flex-wrap navbar-dark ff-navbar">
  <nav class="container-xxl">
    <button id="nav-toggler" class="navbar-toggler p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list" style="font-size: 2rem;"></i>
    </button>
    <a id="nav-logo" class="navbar-brand mx-auto mx-lg-0" href="index.php">
      <img src="/images/Letras_dado_tabla.png" class="navbar-logo" alt="Freak Festival" width="40" height="40">
    </a>
    <div class="offcanvas offcanvas-start bg-ffmidnight d-lg-contents" tabindex="-1" id="navbarOffcanvas" aria-labelledby="offcanvasTitle">
      <div class="offcanvas-header text-light px-4 pb-0">
        <img src="/images/Letras_dado_tabla.png" id="offcanvasTitle" alt="Freak Festival" width="60" height="60">
        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" data-bs-target="#navbarOffcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-lg-contents p-4 pt-0 p-lg-0">
        <hr class="d-lg-none text-white-50">
        <div id="nav-links-start" class="navbar-collapse">
          <ul class="navbar-nav justify-content-lg-evenly align-items-lg-center w-100">
            <!-- Inicio -->
            <li class="nav-item">
              <a class="nav-link fw-bold text-uppercase text-lg-center
              <?php if ($curPageName == "index.php") echo "active\" aria-current=\"page"; ?>" href="index.php">
                <?php echo $lang["lang.header.home"]; ?>
              </a>
            </li>
            <!-- Programa -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "actividades-2023.php" || $curPageName == "actividades-2022.php" || $curPageName == "horario.php") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-program" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.program"]; ?>
              </a>
              <ul class="dropdown-menu rounded-4 p-1" aria-labelledby="navbarDropdown-program">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="actividades-2023.php"><?php echo $lang["lang.header.activities.2023"]; ?></a></li>
                <!-- <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="horario.php"><?php echo $lang["lang.header.timetable"]; ?></a></li> -->
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="actividades-2022.php"><?php echo $lang["lang.header.activities.2022"]; ?></a></li>
              </ul>
            </li>
            <!-- Invitados -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "invitados-2023.php" || $curPageName == "invitados-2022.php") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-guests" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.guests"]; ?>
              </a>
              <ul class="dropdown-menu rounded-4 p-1" aria-labelledby="navbarDropdown-guests">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="invitados-2023.php"><?php echo $lang["lang.header.guests.2023"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="invitados-2022.php"><?php echo $lang["lang.header.guests.2022"]; ?></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div id="nav-links-end" class="navbar-collapse">
          <ul class="navbar-nav justify-content-lg-evenly align-items-lg-center w-100">
            <!-- Fotos -->
            <li class="nav-item">
              <a class="nav-link fw-bold text-uppercase text-lg-center
              <?php if ($curPageName == "fotos.php") echo "active\" aria-current=\"page"; ?>" href="fotos.php">
                <?php echo $lang["lang.header.photos"]; ?>
              </a>
            </li>
            <!-- Info -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "organizadores.php" || $curPageName == "colaboradores.php" || $curPageName == "mapas-recinto.php") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-info" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.info"]; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end rounded-4 p-1" aria-labelledby="navbarDropdown-info">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="organizadores.php"><?php echo $lang["lang.header.organizers"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="colaboradores.php"><?php echo $lang["lang.header.partners"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="mapas-recinto.php"><?php echo $lang["lang.header.maps-of-the-facilities"]; ?></a></li>
              </ul>
            </li>
            <!-- Idioma -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold text-lowercase nav-link-lang dropdown-toggle" href="#" id="navbarDropdown-lang" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Idioma seleccionado: español">
                <?php echo $lang["lang.header.lang." . $lang["lang"]]; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end rounded-4 p-1" aria-labelledby="navbarDropdown-lang">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="/<?php echo $curPageName; ?>"><?php echo $lang["lang.header.lang.es"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="/eu/<?php echo $curPageName; ?>"><?php echo $lang["lang.header.lang.eu"]; ?></a></li>
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