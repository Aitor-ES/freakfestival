<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$categoryName.title"]; ?></h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.activities.$categoryName.description"]; ?></p>
    </div>

    <ul class="list-group list-group-flush">
      <?php foreach ($activityCategory->activities as $activity) { ?>
        <li class="list-group-item">
          <div class="row justify-content-center gy-4 gx-5">
            <!-- Activity image -->
            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-start">
              <img class="stand-logo" src="/images/logos/stands/<?php echo $activity->logo; ?>" alt="<?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>" width="200" height="200">
            </div>

            <!-- Activity main content -->
            <div class="col-12 col-lg-6">
              <!-- Activity title -->
              <h2 id="<?php echo $activity->activityName; ?>">
                <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>
                <a class="anchor-link" href="#<?php echo $activity->activityName; ?>" aria-label="Link to this section: <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>"></a>
              </h2>

              <!-- Activity type -->
              <p class="lead text-ffscarlet"><?php echo $lang["lang.activities.$categoryName.$activity->activityName.type"]; ?></p>

              <!-- Activity description -->
              <p><?php echo $lang["lang.activities.$categoryName.$activity->activityName.description"]; ?></p>

              <!-- Activity links -->
              <ul class="list-inline">
                <?php if (property_exists($activity, 'web')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->web; ?>" target="_blank"><i class="bi bi-globe"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'instagram')) {
                  foreach ($activity->instagram as $instagram) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $instagram; ?>" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <?php } } ?>

                <?php if (property_exists($activity, 'facebook')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->facebook; ?>" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'tiktok')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->tiktok; ?>" target="_blank"><i class="bi bi-tiktok"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'x')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->x; ?>" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'discord')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->x; ?>" target="_blank"><i class="bi bi-discord"></i></a></li>
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