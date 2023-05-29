<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.activities.title"]; ?></h1>

    <div class="accordion" id="accordion-activities">
      <?php $activityCategories = json_decode(file_get_contents(__DIR__ . '/actividades-2023.json')); ?>

      <!-- Board games -->
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-board-games">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-board-games" aria-expanded="false" aria-controls="collapse-board-games">
            <?php echo $lang["lang.activities.board-games.title"]; ?>
          </button>
        </h2>
        <div id="collapse-board-games" class="accordion-collapse collapse" aria-labelledby="heading-board-games" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.board-games.description"]; ?></p>

            <ul class="list-group list-group-flush">
              <?php foreach ($activityCategories[0]->activities as $activity) { ?>
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3"><?php echo $lang["lang.activities.2023.board-games.$activity->activityName.title"]; ?></h4>
                    <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
                    <p><?php echo $lang["lang.activities.2023.board-games.$activity->activityName.description"]; ?></p>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Tournaments -->
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-tournaments">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-tournaments" aria-expanded="false" aria-controls="collapse-tournaments">
            <?php echo $lang["lang.activities.tournaments.title"]; ?>
          </button>
        </h2>
        <div id="collapse-tournaments" class="accordion-collapse collapse" aria-labelledby="heading-tournaments" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.tournaments.description"]; ?></p>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

      <!-- RPG -->
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-rpg">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-rpg" aria-expanded="false" aria-controls="collapse-rpg">
            <?php echo $lang["lang.activities.rpg.title"]; ?>
          </button>
        </h2>
        <div id="collapse-rpg" class="accordion-collapse collapse" aria-labelledby="heading-rpg" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.rpg.description"]; ?></p>

            <ul class="list-group list-group-flush">
              <?php foreach ($activityCategories[2]->activities as $activity) { ?>
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3"><?php echo $lang["lang.activities.2023.rpg.$activity->activityName.title"]; ?></h4>
                    <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
                    <p><?php echo $lang["lang.activities.2023.rpg.$activity->activityName.description"]; ?></p>
                  </div>
                </li>
              <?php } ?>
            </ul>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Contests -->
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-contests">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-contests" aria-expanded="false" aria-controls="collapse-contests">
            <?php echo $lang["lang.activities.contests.title"]; ?>
          </button>
        </h2>
        <div id="collapse-contests" class="accordion-collapse collapse" aria-labelledby="heading-contests" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.contests.description"]; ?></p>

            <ul class="list-group list-group-flush">
              <?php foreach ($activityCategories[3]->activities as $activity) { ?>
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3"><?php echo $lang["lang.activities.2023.contests.$activity->activityName.title"]; ?></h4>
                    <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
                    <p><?php echo $lang["lang.activities.2023.contests.$activity->activityName.description"]; ?></p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffdiamond" href="/docs/2023/<?php echo $activity->rules; ?>" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                      </div>
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Stands -->
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-stands">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-stands" aria-expanded="false" aria-controls="collapse-stands">
            <?php echo $lang["lang.activities.shops-artists-artisans.title"]; ?>
          </button>
        </h2>
        <div id="collapse-stands" class="accordion-collapse collapse" aria-labelledby="heading-stands" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.shops-artists-artisans.description"]; ?></p>
          </div>
        </div>
      </div>

      <!-- Talks -->
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-talks-exhibitions">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-talks-exhibitions" aria-expanded="false" aria-controls="collapse-talks">
            <?php echo $lang["lang.activities.talks-exhibitions.title"]; ?>
          </button>
        </h2>
        <div id="collapse-talks-exhibitions" class="accordion-collapse collapse" aria-labelledby="heading-talks-exhibitions" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.talks-exhibitions.description"]; ?></p>

            <ul class="list-group list-group-flush">
              <?php foreach ($activityCategories[5]->activities as $activity) { ?>
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3"><?php echo $lang["lang.activities.2023.talks-exhibitions.$activity->activityName.title"]; ?></h4>
                    <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
                    <p><?php echo $lang["lang.activities.2023.talks-exhibitions.$activity->activityName.description"]; ?></p>
                  </div>
                </li>
              <?php } ?>
            </ul>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Workshops -->
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-workshops">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-workshops" aria-expanded="false" aria-controls="collapse-workshops">
            <?php echo $lang["lang.activities.workshops.title"]; ?>
          </button>
        </h2>
        <div id="collapse-workshops" class="accordion-collapse collapse" aria-labelledby="heading-workshops" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.workshops.description"]; ?></p>

            <ul class="list-group list-group-flush">
              <?php foreach ($activityCategories[6]->activities as $activity) { ?>
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3"><?php echo $lang["lang.activities.2023.workshops.$activity->activityName.title"]; ?></h4>
                    <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.$activity->organizer"]; ?></p>
                    <p><?php echo $lang["lang.activities.2023.workshops.$activity->activityName.description"]; ?></p>
                  </div>
                </li>
              <?php } ?>
            </ul>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>