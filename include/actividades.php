<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.activities.title"]; ?></h1>

    <div class="accordion" id="accordion-activities">
      <?php
        $activityCategories = json_decode(file_get_contents(__DIR__ . '/actividades-2023.json'));
        foreach ($activityCategories as $activityCategory) {
          $categoryName = $activityCategory->categoryName;
      ?>
        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-<?php echo $categoryName; ?>">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-<?php echo $categoryName; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $categoryName; ?>">
              <?php echo $lang["lang.activities.$categoryName.title"]; ?>
            </button>
          </h2>
          <div id="collapse-<?php echo $categoryName; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $categoryName; ?>"
            data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p><?php echo $lang["lang.activities.$categoryName.description"]; ?></p>

              <ul class="list-group list-group-flush">
                <?php foreach ($activityCategory->activities as $activity) { ?>
                  <li class="list-group-item mb-3">
                    <div>
                      <h4 class="mb-3"><?php echo $lang["lang.activities.2023.$categoryName.$activity->activityName.title"]; ?></h4>
                      <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
                      <p><?php echo $lang["lang.activities.2023.$categoryName.$activity->activityName.description"]; ?></p>

                      <div class="row gy-3 mb-3">
                        <?php if (property_exists($activity, 'rules')) { ?>
                          <div class="col-auto">
                            <a class="btn btn-ffdiamond" href="/docs/2023/<?php echo $activity->rules; ?>" role="button">
                              <?php echo $lang["lang.activities.btn.rules"]; ?>
                            </a>
                          </div>
                        <?php } ?>

                        <?php if (property_exists($activity, 'register')) { ?>
                          <div class="col-auto">
                            <a class="btn btn-ffsunlight" href="<?php echo $activity->register; ?>" role="button">
                              <?php echo $lang["lang.activities.btn.register"]; ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>