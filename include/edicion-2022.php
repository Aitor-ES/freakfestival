<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-main-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title"><?php echo $lang["lang.edition.2022.title"]; ?></h1>
    </div>

    <!-- General -->
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

    <!-- Stands, partners and guests -->
    <h3 class="fw-light mb-4"><?php echo $lang["lang.edition.gallery.stands-contributors-guests"]; ?></h3>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2022/min/Puestos, colaboradores e invitados") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2022/min/Puestos, colaboradores e invitados/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2022/thumbnails/Puestos, colaboradores e invitados/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <!-- Activities -->
    <h3 class="fw-light mb-4"><?php echo $lang["lang.edition.gallery.activities"]; ?></h3>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2022/min/Actividades") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2022/min/Actividades/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2022/thumbnails/Actividades/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <!-- Cosplay -->
    <h3 class="fw-light mb-4"><?php echo $lang["lang.edition.gallery.cosplay"]; ?></h3>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2022/min/Cosplay") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2022/min/Cosplay/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2022/thumbnails/Cosplay/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <!-- Video -->
    <h3 class="fw-light mb-4"><?php echo $lang["lang.edition.gallery.video"]; ?></h3>

    <div class="text-center">
      <iframe id="gallery-video" class="mb-5" src="https://drive.google.com/file/d/1J2vmd-zc02kKfumchDEKKgDNB6eJCGWu/preview" width="640" height="360"></iframe>
    </div>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->

  <!-- jQuery JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Lightbox2 JS -->
  <script src="/libraries/lightbox2/js/lightbox.min.js"></script>
</body>