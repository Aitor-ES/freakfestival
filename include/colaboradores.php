<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <?php $contributors = json_decode(file_get_contents(__DIR__ . '/colaboradores.json')); ?>

    <div class="mb-5">
      <h1 class="ff-title"><?php echo $lang["lang.contributors.title"]; ?></h1>
    </div>

    <!-- Associations -->
    <h2 class="mb-5"><?php echo $lang["lang.contributors.associations"]; ?></h2>

    <?php if (!$contributors->associations) { ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5">
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <p class="text-center fs-3 my-3"><strong><?php echo $lang["lang.common.wip"]; ?></strong></p>
          </div>
        </div>
      </div>
    <?php } else { ?>
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
    <?php } ?>

    <!-- Brands -->
    <h2 class="mb-5"><?php echo $lang["lang.contributors.brands"]; ?></h2>

    <?php if (!$contributors->brands) { ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5">
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <p class="text-center fs-3 my-3"><strong><?php echo $lang["lang.common.wip"]; ?></strong></p>
          </div>
        </div>
      </div>
    <?php } else { ?>
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
    <?php } ?>

    <!-- Independents -->
    <h2 class="mb-5"><?php echo $lang["lang.contributors.independents"]; ?></h2>

    <?php if (!$contributors->independents) { ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center mb-5">
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <p class="text-center fs-3 my-3"><strong><?php echo $lang["lang.common.wip"]; ?></strong></p>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5 g-5 mb-5 justify-content-evenly">
        <?php foreach ($contributors->independents as $independent) { ?>
          <div class="col d-flex justify-content-center align-items-center">
            <a id="<?php echo $independent->key; ?>" href="<?php echo $independent->link; ?>" target="_blank">
              <img loading="lazy" class="logo-contributor" src="/images/contributors/<?php echo $independent->logo; ?>"
                alt="<?php echo $independent->name; ?>" width="216" height="100">
            </a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->
</body>
