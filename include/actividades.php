<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$curPageName.title"]; ?> (2024)</h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.activities.$curPageName.description"]; ?></p>
    </div>

    <ul class="filters list-group list-group-flush mb-5">
      <li class="list-group-item">
        <h5 class="mb-3">
          <i class="bi bi-dice-5 text-ffscarlet fs-4 me-3"></i>
          <?php echo $lang["lang.activities.type"]; ?>
        </h5>

        <ul class="nav nav-pills pills-tab column-gap-2 row-gap-3" id="pills-type-tab" role="tablist">
          <li role="presentation">
            <button class="btn btn-outline-ffscarlet btn-sm active" id="pills-type-all-tab" data-bs-toggle="pill"
              type="button" role="tab" aria-selected="true" onclick="setActivityFilter('type-all')">
              <?php echo $lang["lang.activities.filters.all"]; ?>
            </button>
          </li>

          <?php $activityCategories = array_unique(array_column($activities, "type"));
          sort($activityCategories);
          foreach ($activityCategories as $type) { ?>
              <li role="presentation">
                <button class="btn btn-outline-ffscarlet btn-sm" id="pills-type-<?php echo $type; ?>-tab"
                  data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                  onclick="setActivityFilter('type-<?php echo $type; ?>')">
                  <?php echo $lang["lang.activities.$type.title"]; ?>
                </button>
              </li>
          <?php } ?>
        </ul>
      </li>

      <li class="list-group-item">
        <h5 class="mb-3">
          <i class="bi bi-calendar-event text-ffscarlet fs-4 me-3"></i>
          <?php echo $lang["lang.activities.timetable.day"]; ?>
        </h5>

        <ul class="nav nav-pills pills-tab column-gap-2 row-gap-3" id="pills-date-tab" role="tablist">
          <li role="presentation">
            <button class="btn btn-outline-ffscarlet btn-sm active" id="pills-date-all-tab" data-bs-toggle="pill"
              type="button" role="tab" aria-selected="true" onclick="setActivityFilter('date-all')">
              <?php echo $lang["lang.activities.filters.all"]; ?>
            </button>
          </li>

          <?php $activityTimetables = array_map(
            fn($activity): array => property_exists($activity, "timetable") ? array_column($activity->timetable, "day") : array("continuous"),
            $activities,
          );
          $activityTimetables = array_unique(array_merge(...$activityTimetables));
          sort($activityTimetables);
          foreach ($activityTimetables as $activityTimetable) { ?>
              <li role="presentation">
                <button class="btn btn-outline-ffscarlet btn-sm" id="pills-date-<?php echo $activityTimetable; ?>-tab"
                  data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                  onclick="setActivityFilter('date-<?php echo $activityTimetable; ?>')">
                  <?php echo $lang["lang.activities.timetable.$activityTimetable"]; ?>
                </button>
              </li>
          <?php } ?>
        </ul>
      </li>

      <li class="list-group-item">
        <h5 class="mb-3">
          <i class="bi bi-translate text-ffscarlet fs-4 me-3"></i>
          <?php echo $lang["lang.activities.lang.language"]; ?>
        </h5>

        <ul class="nav nav-pills pills-tab column-gap-2 row-gap-3" id="pills-lang-tab" role="tablist">
          <li role="presentation">
            <button class="btn btn-outline-ffscarlet btn-sm active" id="pills-lang-all-tab" data-bs-toggle="pill"
              type="button" role="tab" aria-selected="true" onclick="setActivityFilter('lang-all')">
              <?php echo $lang["lang.activities.filters.all"]; ?>
            </button>
          </li>

          <?php $activityLangs = array_unique(array_column($activities, "lang"));
          sort($activityLangs);
          foreach ($activityLangs as $activityLang) { ?>
              <li role="presentation">
                <button class="btn btn-outline-ffscarlet btn-sm" id="pills-lang-<?php echo $activityLang; ?>-tab"
                  data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                  onclick="setActivityFilter('lang-<?php echo $activityLang; ?>')">
                  <?php echo $lang["lang.activities.lang.$activityLang"]; ?>
                </button>
              </li>
          <?php } ?>
        </ul>
      </li>
    </ul>

    <ul class="activities list-group list-group-flush">
      <?php foreach ($activities as $activity) { ?>
          <li class="list-group-item activity-container <?php echo "type-$activity->type ";
          if (property_exists($activity, 'timetable')) {
            foreach ($activity->timetable as $dayTime) {
              echo "date-$dayTime->day ";
            }
          } else {
            echo "date-continuous ";
          }
          echo "lang-$activity->lang"; ?>">
            <div class="row justify-content-center gy-4 gx-5">
              <!-- Activity image -->
              <div class="col-12 col-lg-3 d-flex justify-content-center align-items-start">
                <?php if (property_exists($activity, 'image')) { ?>
                    <img class="activity-img" src="/images/activities/<?php echo $activity->image ?>"
                      alt="<?php echo $lang["lang.activities.$activity->type.$activity->name.title"]; ?>" width="200"
                      height="200">
                <?php } ?>
              </div>

              <!-- Activity main content -->
              <div class="col-12 col-lg-6">
                <!-- Activity title -->
                <h2 id="<?php echo $activity->name; ?>" class="mb-4">
                  <?php echo $lang["lang.activities.$activity->type.$activity->name.title"]; ?>
                  <a class="anchor-link" href="#<?php echo $activity->name; ?>"
                    aria-label="Link to this section: <?php echo $lang["lang.activities.$activity->type.$activity->name.title"]; ?>"></a>
                </h2>

                <!-- Activity info -->
                <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-2 row-cols-xl-3 g-4 mb-4">
                  <!-- Activity type -->
                  <div class="col d-flex align-items-center column-gap-3">
                    <i class="bi bi-dice-5 fs-2 text-ffscarlet"></i>
                    <?php echo $lang["lang.activities.$activity->type.title"]; ?>
                  </div>

                  <!-- Activity date -->
                  <div class="col d-flex align-items-center column-gap-3">
                    <i class="bi bi-clock fs-2 text-ffscarlet"></i>
                    <?php if (property_exists($activity, 'timetable')) { ?>
                        <div>
                          <?php foreach ($activity->timetable as $dayTime) { ?>
                              <?php echo $lang["lang.activities.timetable.$dayTime->day"]; ?>
                              <br>
                              <?php echo "$dayTime->time"; ?>
                              <br>
                          <?php } ?>
                        </div>
                    <?php } else {
                      echo $lang["lang.activities.timetable.continuous"];
                    } ?>
                  </div>

                  <!-- Activity seats -->
                  <div class="col d-flex align-items-center column-gap-3">
                    <i class="bi bi-people fs-2 text-ffscarlet"></i>
                    <?php $participants = $activity->participants;
                    if (is_numeric($participants))
                      echo "$participants {$lang["lang.activities.participants"]}";
                    else
                      echo $lang["lang.activities.participants.$participants"]; ?>
                  </div>

                  <!-- Activity age -->
                  <div class="col d-flex align-items-center column-gap-3">
                    <i class="bi bi-person-check fs-2 text-ffscarlet"></i>
                    <?php $age = $activity->age;
                    if (is_numeric($age))
                      echo "+$age {$lang["lang.activities.age.years-old"]}";
                    else
                      echo $lang["lang.activities.age.$age"]; ?>
                  </div>

                  <!-- Activity language -->
                  <div class="col d-flex align-items-center column-gap-3">
                    <i class="bi bi-translate fs-2 text-ffscarlet"></i>
                    <?php echo $lang["lang.activities.lang.$activity->lang"]; ?>
                  </div>
                </div>

                <!-- Activity description -->
                <p><?php echo $lang["lang.activities.$activity->type.$activity->name.description"]; ?></p>

                <!-- Activity links -->
                <div class="row gy-3">
                  <?php if (property_exists($activity, 'rules')) { ?>
                      <div class="col-auto">
                        <a class="btn btn-outline-ffscarlet rounded-pill" href="/docs/<?php echo $activity->rules; ?>"
                          role="button">
                          <i class="bi bi-filetype-pdf me-1"></i>
                          <?php echo $lang["lang.activities.btn.rules"]; ?>
                        </a>
                      </div>
                  <?php } ?>

                  <?php if (property_exists($activity, 'register')) { ?>
                      <div class="col-auto">
                        <a class="btn btn-ffscarlet rounded-pill" href="<?php echo $activity->register; ?>" role="button">
                          <?php echo $lang["lang.activities.btn.register"]; ?>
                          <i class="bi bi-chevron-right ms-1"></i>
                        </a>
                      </div>
                  <?php } ?>
                </div>
              </div>

              <!-- Activity organizer -->
              <div class="col-12 col-lg-3 d-flex flex-column align-items-center row-gap-4">
                <?php if (property_exists($activity, 'organizerImage')) { ?>
                    <img class="organizer-img" src="/images/contributors/<?php echo $activity->organizerImage ?>"
                      alt="<?php echo $lang["lang.activities.organizer.$activity->organizer"]; ?>" width="200" height="200">
                <?php } ?>

                <div class="d-flex flex-column row-gap-2 text-center">
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
  <?php include "footer.php"; ?>
  <!-- Footer End -->

  <!-- Activities JS -->
  <script src="/js/actividades.js"></script>
</body>
