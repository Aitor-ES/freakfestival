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

        <div class="card bg-ffmidnight rounded-4">
          <div class="card-body p-1">
            <img src="/images/maps/mapa_olarizu_<?php echo $lang["lang"]; ?>-min.jpg" alt="" width="100%" height="auto">
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <h2 class="mb-4"><?php echo $lang["lang.maps-of-the-facilities.room.estibaliz"]; ?></h2>

        <div class="card bg-ffmidnight rounded-4">
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
</body>