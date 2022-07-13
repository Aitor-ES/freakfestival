<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Galería de fotos";
      require("/include/head.php");
    ?>

    <!-- Page CSS -->
    <!-- Lightbox2 library -->
    <link href="/libraries/lightbox2/css/lightbox.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("/include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container-md ff-main-gutter my-5">
      <h1 class="f-uncial-r mb-5">En años anteriores...</h1>

      <div class="row gy-4 justify-content-center">
        <div class="col-auto">
          <a href="/images/photos/gallery/Charlas.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/Charlas-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/Cosplay.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/Cosplay-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/General 1.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/General 1-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/General 2.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/General 2-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/General 3.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/General 3-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7770.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7770-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7797.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7797-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7826.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7826-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7828.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7828-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7830.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7830-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7851.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7851-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7864.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7864-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7874.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7874-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/IMG_7880.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/IMG_7880-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/Juegos de mesa.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/Juegos de mesa-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/Tiendas, artistas y artesanos.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/Tiendas, artistas y artesanos-min.jpg" alt="" width="auto" height="100px">
          </a>
        </div>

        <div class="col-auto">
          <a href="/images/photos/gallery/Torneos.jpg" data-lightbox="gallery">
            <img class="border rounded p-1" src="/images/photos/gallery/Torneos-min.jpg" alt="" width="auto" height="100px">
          </a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Lightbox2 JS -->
    <script src="/libraries/lightbox2/js/lightbox.min.js"></script>
  </body>
</html>