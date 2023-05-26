<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.partners.title"]; ?></h1>

    <div class="row g-5 mb-5 justify-content-center">
      <?php
        foreach (new DirectoryIterator(__DIR__ . "/../images/logos/contributors/2023") as $file) {
          if ($file->isDot()) continue;
      ?>

      <div class="col-auto">
        <img class="logo-contributor" src="/images/logos/contributors/2023/<?php echo $file->getFilename(); ?>"
          alt="<?php echo $file->getFilename(); ?>" width="auto" height="60px">
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
</body>