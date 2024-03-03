<footer class="offcanvas-lg offcanvas-end bg-ffscarlet-gradient-top-90 text-white text-center mt-lg-5 py-4 py-lg-5" data-bs-theme="dark" tabindex="-1" id="footerOffcanvas">
  <div class="offcanvas-header text-light px-4">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" data-bs-target="#footerOffcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body px-4 px-lg-0">
    <div class="container">
      <div class="row gy-5">
        <div class="col-12 col-lg-4">
          <p><?php echo $lang["lang.footer.contact"]; ?></p>
          <a class="btn btn-lg btn-outline-light btn-outline-b" href="mailto:info@freakfestival.es"><i class="bi bi-envelope-fill me-3"></i>info@freakfestival.es</a>
        </div>

        <div class="col-12 col-lg-4">
          <p><?php echo $lang["lang.footer.organizers"]; ?></p>
          <a class="btn btn-lg btn-outline-light btn-outline-b" href="organizadores.php"><?php echo $lang["lang.footer.valinor"]; ?></a>
        </div>

        <div class="col-12 col-lg-4">
          <p><?php echo $lang["lang.footer.sponsors"]; ?></p>
          <a href="https://www.fundacionvital.eus/">
            <img class="logo-sponsor" src="/images/logos/sponsors/fvital-min.png" alt="" width="auto" height="60">
          </a>
        </div>

        <hr class="d-lg-none mb-0">

        <div class="col-4 col-lg-2">
          <img class="logo-vg" src="/images/logos/sponsors/vitoria-gasteiz-green-capital.svg" alt="" width="auto" height="50">
        </div>

        <div class="col-4 col-lg-2">
          <img class="logo-vg" src="/images/logos/sponsors/ayuntamiento-de-vitoria-gasteiz-vitoria-gasteizko-udala-logo-vector.svg" alt="" width="auto" height="50">
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Common scripts -->
<!-- Bootstrap JS bundle w/ Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>