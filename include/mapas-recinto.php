<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.maps-of-the-facilities.title"]; ?></h1>

    <div class="row gy-5">
      <div class="col-12 col-lg-6">
        <h2 class="mb-4"><?php echo $lang["lang.maps-of-the-facilities.room.olarizu"]; ?></h2>

        <div class="card bg-ffmidnight rounded-5">
          <div class="card-body p-1">
            <img src="/images/maps/mapa_olarizu_<?php echo $lang["lang"]; ?>-min.jpg" alt="" width="100%" height="auto">
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <h2 class="mb-4"><?php echo $lang["lang.maps-of-the-facilities.room.estibaliz"]; ?></h2>

        <div class="card bg-ffmidnight rounded-5">
          <div class="card-body p-1">
            <img src="/images/maps/mapa_estibaliz_<?php echo $lang["lang"]; ?>-min.jpg" alt="" width="100%" height="auto">
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