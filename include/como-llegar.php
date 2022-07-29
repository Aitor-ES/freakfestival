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
            <iframe class="rounded-4" width="100%" height="500" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJNSgCzj_CTw0RhxKBGHgKvm4&key=AIzaSyBYpWQwfN5-f1lt3HntlBEOEfE84oNpOcE"></iframe>
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