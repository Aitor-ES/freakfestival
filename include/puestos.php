<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$curPageName.title"]; ?> (2024)</h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.activities.$curPageName.description"]; ?></p>
    </div>

    <ul class="activities list-group list-group-flush">
      <?php foreach ($stands as $stand) { ?>
        <li class="list-group-item">
          <div class="row justify-content-center gy-4 gx-5">
            <!-- Activity image -->
            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-start">
              <img class="stand-logo" src="/images/contributors/<?php echo $stand->logo; ?>"
                alt="<?php echo $lang["lang.activities.$curPageName.$stand->name.title"]; ?>" width="200" height="200">
            </div>

            <!-- Activity main content -->
            <div class="col-12 col-lg-6">
              <!-- Activity title -->
              <h2 id="<?php echo $stand->name; ?>">
                <?php echo $lang["lang.activities.$curPageName.$stand->name.title"]; ?>
                <a class="anchor-link" href="#<?php echo $stand->name; ?>"
                  aria-label="Link to this section: <?php echo $lang["lang.activities.$curPageName.$stand->name.title"]; ?>"></a>
              </h2>

              <!-- Activity type -->
              <p class="lead text-ffscarlet"><?php echo $lang["lang.activities.$curPageName.$stand->name.type"]; ?></p>

              <!-- Activity description -->
              <p><?php echo $lang["lang.activities.$curPageName.$stand->name.description"]; ?></p>

              <!-- Activity links -->
              <ul class="list-inline">
                <?php if (property_exists($stand, 'web')) { ?>
                  <li class="list-inline-item">
                    <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $stand->web; ?>" target="_blank">
                      <i class="bi bi-globe"></i>
                    </a>
                  </li>
                <?php } ?>

                <?php if (property_exists($stand, 'instagram')) {
                  foreach ($stand->instagram as $instagram) { ?>
                    <li class="list-inline-item">
                      <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $instagram; ?>" target="_blank">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  <?php }
                } ?>

                <?php if (property_exists($stand, 'facebook')) { ?>
                  <li class="list-inline-item">
                    <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $stand->facebook; ?>"
                      target="_blank">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                <?php } ?>

                <?php if (property_exists($stand, 'x')) { ?>
                  <li class="list-inline-item">
                    <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $stand->x; ?>" target="_blank">
                      <i class="bi bi-twitter-x"></i>
                    </a>
                  </li>
                <?php } ?>

                <?php if (property_exists($stand, 'tiktok')) { ?>
                  <li class="list-inline-item">
                    <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $stand->tiktok; ?>"
                      target="_blank">
                      <i class="bi bi-tiktok"></i>
                    </a>
                  </li>
                <?php } ?>

                <?php if (property_exists($stand, 'discord')) { ?>
                  <li class="list-inline-item">
                    <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $stand->x; ?>" target="_blank">
                      <i class="bi bi-discord"></i>
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>
