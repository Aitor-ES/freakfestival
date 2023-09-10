<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.activities.contests.title"]; ?></h1>

    <?php $activityCategory = json_decode(file_get_contents(__DIR__ . '/actividades-2023.json'))[4]; ?>

    <div class="accordion-body">
        <p><?php echo $lang["lang.activities.contests.description"]; ?></p>

        <ul class="list-group list-group-flush">
          <?php foreach ($activityCategory->activities as $activity) { ?>
            <li class="list-group-item mb-3">
              <div>
                <h4 class="mb-3"><?php echo $lang["lang.activities.2023.contests.$activity->activityName.title"]; ?></h4>
                <p class="text-body-secondary"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
                <p><?php echo $lang["lang.activities.2023.contests.$activity->activityName.description"]; ?></p>

                <div class="row gy-3 mb-3">
                  <?php if (property_exists($activity, 'rules')) { ?>
                    <div class="col-auto">
                      <a class="btn btn-ffdiamond" href="/docs/2023/<?php echo $activity->rules; ?>" role="button">
                        <?php echo $lang["lang.activities.btn.rules"]; ?>
                      </a>
                    </div>
                  <?php } ?>

                  <!-- <?php if (property_exists($activity, 'register')) { ?>
                    <div class="col-auto">
                      <a class="btn btn-ffsunlight" href="<?php echo $activity->register; ?>" role="button">
                        <?php echo $lang["lang.activities.btn.register"]; ?>
                      </a>
                    </div>
                  <?php } ?> -->
                </div>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>