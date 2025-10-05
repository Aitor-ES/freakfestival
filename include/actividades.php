<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.activities.$curPageName.title"]; ?></h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.activities.$curPageName.description"]; ?></p>
    </div>

    <?php if (!$activities) { ?>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center">
        <div class="col">
          <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
            <p class="text-center fs-3 my-3"><strong><?php echo $lang["lang.common.wip"]; ?></strong></p>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <!-- Filters Start -->
      <ul class="filters list-group list-group-flush mb-5">
        <!-- Filter by type -->
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

        <!-- Filter by day -->
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

            <?php foreach (["continuous", "friday", "saturday", "sunday"] as $activityDay) { ?>
              <li role="presentation">
                <button class="btn btn-outline-ffscarlet btn-sm" id="pills-date-<?php echo $activityDay; ?>-tab"
                  data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                  onclick="setActivityFilter('date-<?php echo $activityDay; ?>')">
                  <?php echo $lang["lang.activities.timetable.$activityDay"]; ?>
                </button>
              </li>
            <?php } ?>
          </ul>
        </li>

        <!-- Filter by age -->
        <li class="list-group-item">
          <h5 class="mb-3">
            <i class="bi bi-person-check text-ffscarlet fs-4 me-3"></i>
            <?php echo $lang["lang.activities.age"]; ?>
          </h5>

          <ul class="nav nav-pills pills-tab column-gap-2 row-gap-3" id="pills-age-tab" role="tablist">
            <li role="presentation">
              <button class="btn btn-outline-ffscarlet btn-sm active" id="pills-age-all-tab" data-bs-toggle="pill"
                type="button" role="tab" aria-selected="true" onclick="setActivityFilter('age-all')">
                <?php echo $lang["lang.activities.filters.all"]; ?>
              </button>
            </li>

            <?php $activityAges = array_unique(array_merge(...array_column($activities, "age")));
            foreach ($activityAges as $activityAge) { ?>
              <li role="presentation">
                <button class="btn btn-outline-ffscarlet btn-sm" id="pills-age-<?php echo $activityAge; ?>-tab"
                  data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                  onclick="setActivityFilter('age-<?php echo $activityAge; ?>')">
                  <?php echo $lang["lang.activities.age.$activityAge"]; ?>
                </button>
              </li>
            <?php } ?>
          </ul>
        </li>

        <!-- Filter by language -->
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

            <?php foreach (["es", "eu"] as $activityLang) { ?>
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
      <!-- Filters End -->

      <ul class="activities list-group list-group-flush">
        <?php foreach ($activities as $activity) {
          if ($lang["lang"] == "eu") {
            $activityName = $activity->nameEU;
            $activityDescription = $activity->descriptionEU;
          } else {
            $activityName = $activity->nameES;
            $activityDescription = $activity->descriptionES;
          } ?>
          <li class="list-group-item activity-container <?php echo "type-$activity->type";
          if (property_exists($activity, 'day')) {
            echo " date-$activity->day";
          } else {
            echo " date-continuous";
          }
          foreach ($activity->age as $activityAge) {
            echo " age-$activityAge";
          }
          foreach ($activity->lang as $activityLang) {
            echo " lang-$activityLang";
          } ?>">
            <div class="row justify-content-center gy-4 gx-5">
              <!-- Activity image -->
              <div class="col-12 col-lg-3 d-flex justify-content-center align-items-start">
                <?php if (property_exists($activity, 'image')) { ?>
                  <img class="activity-img" src="<?php echo $activity->image ?>" width="200" height="200">
                <?php } ?>
              </div>

              <!-- Activity main content -->
              <div class="col-12 col-lg-6">
                <!-- Activity title -->
                <h2 id="<?php echo $activityName; ?>" class="mb-4">
                  <?php echo $activityName; ?>
                  <a class="anchor-link" href="#<?php echo $activityName; ?>"
                    aria-label="Link to this section: <?php echo $activityName; ?>"></a>
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
                    <i class="bi bi-calendar2-check fs-2 text-ffscarlet"></i>
                    <?php if (property_exists($activity, 'day') && property_exists($activity, 'time')) {
                      echo $lang["lang.activities.timetable.$activity->day"]; ?>
                      <br>
                      <?php echo $activity->time;
                    } else {
                      echo $lang["lang.activities.timetable.continuous"];
                    } ?>
                  </div>

                  <!-- Activity duration -->
                  <div class="col d-flex align-items-center column-gap-3">
                    <i class="bi bi-clock fs-2 text-ffscarlet"></i>
                    <?php if (property_exists($activity, 'duration')) {
                      echo $activity->duration;
                    } else {
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
                    <?php if ($activity->age == ["children", "teenagers", "adults"])
                      echo $lang["lang.activities.age.all"];
                    else
                      foreach ($activity->age as $age) {
                        echo $lang["lang.activities.age.$age"]; ?>
                        <br>
                      <?php } ?>
                  </div>

                  <!-- Activity language -->
                  <div class="col d-flex align-items-center column-gap-3">
                    <i class="bi bi-translate fs-2 text-ffscarlet"></i>
                    <?php if ($activity->lang == ["es", "eu"])
                      echo $lang["lang.activities.lang.both"];
                    else
                      echo $lang["lang.activities.lang.{$activity->lang[0]}"]; ?>
                  </div>
                </div>

                <!-- Activity description -->
                <p><?php echo $activityDescription; ?></p>

                <!-- Activity links -->
                <div class="row gy-3">
                  <?php if (property_exists($activity, 'rules')) { ?>
                    <div class="col-auto">
                      <a class="btn btn-outline-ffscarlet rounded-pill" href="<?php echo $activity->rules; ?>"
                        target="_blank">
                        <i class="bi bi-filetype-pdf me-1"></i>
                        <?php echo $lang["lang.activities.btn.rules"]; ?>
                      </a>
                    </div>
                  <?php } ?>

                  <?php if (property_exists($activity, 'register')) { ?>
                    <div class="col-auto">
                      <a class="btn btn-ffscarlet rounded-pill" href="<?php echo $activity->register; ?>" target="_blank">
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
                  <img class="organizer-img" src="<?php echo $activity->organizerImage ?>" width="200" height="200">
                <?php } ?>

                <?php if (property_exists($activity, 'organizer')) { ?>
                  <div class="d-flex flex-column row-gap-2 text-center">
                    <small class="text-body-secondary"><?php echo $lang["lang.activities.organizer"]; ?></small>
                    <span class="fs-3 fw-medium"><?php echo $activity->organizer; ?></span>
                  </div>
                <?php } ?>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->

  <!-- Activities JS -->
  <script src="/js/actividades.js"></script>
</body>
