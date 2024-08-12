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
            <!-- Hotel image -->
            <div class="col-12 col-lg-3 d-flex justify-content-center">
              <img class="stand-logo" src="/images/logos/hotels/<?php echo $activity->logo; ?>" alt="<?php echo $activity->activityName; ?>" width="200" height="200">
            </div>

            <!-- Hotel main content -->
            <div class="col-12 col-lg-6">
              <!-- Hotel title -->
              <h2 id="<?php echo $activity->activityName; ?>">
                <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>
                <a class="anchor-link" href="#<?php echo $activity->activityName; ?>" aria-label="Link to this section: <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>"></a>
              </h2>

              <dl>
                <!-- Hotel address -->
                <dt><?php echo $lang["lang.activities.$categoryName.address"]; ?></dt>
                <dd><?php echo $lang["lang.activities.$categoryName.$activity->activityName.address"]; ?></dd>

                <!-- Hotel code and discount -->
                <dt><?php echo $lang["lang.activities.$categoryName.code-and-discount"]; ?></dt>
                <dd><?php echo $activity->code; ?>: <?php echo $activity->discount; ?></dd>
              </dl>

              <!-- Hotel links -->
              <ul class="list-inline">
                <?php if (property_exists($activity, 'maps')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $activity->maps; ?>" target="_blank"><i class="bi bi-geo-alt"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'web')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $activity->web; ?>" target="_blank"><i class="bi bi-globe"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'instagram')) {
                  foreach ($activity->instagram as $instagram) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $instagram; ?>" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <?php } } ?>

                <?php if (property_exists($activity, 'facebook')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $activity->facebook; ?>" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'x')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $activity->x; ?>" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                <?php } ?>

                <?php if (property_exists($activity, 'tiktok')) { ?>
                  <li class="list-inline-item"><a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="<?php echo $activity->tiktok; ?>" target="_blank"><i class="bi bi-tiktok"></i></a></li>
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