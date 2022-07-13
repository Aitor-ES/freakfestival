<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Invitados";
      require("/include/head.php");
    ?>
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("/include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container-md ff-main-gutter my-5">
      <h1 class="f-uncial-r mb-5">Invitados</h1>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-evenly">
        <div class="col">
          <div class="card h-100 bg-ffmidnight-75 text-white border-0 rounded-5">
            <div class="card-header">Cosplayer</div>

            <img src="/images/photos/invitados/Invitada_burning_flare-min.jpg" class="card-img-top rounded-0" alt="Burning Flare">

            <div class="card-body">
              <h5 class="card-title">Burning Flare</h5>
              <p class="card-text">Es una cosplayer que lleva ya 7 años en activo, con predilección por los personajes de videojuegos y las armaduras con muchos detalles, con acabados muy realistas y orgánicos.
                Estamos encantados de tenerla con nosotros durante este Freak Festival, ¿os animáis a pasaros y conocerla?</p>
            </div>

            <div class="card-footer">
              <div class="row g-2">
                <div class="col-auto">
                  <a class="btn btn-lg btn-outline-ffcyan btn-outline-0" href="https://www.instagram.com/burningflare" role="button"><i class="bi bi-instagram"></i></a>
                </div>

                <div class="col-auto">
                  <a class="btn btn-lg btn-outline-ffcyan btn-outline-0" href="https://twitter.com/Burningflaru?t=S_J3unxI9mSwl8ku7wEISw&s=09" role="button"><i class="bi bi-twitter"></i></a>
                </div>

                <div class="col-auto">
                  <a class="btn btn-lg btn-outline-ffcyan btn-outline-0" href="https://www.twitch.tv/flarur" role="button"><i class="bi bi-twitch"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 bg-ffmidnight-75 text-white border-0 rounded-5">
            <div class="card-header">Cosplayer</div>

            <img src="/images/photos/invitados/Invitada_pandastica-min.jpg" class="card-img-top rounded-0" alt="Pandastica">

            <div class="card-body">
              <h5 class="card-title">Pandastica</h5>
              <p class="card-text">Viene a vernos desde Cantabria a enseñarnos la que es su pasión desde el 2014: la caracterización de personajes, sobre todo en cuestión de maquillaje y textiles.
                Estamos encantados de tenerla entre nosotros este año, ¡animaos a venir y conocerla!</p>
            </div>

            <div class="card-footer">
              <div class="row g-2">
                <div class="col-auto">
                  <a class="btn btn-lg btn-outline-fflime btn-outline-0" href="https://www.instagram.com/pandasticacosplay" role="button"><i class="bi bi-instagram"></i></a>
                </div>

                <div class="col-auto">
                  <a class="btn btn-lg btn-outline-fflime btn-outline-0" href="https://twitter.com/Ainoabg?t=01xwFi4PchyXVqBrHwBjKw&s=09" role="button"><i class="bi bi-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 bg-ffmidnight-75 text-white border-0 rounded-5">
            <div class="card-header">Cosplayer</div>

            <img src="/images/photos/invitados/Invitada_kaceda-min.jpg" class="card-img-top rounded-0" alt="Kaceda">

            <div class="card-body">
              <h5 class="card-title">Kaceda</h5>
              <p class="card-text">Esta cosplayer lleva sobre los escenarios desde el 2017, habiendo ganado varios concursos de cosplay de Vizcaya, Cantabria y Asturias.
                Le gusta aportar atrezo diseñado por ella misma a sus actuaciones, así como la estilización de pelucas y la confección tanto de armaduras como de cosplays textiles.
                Estamos deseando tenerla en el evento y aprender de sus experiencias, ¡animaos!</p>
            </div>

            <div class="card-footer">
              <div class="row g-2">
                <div class="col-auto">
                  <a class="btn btn-lg btn-outline-ffyellow btn-outline-0" href="https://www.instagram.com/kacedacosplay" role="button"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main End -->

    <!-- Footer Start -->
    <?php include("/include/footer.php"); ?>
    <!-- Footer End -->

    <!-- Bootstrap JS bundle w/ Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- jQuery JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  </body>
</html>