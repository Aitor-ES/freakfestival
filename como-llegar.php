<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Cómo llegar";
      require("/include/head.php");
    ?>
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("/include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container-md ff-main-gutter my-5">
      <h1 class="f-uncial-r mb-5">Cómo llegar</h1>

      <div class="row mb-3">
        <div class="col-12">
          <dl>
            <dt>Lugar</dt>
            <dd>Palacio de Congresos Europa</dd>
            <dt>Dirección</dt>
            <dd>Av. Gasteiz, 85, 01009 Vitoria-Gasteiz, Álava</dd>
          </dl>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card rounded-5">
            <div class="card-body">
              <!--The iframe element for the map -->
              <iframe width="100%" height="500" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJNSgCzj_CTw0RhxKBGHgKvm4&key=AIzaSyBYpWQwfN5-f1lt3HntlBEOEfE84oNpOcE"></iframe>
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