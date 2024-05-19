<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.activities.$categoryName.title"]; ?></h1>

    <p class="lead mb-5"><?php echo $lang["lang.activities.$categoryName.description"]; ?></p>

    <ul class="list-group list-group-flush">
      <?php foreach ($activityCategory->activities as $activity) { ?>
        <li id="<?php echo $activity->activityName; ?>" class="list-group-item pb-5 mb-5">
          <div class="row justify-content-center g-5">
            <!-- Activity image -->
            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-start">
              <img class="stand-logo" src="/images/logos/stands/<?php echo $activity->logo; ?>" alt="<?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>" width="200" height="200">
            </div>

            <!-- Activity main content -->
            <div class="col-12 col-lg-6">
              <!-- Activity title -->
              <h2><?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?></h2>

              <!-- Activity type -->
              <p class="lead"><?php echo $lang["lang.activities.$categoryName.$activity->activityName.type"]; ?></p>

              <!-- Activity description -->
              <p><?php echo $lang["lang.activities.$categoryName.$activity->activityName.description"]; ?></p>

              <!-- Activity links -->
              <ul class="list-inline">
                <?php if (property_exists($activity, 'web')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->web; ?>"><i class="bi bi-globe"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'instagram')) {
                  foreach ($activity->instagram as $instagram) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $instagram; ?>"><i class="bi bi-instagram"></i></a></li>
                <?php } } ?>

                <?php if (property_exists($activity, 'facebook')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->facebook; ?>"><i class="bi bi-facebook"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'tiktok')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->tiktok; ?>"><i class="bi bi-tiktok"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'x')) { ?>
                  <li class="list-inline-item"><a class="btn btn-lg btn-outline-ffscarlet btn-outline-b" href="<?php echo $activity->x; ?>"><i class="bi bi-twitter-x"></i></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>