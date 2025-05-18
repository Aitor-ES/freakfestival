<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.registrations-applications.title"]; ?></h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.registrations-applications.description"]; ?></p>
    </div>

    <div class="d-flex flex-column align-items-lg-baseline gap-3">
      <a class="btn btn-outline-ffscarlet rounded-pill" href="https://forms.gle/uBpSYT3TvpxTj9An8">
        <?php echo $lang["lang.registrations-applications.associations"]; ?>
        <i class="bi bi-chevron-right ms-1"></i>
      </a>

      <a class="btn btn-outline-ffscarlet rounded-pill" href="https://forms.gle/FvvvDUNfzQ8GZ5uS9">
        <?php echo $lang["lang.registrations-applications.activities"]; ?>
        <i class="bi bi-chevron-right ms-1"></i>
      </a>

      <a class="btn btn-outline-ffscarlet rounded-pill" href="https://forms.gle/Ebk5qwjpoPxk5yE67">
        <?php echo $lang["lang.registrations-applications.artists"]; ?>
        <i class="bi bi-chevron-right ms-1"></i>
      </a>

      <a class="btn btn-outline-ffscarlet rounded-pill" href="https://forms.gle/7KcUNHTS2eWFgPzG9">
        <?php echo $lang["lang.registrations-applications.shops"]; ?>
        <i class="bi bi-chevron-right ms-1"></i>
      </a>
    </div>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->
</body>
