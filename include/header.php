<header class="navbar navbar-expand-lg sticky-top flex-wrap navbar-dark ff-navbar">
  <nav class="container-xxl">
    <button id="nav-toggler" class="navbar-toggler p-2 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list" style="font-size: 2rem;"></i>
    </button>
    <a id="nav-logo" class="navbar-brand mx-auto mx-lg-0 pe-5 pe-lg-0" href="index.php">
      <img src="/images/logo_freak_festival_22.svg" class="navbar-logo" alt="Freak Festival" width="102" height="40">
    </a>
    <div class="offcanvas offcanvas-start bg-ffmidnight d-lg-contents" tabindex="-1" id="navbarOffcanvas" aria-labelledby="offcanvasTitle">
      <div class="offcanvas-header text-light px-4 pb-0">
        <img src="/images/logo_freak_festival_22.svg" id="offcanvasTitle" alt="Freak Festival" width="153" height="60">
        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-lg-contents p-4 pt-0 p-lg-0">
        <hr class="d-lg-none text-white-50">
        <div id="nav-links-start" class="navbar-collapse">
          <ul class="navbar-nav justify-content-lg-evenly align-items-lg-center w-100">
            <li class="nav-item">
              <a class="nav-link f-frutiger-b text-uppercase text-lg-center
              <?php if ($curPageName == "index.php") echo "active\" aria-current=\"page"; ?>" href="index.php"><?php echo $lang["lang.header.home"]; ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link f-frutiger-b text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "actividades.php" || $curPageName == "horario.php") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-program" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.program"]; ?>
              </a>
              <ul class="dropdown-menu p-1" aria-labelledby="navbarDropdown-program">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="actividades.php"><?php echo $lang["lang.header.activities"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="horario.php"><?php echo $lang["lang.header.timetable"]; ?></a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link f-frutiger-b text-uppercase text-lg-center
              <?php if ($curPageName == "invitados.php") echo "active\" aria-current=\"page"; ?>" href="invitados.php"><?php echo $lang["lang.header.guests"]; ?></a>
            </li>
          </ul>
        </div>
        <div id="nav-links-end" class="navbar-collapse">
          <ul class="navbar-nav justify-content-lg-evenly align-items-lg-center w-100">
            <li class="nav-item dropdown">
              <a class="nav-link f-frutiger-b text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "como-llegar.php" || $curPageName == "mapas-recinto.php") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-info" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.location"]; ?>
              </a>
              <ul class="dropdown-menu p-1" aria-labelledby="navbarDropdown-info">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="como-llegar.php"><?php echo $lang["lang.header.how-to-come"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="mapas-recinto.php"><?php echo $lang["lang.header.maps-of-the-facilities"]; ?></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link f-frutiger-b text-uppercase text-lg-center dropdown-toggle
              <?php if ($curPageName == "organizadores.php" || $curPageName == "colaboradores.php" || $curPageName == "galeria-fotos.php") echo "active\" aria-current=\"page"; ?>"
              href="#" id="navbarDropdown-about" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["lang.header.who-we-are"]; ?>
              </a>
              <ul class="dropdown-menu p-1" aria-labelledby="navbarDropdown-about">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="organizadores.php"><?php echo $lang["lang.header.organizers"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="colaboradores.php"><?php echo $lang["lang.header.partners"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="galeria-fotos.php"><?php echo $lang["lang.header.photo-gallery"]; ?></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link f-frutiger-b text-lowercase nav-link-lang dropdown-toggle" href="#" id="navbarDropdown-lang" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Idioma seleccionado: español">
              <?php echo $lang["lang.header.lang." . $lang["lang"]]; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end p-1" aria-labelledby="navbarDropdown-lang">
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="/<?php echo $curPageName; ?>"><?php echo $lang["lang.header.lang.es"]; ?></a></li>
                <li class="p-1"><a class="dropdown-item rounded-3 py-2 px-3" href="/eu/<?php echo $curPageName; ?>"><?php echo $lang["lang.header.lang.eu"]; ?></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- <div id="footer-toggler" class="d-lg-none invisible px-2 p-lg-0">
      <i class="bi bi-three-dots-vertical" style="font-size: 2rem;"></i>
    </div> -->
  </nav>
</header>