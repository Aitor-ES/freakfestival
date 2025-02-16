<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$curPageName.title"]; ?></h1>
    </div>

    <ul class="activities list-group list-group-flush">
      <?php foreach ($guests as $guest) { ?>
        <li class="list-group-item">
          <div class="row justify-content-center gy-4 gx-5">
            <!-- Activity image -->
            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-start">
              <img class="guest-logo rounded-5" src="/images/contributors/<?php echo $guest->logo; ?>" alt="<?php echo $lang["lang.activities.$curPageName.$guest->name.title"]; ?>" width="400" height="400">
            </div>

            <!-- Activity main content -->
            <div class="col-12 col-lg-6">
              <!-- Activity title -->
              <h2 id="<?php echo $guest->name; ?>">
                <?php echo $lang["lang.activities.$curPageName.$guest->name.title"]; ?>
                <a class="anchor-link" href="#<?php echo $guest->name; ?>" aria-label="Link to this section: <?php echo $lang["lang.activities.$curPageName.$guest->name.title"]; ?>"></a>
              </h2>

              <!-- Activity type -->
              <p class="lead text-ffscarlet"><?php echo $lang["lang.activities.$curPageName.$guest->name.dedication"]; ?></p>

              <!-- Activity description -->
              <p><?php echo $lang["lang.activities.$curPageName.$guest->name.description.1"]; ?></p>
              <p><?php echo $lang["lang.activities.$curPageName.$guest->name.description.2"]; ?></p>

              <!-- Activity links -->
              <ul class="list-inline">
                <?php if (property_exists($guest, 'web')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $guest->web; ?>" target="_blank"><i class="bi bi-globe"></i></a></li>
                <?php } ?>

                <?php if (property_exists($guest, 'instagram')) {
                  foreach ($guest->instagram as $instagram) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $instagram; ?>" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <?php } } ?>

                <?php if (property_exists($guest, 'facebook')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $guest->facebook; ?>" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <?php } ?>

                <?php if (property_exists($guest, 'x')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $guest->x; ?>" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                <?php } ?>

                <?php if (property_exists($guest, 'tiktok')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $guest->tiktok; ?>" target="_blank"><i class="bi bi-tiktok"></i></a></li>
                <?php } ?>

                <?php if (property_exists($guest, 'discord')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $guest->x; ?>" target="_blank"><i class="bi bi-discord"></i></a></li>
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