<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <div class="row justify-content-between gy-4 mb-5">
      <div class="col-12 col-lg-auto">
        <h1 class="f-uncial-r mb-0"><?php echo $lang["lang.timetable.title"]; ?></h1>
      </div>

      <div class="col-12 col-lg-auto">
        <a class="btn btn-outline-ffmidnight w-100" href="/docs/2023/Horario de actividades - Freak Festival 2023.pdf" role="button">
        <?php echo $lang["lang.timetable.download-as-list"]; ?>
        </a>
      </div>
    </div>

    <!-- Horario -->
    <div class="row justify-content-center gy-5">
      <div class="col-12 col-lg-10">
        <img src="/images/timetables/Horario freak sabado.png" alt="" width="100%" height="auto">
      </div>

      <div class="col-12 col-lg-10">
        <img src="/images/timetables/Horario freak domingo.png" alt="" width="100%" height="auto">
      </div>
    </div>
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>