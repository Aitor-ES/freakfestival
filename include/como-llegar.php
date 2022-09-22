<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.how-to-come.title"]; ?></h1>

    <div class="row mb-3">
      <div class="col-12">
        <dl>
          <dt><?php echo $lang["lang.how-to-come.place.title"]; ?></dt>
          <dd><?php echo $lang["lang.how-to-come.place.description"]; ?></dd>
          <dt><?php echo $lang["lang.how-to-come.address.title"]; ?></dt>
          <dd><?php echo $lang["lang.how-to-come.address.description"]; ?></dd>
        </dl>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card rounded-5">
          <div class="card-body">
            <!--The iframe element for the map -->
            <iframe class="rounded-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11698.05306380622!2d-2.6685833500000005!3d42.86200965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4fc23fce022835%3A0x6ebe0a7818811287!2sEuropa%20Biltzar%20Jauregia%20%2F%20Palacio%20de%20Congresos%20Europ!5e0!3m2!1ses!2ses!4v1663836135051!5m2!1ses!2ses" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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