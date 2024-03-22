<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.activities.$categoryName.title"]; ?></h1>

    <p class="lead mb-5"><?php echo $lang["lang.activities.$categoryName.description"]; ?></p>

    <?php if (in_array($categoryName, ["talks-exhibitions", "book-releases"])) { ?>
      <div class="callout callout-info mb-5"><?php echo $lang["lang.activities.$categoryName.callout"]; ?></div>
    <?php } ?>

    <ul class="list-group list-group-flush">
      <?php foreach ($activityCategory->activities as $activity) { ?>
        <li class="list-group-item pb-5 mb-5">
          <div class="row gy-5">
            <!-- Activity image and links -->
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center row-gap-5 text-center">
              <!-- Activity image -->
              <div>
                <img class="home-feature-img rounded-circle" src="/images/placeholder.png" alt="" width="200" height="200">
              </div>

              <!-- Activity links -->
              <div class="d-flex flex-column align-items-center row-gap-4">
                <?php if (property_exists($activity, 'rules')) { ?>
                  <a class="btn btn-ffdiamond" href="/docs/2023/<?php echo $activity->rules; ?>" role="button">
                    <?php echo $lang["lang.activities.btn.rules"]; ?>
                  </a>
                <?php } ?>

                <?php if (property_exists($activity, 'register')) { ?>
                  <a class="btn btn-ffsunlight" href="<?php echo $activity->register; ?>" role="button">
                    <?php echo $lang["lang.activities.btn.register"]; ?>
                  </a>
                <?php } ?>
              </div>
            </div>

            <!-- Activity main content -->
            <div class="col-12 col-lg-6">
              <!-- Activity title -->
              <h2 class="mb-5"><?php echo $lang["lang.activities.2023.$categoryName.$activity->activityName.title"]; ?></h2>

              <!-- Activity info -->
              <div class="row row-cols-3 gy-5 mb-5">
                <!-- Activity date -->
                <div class="col d-flex flex-column align-items-center">
                  <i class="bi bi-calendar-event fs-1 text-ffscarlet"></i>
                  <span>Día</span>
                </div>

                <!-- Activity time -->
                <div class="col d-flex flex-column align-items-center">
                  <i class="bi bi-clock fs-1 text-ffscarlet"></i>
                  <span>Hora</span>
                </div>

                <!-- Activity location -->
                <div class="col d-flex flex-column align-items-center">
                  <i class="bi bi-geo fs-1 text-ffscarlet"></i>
                  <span>Sala</span>
                </div>

                <!-- Activity seats -->
                <div class="col d-flex flex-column align-items-center">
                  <i class="bi bi-people fs-1 text-ffscarlet"></i>
                  <span>Participantes</span>
                </div>

                <!-- Activity age -->
                <div class="col d-flex flex-column align-items-center">
                  <i class="bi bi-person-exclamation fs-1 text-ffscarlet"></i>
                  <span>Edad</span>
                </div>

                <!-- Activity language -->
                <div class="col d-flex flex-column align-items-center">
                  <i class="bi bi-translate fs-1 text-ffscarlet"></i>
                  <span>Idioma</span>
                </div>
              </div>

              <!-- Activity description -->
              <p><?php echo $lang["lang.activities.2023.$categoryName.$activity->activityName.description"]; ?></p>
            </div>

            <!-- Activity organizer -->
            <div class="col-12 col-lg-3 text-center">
              <img class="home-feature-img rounded-circle mb-4" src="/images/placeholder.png" alt="" width="200" height="200">
              <p class="text-body-secondary"><?php echo $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
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