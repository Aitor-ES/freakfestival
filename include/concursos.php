<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/concursos.json'));
          $categoryName = $activityCategory->categoryName; ?>

    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$categoryName.title"]; ?></h1>
      <p class="ff-lead"><?php echo $lang["lang.activities.$categoryName.description"]; ?></p>
    </div>

    <ul class="list-group list-group-flush">
      <?php foreach ($activityCategory->activities as $activity) { ?>
        <li class="list-group-item pb-5 mb-5">
          <div>
            <!-- Activity title -->
            <h2 id="<?php echo $activity->activityName; ?>">
              <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>
              <a class="anchor-link" href="#<?php echo $activity->activityName; ?>" aria-label="Link to this section: <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>"></a>
            </h2>

            <!-- Activity organizer -->
            <p class="text-body-secondary"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>

            <!-- Activity description -->
            <p><?php echo $lang["lang.activities.$categoryName.$activity->activityName.description"]; ?></p>

            <!-- Activity links -->
            <div class="row gy-3 mb-3">
              <?php if (property_exists($activity, 'rules')) { ?>
                <div class="col-auto">
                  <a class="btn btn-ffdiamond" href="/docs/<?php echo $activity->rules; ?>" target="_blank">
                    <?php echo $lang["lang.activities.btn.rules"]; ?>
                  </a>
                </div>
              <?php } ?>

              <?php if (property_exists($activity, 'register')) { ?>
                <div class="col-auto">
                  <a class="btn btn-ffsunlight" href="<?php echo $activity->register; ?>" target="_blank">
                    <?php echo $lang["lang.activities.btn.register"]; ?>
                  </a>
                </div>
              <?php } ?>
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