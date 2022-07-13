<!DOCTYPE html>
<html lang="eu">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Hasiera";
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/index.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Banner Start -->
    <div class="container-fluid ff-main-gutter text-center text-white mb-4 py-5" id="banner">
      <div class="row mb-5">
        <div class="col">
          <h1><img src="/images/logo_freak_festival_22.svg" class="img-fluid" alt="Freak Festival"></h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h3 class="display-5 f-uncial-r f-gradient-ff">Vitoria-Gasteiz</h3>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h4 class="f-gradient-ff">Europa Biltzar Jauregia</h4>
        </div>
      </div>
      <div class="row my-5">
        <div class="col">
          <h2 class="display-5 f-frutiger-b f-gradient-ff">2022ko ekainaren 25 eta 26a</h2>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    <div class="container-md ff-main-gutter my-5">
      <!-- Introduction Start -->
      <div class="row">
        <div class="order-lg-1 col-lg-5 text-center mb-4 mb-lg-0">
          <img class="img-fluid rounded-pill" src="/images/photos/general_1_blue-min.jpg" width="400" height="400" alt="">
        </div>
        <div class="order-lg-0 col-lg-7 d-flex flex-column justify-content-center text-center text-lg-end">
          <h2 class="f-uncial-r">Freak Festival...</h2>
          <p>
            <strong>Aisialdi alternatiboko ekitaldi bat da, publiko orokorrari zuzendua</strong>, Vitoria-Gasteizen kokatua. Jardunaldi honetan era desberdinetako jarduerak aurkituko dituzu, hala nola, mahai jokoen txapelketak, rol jokoak, hitzaldiak, cosplay-a, tailer desberdinak, artista ugariren postuak eta arte martzialen ikuskizunak.
          </p>
          <p>
            <strong>Sarrera</strong> eta jardueren parte hartzea <strong>guztiz doanekoa izango da</strong>, gure helburua kultura honen arlo desberdinak ezagutzera ematea baita, oztopo gabe.
          </p>
        </div>
      </div>
      <!-- Introduction End -->

      <hr class="my-5">

      <!-- Features Start -->
      <div class="row">
        <div class="col-12">
          <h1 class="f-uncial-r mb-5">Ekitaldiko jarduerak</h1>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5 justify-content-center text-center">

        <!-- 1st feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/juegos_de_mesa_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Mahai jokoak</h3>
          <p>Goza ezazu joko aukera anitzeko ludotekaz, ekitaldi osoan zure aukerara egongo dena, joko eta esperientzia berriak ezagutu ditzazun, edo betiko klasikoetara bueltatzeko.</p>
        </div>

        <!-- 2nd feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/torneos_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Txapelketak</h3>
          <p>Lehia zaitez beste erronkarien aurka mahai jokoetan, wargame desberdinetan, kartetan etab. eta gure kolaboratzaileek eskeinitako sari bikainen irabazle izateko borroka zaitez.</p>
        </div>

        <!-- 3rd feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/rol_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Rol-partidak</h3>
          <p>Abentura zirraragarrienak bizi itzazu fantasiazko, zientzia fikziozko, terrore etab. munduetan bidaiatzen diren heroi taldeen parte izanez. Partida zuzendari batek gidatuta, zuen istorioa kontakizunen merezidun izango dela bermatuko du.</p>
        </div>

        <!-- 4th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/cosplay_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Lehiaketak</h3>
          <p>Parte hartu ezazu gure cosplay, istorio labur, fast manga etab. lehiaketetan eta gure kolaboratzaileek eskeinitako sari bikainen irabazle izateko aukera izan ezazu.</p>
        </div>

        <!-- 5th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/tiendas_artistas_y_artesanos_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Dendak, artistak eta artisauak</h3>
          <p>Deskubritu itzazu gure hobbien hedapena bermatzen dituzten egile eta negozio lokalak, haien produktuak munduari ezagutarazi nahi dutenak.</p>
        </div>

        <!-- 6th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/charlas_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Hitzaldi eta erakustaldiak</h3>
          <p>Zure hobby gogokoetaz ikasi ezazu aditu desberdinek eskeinitako hitzaldi eta erakuskizunetan. Arloak mota anitzetakoak izango dira: arte, cosplay, literatura, arte martzialak etab.</p>
        </div>

        <!-- 7th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/talleres_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Tailerrak</h3>
          <p>Sor itzazu zure eskuekin oroigarri berdingabeak, hala nola, katilu pertsonalizatuak, lanpara japoniarrak eta bestelako eskulanak. Zure sormenaren ateak irekitzeko aukera paregabea benetan.</p>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Footer Start -->
    <?php include("include/footer.php"); ?>
    <!-- Footer End -->

    <!-- Bootstrap JS bundle w/ Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- jQuery JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  </body>
</html>