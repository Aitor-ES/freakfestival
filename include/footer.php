<footer class="offcanvas-lg offcanvas-end bg-ffscarlet-gradient-top-90 text-white text-center mt-lg-5 py-4 py-lg-5" data-bs-theme="dark" tabindex="-1" id="footer-offcanvas">
  <div class="offcanvas-header text-light px-4">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" data-bs-target="#footer-offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body px-4 px-lg-0">
    <div class="container">
      <div class="row gy-5">
        <div class="col-12 col-lg-6">
          <div class="mb-4">
            <p><?php echo $lang["lang.footer.description"]; ?></p>
            <p><?php echo $lang["lang.footer.organized-by"]; ?></p>
            <p class="text-uppercase"><?php echo $lang["lang.home.introduction.paragraph.4"]; ?></p>
          </div>

          <div class="mb-4">
            <a href="<?php echo $links[$lang["lang"] . ".organizadores"]; ?>.php">
              <img class="logo-valinor" src="/images/logos/logo_valinor_blanco.svg" alt="Freak Festival" width="auto" height="100">
            </a>
          </div>

          <ul class="list-inline d-flex justify-content-center column-gap-1 column-gap-lg-3 mb-0">
            <li class="list-inline-item">
              <a class="btn btn-lg btn-outline-light btn-outline-b" href="mailto:info@freakfestival.es" target="_blank"><i class="bi bi-envelope-fill"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-lg btn-outline-light btn-outline-b" href="https://www.instagram.com/asovalinor" target="_blank"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-lg btn-outline-light btn-outline-b" href="https://www.facebook.com/asociacionvalinor" target="_blank"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-lg btn-outline-light btn-outline-b" href="https://twitter.com/AsoValinor" target="_blank"><i class="bi bi-twitter-x"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-lg btn-outline-light btn-outline-b" href="https://www.discord.com/invite/w4DQ2kZ9TV" target="_blank"><i class="bi bi-discord"></i></a>
            </li>
          </ul>
        </div>

        <div class="col-12 col-lg-3">
          <p><?php echo $lang["lang.footer.sponsors"]; ?></p>
          <a href="https://www.fundacionvital.eus/" target="_blank">
            <img class="logo-sponsor" src="/images/logos/sponsors/fvital-min.png" alt="" width="auto" height="60">
          </a>
        </div>

        <hr class="d-lg-none mb-0">

        <div class="col-12 col-lg-3 order-lg-first">
          <div class="row gy-5">
            <div class="col-4 col-lg-12">
              <img class="logo-vg" src="/images/logos/sponsors/vitoria-gasteiz-green-capital.svg" alt="" width="auto" height="45">
            </div>

            <div class="col-4 col-lg-12">
              <img class="logo-vg" src="/images/logos/sponsors/ayuntamiento-de-vitoria-gasteiz-vitoria-gasteizko-udala-logo-vector.svg" alt="" width="auto" height="45">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Common scripts -->
<!-- Bootstrap JS bundle w/ Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>