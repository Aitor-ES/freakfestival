<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title"><?php echo $lang["lang.edition.2024.title"]; ?></h1>
    </div>

    <!-- Friday -->
    <h2 class="mb-4"><?php echo $lang["lang.edition.gallery.friday"]; ?></h2>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2024/min/Viernes") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2024/min/Viernes/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2024/thumbnails/Viernes/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <!-- Saturday -->
    <h2 class="mb-4"><?php echo $lang["lang.edition.gallery.saturday"]; ?></h2>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2024/min/Sábado") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2024/min/Sábado/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2024/thumbnails/Sábado/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
    </div>

    <!-- Sunday -->
    <h2 class="mb-4"><?php echo $lang["lang.edition.gallery.sunday"]; ?></h2>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/gallery/2024/min/Domingo") as $file) {
          if (!$file->isFile()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/gallery/2024/min/Domingo/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/gallery/2024/thumbnails/Domingo/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
        </a>
      </div>

      <?php
        }
      ?>
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