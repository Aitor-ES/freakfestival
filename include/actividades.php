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

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.tournaments.board-card-games.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.tournaments.board-card-games.description.1"]; ?></p>
                  <p><?php echo $lang["lang.activities.tournaments.board-card-games.description.2"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Bases juegos de mesa y cartas.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.tournaments.infinity.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.tournaments.infinity.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Bases TORNEO FREAK FESTIVAL22 Infinity.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.tournaments.smash.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.tournaments.smash.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Bases smash bros FF22.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.alien.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.alien.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.the-witcher.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.the-witcher.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.d&d.1.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.d&d.1.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.d&d.2.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.d&d.2.description"]; ?>.</p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.my-little-pony.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.my-little-pony.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.cthulhu.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.cthulhu.description.1"]; ?></p>
                  <p><?php echo $lang["lang.activities.rpg.cthulhu.description.2"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.cultos-innombrables.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.cultos-innombrables.description.1"]; ?></p>
                  <p><?php echo $lang["lang.activities.rpg.cultos-innombrables.description.2"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.1800.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.1800.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.symbaroum.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.symbaroum.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.rol-ochentero.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.rol-ochentero.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.rol-infantil.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.rol-infantil.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.crazy-rol.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.crazy-rol.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.olimpo.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.olimpo.description.1"]; ?></p>
                  <p><?php echo $lang["lang.activities.rpg.olimpo.description.2"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.rpg.viena-1914.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.rpg.viena-1914.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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
                  <h4 class="mb-3"><?php echo $lang["lang.activities.contests.cosplay.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.contests.cosplay.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Bases cosplay 22.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.contests.asian-dance-contest.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.contests.asian-dance-contest.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Bases KADC FreakFestival 2022.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://forms.gle/P1szQdB9QZfDz1LeA" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.contests.fast-painting.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.contests.fast-painting.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/FREAK FESTIVAL CONCURSO FAST PAINTING.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.contests.fast-fic.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.contests.fast-fic.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Bases fast fic.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.contests.fast-comic.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.contests.fast-comic.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Bases fast comic.pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.contests.pintado-miniaturas.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.contests.pintado-miniaturas.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Miniaturas, Dioramas (Bases).pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.contests.dioramas.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.contests.dioramas.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Miniaturas, Dioramas (Bases).pdf" role="button"><?php echo $lang["lang.activities.btn.rules"]; ?></a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.rev-que-es.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.rev-que-es.description"]; ?></p>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.rev-atrezzo-vestuario.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.rev-atrezzo-vestuario.description"]; ?></p>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.cosplay-maquillaje-caracterizacion.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.cosplay-maquillaje-caracterizacion.description"]; ?></p>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.cosplay-armadura.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.cosplay-armadura.description"]; ?></p>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.armas-ficcion.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.armas-ficcion.description"]; ?></p>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.hema.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.hema.description"]; ?></p>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.fotografia-fineart.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.fotografia-fineart.description"]; ?></p>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.talks-exhibitions.presentaciones-cerbero.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.talks-exhibitions.presentaciones-cerbero.description"]; ?></p>
                </div>
              </li>
            </ul>
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

            <ul class="list-group list-group-flush">
              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.academia-jedi.title"]; ?></h4>
                  <p><?php echo $lang["lang.activities.workshops.academia-jedi.description"]; ?></p>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.rev-creacion-pjs.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.varitas.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.jarras.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.chapas.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.darumas.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.dibujos-chibi-kawaii.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.bordado-pokemon.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.fotografia-retrato-artistico.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffcyan" href="/docs/Taller de Retrato Artístico.pdf" role="button"><?php echo $lang["lang.activities.btn.dossier"]; ?></a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.fotografia-camara-oscura.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.ilustracion-comic-creacion-pjs.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item mb-3">
                <div>
                  <h4 class="mb-3"><?php echo $lang["lang.activities.workshops.literatura-comedia.title"]; ?></h4>

                  <div class="row gy-3 mb-3">
                    <div class="col-auto">
                      <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button"><?php echo $lang["lang.activities.btn.inscribe"]; ?></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->

  <!-- Bootstrap JS bundle w/ Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- jQuery JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
</body>