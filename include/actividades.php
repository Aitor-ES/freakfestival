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

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.rpg.aquelarre.abadia.title"]; ?></h4>
                  <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.valinor"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.rpg.aquelarre.abadia.description.1"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.rpg.aquelarre.abadia.description.2"]; ?></p>

                  <!-- <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffsunlight" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div> -->
                </div>
              </li>
            </ul>

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.rpg.vampiro.monstruo.title"]; ?></h4>
                  <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.valinor"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.rpg.vampiro.monstruo.description"]; ?></p>

                  <!-- <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffsunlight" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div> -->
                </div>
              </li>
            </ul>

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.rpg.vampiro.sangre.title"]; ?></h4>
                  <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.klaudia"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.rpg.vampiro.sangre.description.1"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.rpg.vampiro.sangre.description.2"]; ?></p>

                  <!-- <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffsunlight" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div> -->
                </div>
              </li>
            </ul>

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.rpg.cultos.corben.title"]; ?></h4>
                  <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.klaudia"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.rpg.cultos.corben.description"]; ?></p>

                  <!-- <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffsunlight" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div> -->
                </div>
              </li>
            </ul>

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.rpg.asfalto.goma.title"]; ?></h4>
                  <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.seijo"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.rpg.asfalto.goma.description"]; ?></p>

                  <!-- <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffsunlight" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div> -->
                </div>
              </li>
            </ul>

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

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.contests.pintado-miniaturas.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.2023.contests.pintado-miniaturas.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffdiamond" href="/docs/2023/Bases de los concursos de miniaturas y dioramas.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.contests.dioramas.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.2023.contests.dioramas.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffdiamond" href="/docs/2023/Bases de los concursos de miniaturas y dioramas.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

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

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.2023.talks-exhibitions.editar-rol.title"]; ?></h4>
                  <p class="text-muted"><?php echo $lang["lang.activities.organizer"] . $lang["lang.activities.organizer.seijo-ikan"]; ?></p>
                  <p><?php echo $lang["lang.activities.2023.talks-exhibitions.editar-rol.description"]; ?></p>

                  <!-- <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffsunlight" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div> -->
                </div>
              </li>
            </ul>

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