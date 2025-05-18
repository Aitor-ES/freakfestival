<footer class="offcanvas-lg offcanvas-end bg-ffscarlet bg-gradient text-white text-center mt-lg-5 py-4 py-lg-5"
  data-bs-theme="dark" tabindex="-1" id="footer-offcanvas">
  <div class="offcanvas-header text-light px-4">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" data-bs-target="#footer-offcanvas"
      aria-label="Close"></button>
  </div>
  <div class="offcanvas-body px-4 px-lg-0">
    <div class="container">
      <div class="row gy-5">
        <div class="col-12 col-lg-6 d-flex flex-column row-gap-4">
          <div>
            <p><?php echo $lang["lang.footer.description"]; ?></p>
            <p><?php echo $lang["lang.footer.organized-by"]; ?></p>
            <strong class="f-outfit text-uppercase"><?php echo $lang["lang.footer.title"]; ?></strong>
          </div>

          <a href="/<?php echo $links["$lang[lang].organizers"]; ?>.php">
            <img class="logo-valinor" src="/images/ui/logos/logo_valinor_blanco.svg" alt="Freak Festival" width="auto"
              height="100">
          </a>

          <ul class="list-inline d-flex justify-content-between justify-content-lg-center column-gap-lg-3 mb-0">
            <li class="list-inline-item me-0">
              <a class="icon-btn btn btn-lg btn-outline-light" href="mailto:info@freakfestival.es" target="_blank">
                <i class="bi bi-envelope-fill"></i>
              </a>
            </li>
            <li class="list-inline-item me-0">
              <a class="icon-btn btn btn-lg btn-outline-light" href="https://www.instagram.com/asovalinor"
                target="_blank">
                <i class="bi bi-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item me-0">
              <a class="icon-btn btn btn-lg btn-outline-light" href="https://www.facebook.com/asociacionvalinor"
                target="_blank">
                <i class="bi bi-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item me-0">
              <a class="icon-btn btn btn-lg btn-outline-light" href="https://twitter.com/AsoValinor" target="_blank">
                <i class="bi bi-twitter-x"></i>
              </a>
            </li>
            <li class="list-inline-item me-0">
              <a class="icon-btn btn btn-lg btn-outline-light" href="https://www.discord.com/invite/w4DQ2kZ9TV"
                target="_blank">
                <i class="bi bi-discord"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="col-12 col-lg-3">
          <p><?php echo $lang["lang.footer.sponsors"]; ?></p>
          <a href="https://www.fundacionvital.eus/" target="_blank">
            <img class="logo-sponsor" src="/images/sponsors/fvital-min.png" alt="" width="auto" height="60">
          </a>
        </div>

        <hr class="d-lg-none mb-0">

        <div class="col-12 col-lg-3 order-lg-first">
          <div class="row gy-5">
            <div class="col-4 col-lg-12">
              <img class="logo-vg" src="/images/sponsors/vitoria-gasteiz-green-capital.svg" alt="" width="auto"
                height="45">
            </div>

            <div class="col-4 col-lg-12">
              <img class="logo-vg"
                src="/images/sponsors/ayuntamiento-de-vitoria-gasteiz-vitoria-gasteizko-udala-logo-vector.svg" alt=""
                width="auto" height="45">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Common scripts -->
<!-- Bootstrap JS bundle w/ Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
