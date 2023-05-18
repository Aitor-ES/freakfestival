<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.activities.title"]; ?></h1>

    <div class="accordion" id="accordion-activities">
      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-board-games">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-board-games" aria-expanded="false" aria-controls="collapse-board-games">
            <?php echo $lang["lang.activities.board-games.title"]; ?>
          </button>
        </h2>
        <div id="collapse-board-games" class="accordion-collapse collapse" aria-labelledby="heading-board-games" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.board-games.description"]; ?></p>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

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

      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-rpg">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-rpg" aria-expanded="false" aria-controls="collapse-rpg">
            <?php echo $lang["lang.activities.rpg.title"]; ?>
          </button>
        </h2>
        <div id="collapse-rpg" class="accordion-collapse collapse" aria-labelledby="heading-rpg" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.rpg.description"]; ?></p>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-contests">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-contests" aria-expanded="false" aria-controls="collapse-contests">
            <?php echo $lang["lang.activities.contests.title"]; ?>
          </button>
        </h2>
        <div id="collapse-contests" class="accordion-collapse collapse" aria-labelledby="heading-contests" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.contests.description"]; ?></p>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-stands">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-stands" aria-expanded="false" aria-controls="collapse-stands">
            <?php echo $lang["lang.activities.shops-artists-artisans.title"]; ?>
          </button>
        </h2>
        <div id="collapse-stands" class="accordion-collapse collapse" aria-labelledby="heading-stands" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.shops-artists-artisans.description"]; ?></p>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-talks">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-talks" aria-expanded="false" aria-controls="collapse-talks">
            <?php echo $lang["lang.activities.talks-exhibitions.title"]; ?>
          </button>
        </h2>
        <div id="collapse-talks" class="accordion-collapse collapse" aria-labelledby="heading-talks" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.talks-exhibitions.description"]; ?></p>

            <div class="text-center">
              <h3 class="my-5"><?php echo $lang["lang.common.soon"]; ?></h3>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item border-0 my-3">
        <h2 class="accordion-header" id="heading-workshops">
          <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-workshops" aria-expanded="false" aria-controls="collapse-workshops">
            <?php echo $lang["lang.activities.workshops.title"]; ?>
          </button>
        </h2>
        <div id="collapse-workshops" class="accordion-collapse collapse" aria-labelledby="heading-workshops" data-bs-parent="#accordion-activities">
          <div class="accordion-body">
            <p><?php echo $lang["lang.activities.workshops.description"]; ?></p>

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