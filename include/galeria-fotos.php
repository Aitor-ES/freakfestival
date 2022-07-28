<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.gallery.title"]; ?></h1>

    <h2 class="f-uncial-r mb-5"><?php echo $lang["lang.gallery.2022"]; ?></h2>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2022/min") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2022/min/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2022/thumbnails/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <h3 class="mb-4"><?php echo $lang["lang.gallery.2022.artists"]; ?></h3>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2022/min/Artistas") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2022/min/Artistas/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2022/thumbnails/Artistas/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <h3 class="mb-4"><?php echo $lang["lang.gallery.2022.partners-workshops"]; ?></h3>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2022/min/Colaboradores y talleres") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2022/min/Colaboradores y talleres/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2022/thumbnails/Colaboradores y talleres/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <h3 class="mb-4"><?php echo $lang["lang.gallery.2022.board-role-games"]; ?></h3>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2022/min/Juegos de mesa y rol") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2022/min/Juegos de mesa y rol/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2022/thumbnails/Juegos de mesa y rol/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <h3 class="mb-4"><?php echo $lang["lang.gallery.2022.video"]; ?></h3>

    <div class="text-center">
      <iframe id="gallery-video" class="mb-5" src="https://drive.google.com/file/d/1J2vmd-zc02kKfumchDEKKgDNB6eJCGWu/preview" width="640" height="360"></iframe>
    </div>

    <h2 class="f-uncial-r mb-5"><?php echo $lang["lang.gallery.2018"]; ?></h2>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2018/min") as $file) {
          if ($file->isDot()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2018/min/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2018/thumbnails/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->

  <!-- Bootstrap JS bundle w/ Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- jQuery JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Lightbox2 JS -->
  <script src="/libraries/lightbox2/js/lightbox.min.js"></script>
</body>