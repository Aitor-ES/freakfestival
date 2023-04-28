<footer class="offcanvas-lg offcanvas-end bg-ffmidnight text-white text-center mt-lg-5 py-4 py-lg-5" tabindex="-1" id="footerOffcanvas">
  <div class="offcanvas-header text-light px-4">
    <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" data-bs-target="#footerOffcanvas" aria-label="Close"></button>
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
            <img class="logo-sponsor" src="/images/logos/fvital-min.png" alt="" width="auto" height="60">
          </a>
        </div>

        <hr class="d-lg-none mb-0">

        <div class="col-4 col-lg-2">
          <img class="logo-vg" src="/images/logos/vitoria-gasteiz-green-capital.svg" alt="" width="auto" height="50">
        </div>

        <div class="col-4 col-lg-2">
          <img class="logo-vg" src="/images/logos/ayuntamiento-de-vitoria-gasteiz-vitoria-gasteizko-udala-logo-vector.svg" alt="" width="auto" height="50">
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Common scripts -->
<!-- Bootstrap JS bundle w/ Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>