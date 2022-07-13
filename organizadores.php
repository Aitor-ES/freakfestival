<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Organizadores";
      require("/include/head.php");
    ?>
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("/include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container-md ff-main-gutter my-5">
      <h1 class="f-uncial-r mb-5">Asociación Cultural Valinor</h1>

      <div class="row">
        <div class="col-12 col-lg-5 text-center mb-5 mb-lg-0">
          <img src="/images/logo_valinor.svg" alt="..." width="300px" height="300px">
        </div>

        <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
          <p class="text-center text-lg-start">
            ¡Hola! Somos la Asociación Valinor y nos dedicamos a los juegos de mesa, el rol, las manualidades, y todo el abanico de hobbies del mundo friki. Estamos establecidos en Vitoria-Gasteiz desde hace más de 15 años, durante los que hemos ido ampliando la familia y mejorando poco a poco.
            Estamos encantados de dar a conocer nuestros intereses y recibimos con los brazos abiertos a todo aquel que quiera saber más sobre nosotros. ¡No dudes en contactarnos si quieres saber más!
          </p>

          <ul class="list-inline d-flex justify-content-center justify-content-lg-start pt-3">
            <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffmidnight btn-outline-b" href="https://www.facebook.com/asociacionvalinor"><i class="bi bi-facebook"></i></a></li>
            <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffmidnight btn-outline-b" href="https://www.instagram.com/asovalinor"><i class="bi bi-instagram"></i></a></li>
            <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffmidnight btn-outline-b" href="mailto:asovalinor@gmail.com"><i class="bi bi-envelope-fill"></i></a></li>
            <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffmidnight btn-outline-b" href="https://twitter.com/AsoValinor"><i class="bi bi-twitter"></i></a></li>
          </ul>
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