<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title"><?php echo $lang["lang.edition.2018.title"]; ?></h1>
    </div>

    <div class="row gy-4 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2018/min") as $file) {
          if ($file->isDot()) continue;
      ?>

      <div class="col-auto">
        <a href="/images/photos/2018/min/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
          <img class="border rounded p-1" src="/images/photos/2018/thumbnails/<?php echo $file->getFilename(); ?>" alt="" width="auto" height="100px">
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

  <!-- Lightbox2 JS -->
  <script src="/libraries/lightbox2/js/lightbox-plus-jquery.min.js"></script>
</body>