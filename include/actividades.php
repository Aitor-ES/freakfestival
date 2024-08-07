<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$categoryName.title"]; ?></h1>
      <p class="ff-lead"><?php echo $lang["lang.activities.$categoryName.description"]; ?></p>
    </div>

    <?php if (in_array($categoryName, ["talks-exhibitions", "book-releases", "others"])) { ?>
      <div class="callout callout-info mb-5"><?php echo $lang["lang.activities.callout.registration.open"]; ?></div>
    <?php } else { ?>
      <div class="callout callout-info mb-5">
        <p><?php echo $lang["lang.activities.callout.registration.details"]; ?></p>
        <ul>
          <li><?php echo $lang["lang.activities.callout.registration.details.list.friday"]; ?></li>
          <li><?php echo $lang["lang.activities.callout.registration.details.list.saturday.morning"]; ?></li>
          <li><?php echo $lang["lang.activities.callout.registration.details.list.saturday.afternoon"]; ?></li>
          <li><?php echo $lang["lang.activities.callout.registration.details.list.sunday"]; ?></li>
        </ul>
      </div>
    <?php } ?>

    <div class="callout callout-info mb-5"><?php echo $lang["lang.activities.callout.children"]; ?></div>

    <ul class="list-group list-group-flush">
      <?php foreach ($activityCategory->activities as $activity) { ?>
        <li class="list-group-item">
          <div class="row justify-content-center gy-4 gx-5">
            <!-- Activity image -->
            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-start">
              <img class="activity-img" src="/images/activities/<?php echo $activity->activityImage ?>" alt="<?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>" width="200" height="200">
            </div>

            <!-- Activity main content -->
            <div class="col-12 col-lg-6">
              <!-- Activity title -->
              <h2 id="<?php echo $activity->activityName; ?>" class="mb-4">
                <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>
                <a class="anchor-link" href="#<?php echo $activity->activityName; ?>" aria-label="Link to this section: <?php echo $lang["lang.activities.$categoryName.$activity->activityName.title"]; ?>"></a>
              </h2>

              <!-- Activity info -->
              <div class="row row-cols-2 row-cols-sm-4 text-center gy-4 mb-4">
                <!-- Activity date -->
                <div class="col d-flex flex-column align-items-center row-gap-1">
                  <i class="bi bi-clock fs-1 text-ffscarlet"></i>
                  <?php
                    if (property_exists($activity, 'timetable')) {
                      foreach ($activity->timetable as $dayTime) { ?>
                    <div>
                      <?php echo $lang["lang.activities.timetable.day.$dayTime->day"]; ?>
                      <br>
                      <?php echo "$dayTime->time"; ?>
                    </div>
                  <?php
                      }
                    } else {
                      echo $lang["lang.activities.timetable.continuous"];
                    }
                  ?>
                </div>

                <!-- Activity seats -->
                <div class="col d-flex flex-column align-items-center row-gap-1">
                  <i class="bi bi-people fs-1 text-ffscarlet"></i>
                  <?php
                    $participants = $activity->participants;
                    if (is_numeric($participants)) echo "$participants {$lang["lang.activities.participants"]}";
                    else echo $lang["lang.activities.participants.$participants"];
                  ?>
                </div>

                <!-- Activity age -->
                <div class="col d-flex flex-column align-items-center row-gap-1">
                  <i class="bi bi-person-exclamation fs-1 text-ffscarlet"></i>
                  <?php
                    $age = $activity->age;
                    if (is_numeric($age)) echo "+$age {$lang["lang.activities.age.years-old"]}";
                    else echo $lang["lang.activities.age.$age"];
                  ?>
                </div>

                <!-- Activity language -->
                <div class="col d-flex flex-column align-items-center row-gap-1">
                  <i class="bi bi-translate fs-1 text-ffscarlet"></i>
                  <?php echo $lang["lang.activities.lang.$activity->lang"]; ?>
                </div>
              </div>

              <!-- Activity description -->
              <p><?php echo $lang["lang.activities.$categoryName.$activity->activityName.description"]; ?></p>

              <!-- Activity links -->
              <div class="row gy-3 mb-3">
                <?php if (property_exists($activity, 'rules')) { ?>
                  <div class="col-auto">
                    <a class="btn btn-ffglacier" href="/docs/<?php echo $activity->rules; ?>" role="button">
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

            <!-- Activity organizer -->
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center row-gap-4">
              <?php if (property_exists($activity, 'organizerImage')) { ?>
                <img class="organizer-img" src="/images/organizers/<?php echo $activity->organizerImage ?>" alt="<?php echo $lang["lang.activities.organizer.$activity->organizer"]; ?>" width="200" height="200">
              <?php } ?>

              <div class="d-flex flex-column row-gap-3 text-center">
                <small class="text-body-secondary"><?php echo $lang["lang.activities.organizer"]; ?></small>
                <span class="fs-3 fw-medium"><?php echo $lang["lang.activities.organizer.$activity->organizer"]; ?></span>
              </div>
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