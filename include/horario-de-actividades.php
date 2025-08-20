<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="d-lg-flex flex-lg-row align-items-center justify-content-between mb-5">
      <h1 class="ff-title mb-4 mb-lg-0"><?php echo $lang["lang.timetable.title"]; ?></h1>

      <!-- <div class="d-flex flex-column flex-lg-row gap-4 text-nowrap">
        <a class="btn btn-outline-ffscarlet w-100 w-lg-auto" href="/docs/Horarios.pdf" role="button">
          <?php echo $lang["lang.timetable.download-timetable"]; ?>
        </a>

        <a class="btn btn-outline-ffscarlet w-100 w-lg-auto"
          href="https://drive.google.com/drive/folders/1YTU8JnlwXyX6uIaIsA5PFKwOoXLbZ2E5?usp=drive_link" role="button">
          <?php echo $lang["lang.timetable.download-list"]; ?>
        </a>
      </div> -->
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 justify-content-center">
      <div class="col">
        <div class="h-100 bg-ffscarlet-10 bg-gradient rounded-4 p-4">
          <p class="text-center fs-3 my-3"><strong><?php echo $lang["lang.common.wip"]; ?></strong></p>
        </div>
      </div>
    </div>

    <!-- Horario -->
    <!-- <div class="row justify-content-center gy-5">
      <div class="col-12 col-lg-10">
        <img src="/images/timetables/Horarios-min.png" alt="" width="100%" height="auto">
      </div>

      <div class="col-12 col-lg-10">
        <img src="/images/timetables/Horarios2-min.png" alt="" width="100%" height="auto">
      </div>

      <div class="col-12 col-lg-10">
        <img src="/images/timetables/Horarios3-min.png" alt="" width="100%" height="auto">
      </div>
    </div> -->
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->
</body>
