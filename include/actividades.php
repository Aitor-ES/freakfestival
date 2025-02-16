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

    <h2 class="mb-4"><?php echo $lang["lang.activities.faq.title"]; ?></h2>

    <div class="accordion accordion-flush mb-5" id="accordionFlushFaq">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <?php echo $lang["lang.activities.faq.registration.question"]; ?>
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse">
          <div class="accordion-body">
            <div class="alert alert-ffglacier mb-0" role="alert">
              <p><?php echo $lang["lang.activities.faq.registration.answer.details"]; ?></p>
              <ul>
                <li><?php echo $lang["lang.activities.faq.registration.answer.details.friday"]; ?></li>
                <li><?php echo $lang["lang.activities.faq.registration.answer.details.saturday.morning"]; ?></li>
                <li><?php echo $lang["lang.activities.faq.registration.answer.details.saturday.afternoon"]; ?></li>
                <li><?php echo $lang["lang.activities.faq.registration.answer.details.sunday"]; ?></li>
              </ul>
              <p class="mb-0"><?php echo $lang["lang.activities.faq.registration.answer.open"]; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            <?php echo $lang["lang.activities.faq.children.question"]; ?>
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse">
          <div class="accordion-body">
            <div class="alert alert-ffglacier mb-0" role="alert">
              <?php echo $lang["lang.activities.faq.children.answer"]; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <?php echo $lang["lang.activities.faq.rpg.question"]; ?>
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse">
          <div class="accordion-body">
            <div class="alert alert-ffglacier mb-0" role="alert">
              <?php echo $lang["lang.activities.faq.rpg.answer"]; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <ul class="filters list-group list-group-flush mb-5">
      <li class="list-group-item">
        <h5 class="mb-3"><i class="bi bi-dice-6 text-ffscarlet fs-4 me-3"></i><?php echo $lang["lang.activities.type"]; ?></h5>

        <ul class="nav nav-pills pills-tab column-gap-2 row-gap-3" id="pills-type-tab" role="tablist">
          <li role="presentation">
            <button class="btn btn-outline-ffscarlet btn-sm active" id="pills-type-all-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true"
              onclick="setActivityFilter('type-all')">
              <?php echo $lang["lang.activities.filters.all"]; ?>
            </button>
          </li>

          <?php $activityCategories = array_unique(array_column($activityCategory->activities, "activityCategory"));
          sort($activityCategories);
          foreach ($activityCategories as $activityCategoriesItem) { ?>
            <li role="presentation">
              <button class="btn btn-outline-ffscarlet btn-sm" id="pills-type-<?php echo $activityCategoriesItem; ?>-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                onclick="setActivityFilter('type-<?php echo $activityCategoriesItem; ?>')">
                <?php echo $lang["lang.activities.$activityCategoriesItem.title"]; ?>
              </button>
            </li>
          <?php } ?>
        </ul>
      </li>

      <li class="list-group-item">
        <h5 class="mb-3"><i class="bi bi-calendar-event text-ffscarlet fs-4 me-3"></i><?php echo $lang["lang.activities.timetable.day"]; ?></h5>

        <ul class="nav nav-pills pills-tab column-gap-2 row-gap-3" id="pills-date-tab" role="tablist">
          <li role="presentation">
            <button class="btn btn-outline-ffscarlet btn-sm active" id="pills-date-all-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true"
              onclick="setActivityFilter('date-all')">
              <?php echo $lang["lang.activities.filters.all"]; ?>
            </button>
          </li>

          <?php $activityTimetables = array_map(
            fn($activity): array => property_exists($activity, "timetable") ? array_column($activity->timetable, "day") : array("continuous"),
            $activityCategory->activities,
          );
          $activityTimetables = array_unique(array_merge(...$activityTimetables));
          sort($activityTimetables);
          foreach ($activityTimetables as $activityTimetable) { ?>
            <li role="presentation">
              <button class="btn btn-outline-ffscarlet btn-sm" id="pills-date-<?php echo $activityTimetable; ?>-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                onclick="setActivityFilter('date-<?php echo $activityTimetable; ?>')">
                <?php echo $lang["lang.activities.timetable.$activityTimetable"]; ?>
              </button>
            </li>
          <?php } ?>
        </ul>
      </li>

      <li class="list-group-item">
        <h5 class="mb-3"><i class="bi bi-translate text-ffscarlet fs-4 me-3"></i><?php echo $lang["lang.activities.lang.language"]; ?></h5>

        <ul class="nav nav-pills pills-tab column-gap-2 row-gap-3" id="pills-lang-tab" role="tablist">
          <li role="presentation">
            <button class="btn btn-outline-ffscarlet btn-sm active" id="pills-lang-all-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true"
              onclick="setActivityFilter('lang-all')">
              <?php echo $lang["lang.activities.filters.all"]; ?>
            </button>
          </li>

          <?php $activityLangs = array_unique(array_column($activityCategory->activities, "lang"));
          sort($activityLangs);
          foreach ($activityLangs as $activityLang) { ?>
            <li role="presentation">
              <button class="btn btn-outline-ffscarlet btn-sm" id="pills-lang-<?php echo $activityLang; ?>-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false"
                onclick="setActivityFilter('lang-<?php echo $activityLang; ?>')">
                <?php echo $lang["lang.activities.lang.$activityLang"]; ?>
              </button>
            </li>
          <?php } ?>
        </ul>
      </li>
    </ul>

    <!-- <div class="row row-cols-1 row-cols-md-1 g-4 mb-5">
      <div class="col">
        <div class="card">
          <img src="/images/ui/placeholder.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-infoOne" aria-expanded="false" aria-controls="flush-collapse-infoOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapse-infoOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
          </div>
          <div class="card-footer text-body-secondary">
            2 days ago
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="/images/ui/placeholder.png" class="card-img-top" alt="..." width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-infoTwo" aria-expanded="false" aria-controls="flush-collapse-infoTwo">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapse-infoTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
          </div>
          <div class="card-footer text-body-secondary">
            2 days ago
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="/images/ui/placeholder.png" class="card-img-top" alt="..." width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-infoThree" aria-expanded="false" aria-controls="flush-collapse-infoThree">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapse-infoThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
          </div>
          <div class="card-footer text-body-secondary">
            2 days ago
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="/images/ui/placeholder.png" class="card-img-top" alt="..." width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-infoFour" aria-expanded="false" aria-controls="flush-collapse-infoFour">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapse-infoFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
          </div>
          <div class="card-footer text-body-secondary">
            2 days ago
          </div>
        </div>
      </div>
    </div> -->

    <ul class="activities list-group list-group-flush">
      <?php foreach ($activityCategory->activities as $activity) { ?>
        <li class="list-group-item activity-container <?php echo "type-$activity->activityCategory ";
                                                      if (property_exists($activity, 'timetable')) {
                                                        foreach ($activity->timetable as $dayTime) echo "date-$dayTime->day ";
                                                      } else {
                                                        echo "date-continuous ";
                                                      }
                                                      echo "lang-$activity->lang"; ?>">
          <div class="row justify-content-center gy-4 gx-5">
            <!-- Activity image -->
            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-start">
              <?php if (property_exists($activity, 'activityImage')) { ?>
                <img class="activity-img" src="/images/activities/<?php echo $activity->activityImage ?>" alt="<?php echo $lang["lang.activities.$activity->activityCategory.$activity->activityName.title"]; ?>" width="200" height="200">
              <?php } ?>
            </div>

            <!-- Activity main content -->
            <div class="col-12 col-lg-6">
              <!-- Activity title -->
              <h2 id="<?php echo $activity->activityName; ?>" class="mb-4">
                <?php echo $lang["lang.activities.$activity->activityCategory.$activity->activityName.title"]; ?>
                <a class="anchor-link" href="#<?php echo $activity->activityName; ?>" aria-label="Link to this section: <?php echo $lang["lang.activities.$activity->activityCategory.$activity->activityName.title"]; ?>"></a>
              </h2>

              <!-- Activity info -->
              <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-2 row-cols-xl-3 g-4 mb-4">
                <!-- Activity type -->
                <div class="col d-flex align-items-center column-gap-3">
                  <i class="bi bi-dice-6 fs-2 text-ffscarlet"></i>
                  <?php echo $lang["lang.activities.$activity->activityCategory.title"]; ?>
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
                  if (is_numeric($participants)) echo "$participants {$lang["lang.activities.participants"]}";
                  else echo $lang["lang.activities.participants.$participants"]; ?>
                </div>

                <!-- Activity age -->
                <div class="col d-flex align-items-center column-gap-3">
                  <i class="bi bi-person-check fs-2 text-ffscarlet"></i>
                  <?php $age = $activity->age;
                  if (is_numeric($age)) echo "+$age {$lang["lang.activities.age.years-old"]}";
                  else echo $lang["lang.activities.age.$age"]; ?>
                </div>

                <!-- Activity language -->
                <div class="col d-flex align-items-center column-gap-3">
                  <i class="bi bi-translate fs-2 text-ffscarlet"></i>
                  <?php echo $lang["lang.activities.lang.$activity->lang"]; ?>
                </div>
              </div>

              <!-- Activity description -->
              <p><?php echo $lang["lang.activities.$activity->activityCategory.$activity->activityName.description"]; ?></p>

              <!-- Activity links -->
              <div class="row gy-3">
                <?php if (property_exists($activity, 'rules')) { ?>
                  <div class="col-auto">
                    <a class="btn btn-outline-ffscarlet rounded-pill" href="/docs/<?php echo $activity->rules; ?>" role="button">
                      <i class="bi bi-filetype-pdf me-1"></i>
                      <?php echo $lang["lang.activities.btn.rules"]; ?>
                    </a>
                  </div>
                <?php } ?>

                <?php if (property_exists($activity, 'register')) { ?>
                  <div class="col-auto">
                    <a class="btn btn-ffglacier rounded-pill" href="<?php echo $activity->register; ?>" role="button">
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
                <img class="organizer-img" src="/images/contributors/<?php echo $activity->organizerImage ?>" alt="<?php echo $lang["lang.activities.organizer.$activity->organizer"]; ?>" width="200" height="200">
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

  <!-- Activities JS -->
  <script src="/js/actividades.js"></script>
</body>