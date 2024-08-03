<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-main-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="f-uncial-r mb-4"><?php echo $lang["lang.registrations-applications.title"]; ?></h1>
      <p class="lead"><?php echo $lang["lang.registrations-applications.description.1"]; ?></p>
      <p class="lead"><?php echo $lang["lang.registrations-applications.description.2"]; ?></p>
    </div>

    <div class="d-flex flex-column align-items-lg-baseline gap-3">
      <a class="btn btn-outline-ffscarlet btn-outline-b" href="https://forms.gle/uBpSYT3TvpxTj9An8"><?php echo $lang["lang.registrations-applications.associations"]; ?></a>
      <a class="btn btn-outline-ffscarlet btn-outline-b" href="https://forms.gle/FvvvDUNfzQ8GZ5uS9"><?php echo $lang["lang.registrations-applications.activities"]; ?></a>
      <a class="btn btn-outline-ffscarlet btn-outline-b" href="https://forms.gle/Ebk5qwjpoPxk5yE67"><?php echo $lang["lang.registrations-applications.artists"]; ?></a>
      <a class="btn btn-outline-ffscarlet btn-outline-b" href="https://forms.gle/7KcUNHTS2eWFgPzG9"><?php echo $lang["lang.registrations-applications.shops"]; ?></a>
    </div>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>