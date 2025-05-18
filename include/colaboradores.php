<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <?php $contributors = json_decode(file_get_contents(__DIR__ . '/colaboradores.json')); ?>

    <div class="mb-5">
      <h1 class="ff-title"><?php echo $lang["lang.contributors.title"]; ?> (2024)</h1>
    </div>

    <!-- Associations -->
    <h2 class="mb-5"><?php echo $lang["lang.contributors.associations"]; ?></h2>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5 g-5 mb-5 justify-content-evenly">
      <?php foreach ($contributors->associations as $association) { ?>
          <div class="col d-flex justify-content-center align-items-center">
            <a id="<?php echo $association->key; ?>" href="<?php echo $association->link; ?>" target="_blank">
              <img loading="lazy" class="logo-contributor" src="/images/contributors/<?php echo $association->logo; ?>"
                alt="<?php echo $association->name; ?>" width="216" height="100">
            </a>
          </div>
      <?php } ?>
    </div>

    <!-- Brands -->
    <h2 class="mb-5"><?php echo $lang["lang.contributors.brands"]; ?></h2>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5 g-5 mb-5 justify-content-evenly">
      <?php foreach ($contributors->brands as $brand) { ?>
          <div class="col d-flex justify-content-center align-items-center">
            <a id="<?php echo $brand->key; ?>" href="<?php echo $brand->link; ?>" target="_blank">
              <img loading="lazy" class="logo-contributor" src="/images/contributors/<?php echo $brand->logo; ?>"
                alt="<?php echo $brand->name; ?>" width="216" height="100">
            </a>
          </div>
      <?php } ?>
    </div>

    <!-- Photography -->
    <h2 class="mb-5"><?php echo $lang["lang.contributors.photography"]; ?></h2>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5 g-5 mb-5 justify-content-evenly">
      <?php foreach ($contributors->photography as $photographer) { ?>
          <div class="col d-flex justify-content-center align-items-center">
            <a id="<?php echo $photographer->key; ?>" href="<?php echo $photographer->link; ?>" target="_blank">
              <img loading="lazy" class="logo-contributor" src="/images/contributors/<?php echo $photographer->logo; ?>"
                alt="<?php echo $photographer->name; ?>" width="216" height="100">
            </a>
          </div>
      <?php } ?>
    </div>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->
</body>
