<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Inicio";
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
          <h4 class="f-gradient-ff">Palacio de Congresos Europa</h4>
        </div>
      </div>
      <div class="row my-5">
        <div class="col">
          <h2 class="display-5 f-frutiger-b f-gradient-ff">25 y 26 de junio de 2022</h2>
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
          <h2 class="f-uncial-r">El Freak Festival es...</h2>
          <p>
            Un <strong>evento de ocio alternativo para el público general</strong>, ubicado en la ciudad de Vitoria-Gasteiz. En este evento podrás encontrar todo tipo de actividades de la cultura friki, como torneos de juegos de mesa, partidas de rol, charlas, cosplay, talleres de manualidades, puestos de artistas y exhibiciones de artes marciales.
          </p>
          <p>
            <strong>La entrada</strong> del evento y la participación en sus actividades <strong>es totalmente gratuita</strong>, ya que nuestro objetivo es dar a conocer nuestros hobbies sin barreras.
          </p>
        </div>
      </div>
      <!-- Introduction End -->

      <hr class="my-5">

      <!-- Features Start -->
      <div class="row">
        <div class="col-12">
          <h1 class="f-uncial-r mb-5">Actividades del evento</h1>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5 justify-content-center text-center">

        <!-- 1st feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/juegos_de_mesa_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Juegos de mesa</h3>
          <p>Disfruta de una extensa ludoteca de juegos de mesa que estará a tu disposición durante todo el evento, para que puedas conocer y descubrir nuevos juegos con los que divertirte, o jugar una vez más a los clásicos de siempre.</p>
        </div>

        <!-- 2nd feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/torneos_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Torneos</h3>
          <p>Compite contra otros adversarios en juegos de mesa, wargames, cartas, etc. y lucha por ser el ganador de los impresionantes premios que nuestros colaboradores aportarán para los campeones.</p>
        </div>

        <!-- 3rd feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/rol_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Partidas de rol</h3>
          <p>Vive las aventuras más emocionantes con un grupo de héroes que viajan por mundos de fantasía, ciencia ficción, terror, etc. guiados por un director de partida, que se asegurará de que vuestra historia sea digna de relato.</p>
        </div>

        <!-- 4th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/cosplay_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Concursos</h3>
          <p>Participa en nuestros concursos de cosplay, relato corto, fast manga, etc. y opta a increíbles premios aportados por nuestros colaboradores.</p>
        </div>

        <!-- 5th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/tiendas_artistas_y_artesanos_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Tiendas, artistas y artesanos</h3>
          <p>Descubre a creadores y negocios locales que hacen posible la expansión de nuestros hobbies y quieren dar a conocer al mundo sus productos.</p>
        </div>

        <!-- 6th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/charlas_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Charlas y exhibiciones</h3>
          <p>Aprende sobre tus hobbies favoritos con las charlas y exhibiciones impartidas por expertos en una gran variedad de disciplinas como artes marciales, literatura, arte, cosplay, etc.</p>
        </div>

        <!-- 7th feature -->
        <div class="col px-4">
          <img class="rounded-circle mb-4" src="/images/photos/talleres_blue-min.jpg" alt="" width="200" height="200">
          <h3 class="fw-light">Talleres</h3>
          <p>Crea con tus propias manos recuerdos únicos como tazas personalizadas, lámparas japonesas y otras manualidades que te permitirán dar rienda suelta a tu creatividad y llevarte un bonito recuerdo del evento.</p>
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