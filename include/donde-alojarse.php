<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$curPageName.title"]; ?></h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.activities.$curPageName.description"]; ?></p>
    </div>

    <?php if (!$hotels) { ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center">
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <p class="text-center fs-3 my-3"><strong><?php echo $lang["lang.common.wip"]; ?></strong></p>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <ul class="activities list-group list-group-flush">
        <?php foreach ($hotels as $hotel) { ?>
          <li class="list-group-item">
            <div class="row justify-content-center gy-4 gx-5">
              <!-- Hotel image -->
              <div class="col-12 col-lg-3 d-flex justify-content-center">
                <img class="stand-logo" src="/images/contributors/<?php echo $hotel->logo; ?>"
                  alt="<?php echo $hotel->name; ?>" width="200" height="200">
              </div>

              <!-- Hotel main content -->
              <div class="col-12 col-lg-6">
                <!-- Hotel title -->
                <h2 id="<?php echo $hotel->name; ?>">
                  <?php echo $lang["lang.activities.$curPageName.$hotel->name.title"]; ?>
                  <a class="anchor-link" href="#<?php echo $hotel->name; ?>"
                    aria-label="Link to this section: <?php echo $lang["lang.activities.$curPageName.$hotel->name.title"]; ?>"></a>
                </h2>

                <dl>
                  <!-- Hotel address -->
                  <dt><?php echo $lang["lang.activities.$curPageName.address"]; ?></dt>
                  <dd><?php echo $lang["lang.activities.$curPageName.$hotel->name.address"]; ?></dd>

                  <!-- Hotel code and discount -->
                  <dt><?php echo $lang["lang.activities.$curPageName.code-and-discount"]; ?></dt>
                  <dd><?php echo $hotel->code; ?>: <?php echo $hotel->discount; ?></dd>
                </dl>

                <!-- Hotel links -->
                <ul class="list-inline">
                  <?php if (property_exists($hotel, 'maps')) { ?>
                    <li class="list-inline-item">
                      <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $hotel->maps; ?>" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                      </a>
                    </li>
                  <?php } ?>

                  <?php if (property_exists($hotel, 'web')) { ?>
                    <li class="list-inline-item">
                      <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $hotel->web; ?>" target="_blank">
                        <i class="bi bi-globe"></i>
                      </a>
                    </li>
                  <?php } ?>

                  <?php if (property_exists($hotel, 'instagram')) {
                    foreach ($hotel->instagram as $instagram) { ?>
                      <li class="list-inline-item">
                        <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $instagram; ?>" target="_blank">
                          <i class="bi bi-instagram"></i>
                        </a>
                      </li>
                    <?php }
                  } ?>

                  <?php if (property_exists($hotel, 'facebook')) { ?>
                    <li class="list-inline-item">
                      <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $hotel->facebook; ?>"
                        target="_blank">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                  <?php } ?>

                  <?php if (property_exists($hotel, 'x')) { ?>
                    <li class="list-inline-item">
                      <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $hotel->x; ?>" target="_blank">
                        <i class="bi bi-twitter-x"></i>
                      </a>
                    </li>
                  <?php } ?>

                  <?php if (property_exists($hotel, 'tiktok')) { ?>
                    <li class="list-inline-item">
                      <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $hotel->tiktok; ?>"
                        target="_blank">
                        <i class="bi bi-tiktok"></i>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->
</body>
