<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.posters.title"]; ?></h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.posters.description"]; ?></p>
    </div>

    <ul class="activities list-group list-group-flush">
      <!-- 2025 -->
      <li class="list-group-item">
        <div class="row justify-content-center gy-4 gx-5">
          <div class="col-12 col-lg-4 text-center">
            <a href="/images/posters/cartel_2025-min.jpg" data-lightbox="gallery">
              <img class="rounded" src="/images/posters/cartel_2025_thumbnail-min.jpg" alt="<?php echo $lang["lang.posters.2025.alt"]; ?>" width="187" height="300">
            </a>
          </div>

          <div class="col-12 col-lg-6">
            <h2 class="mb-4"><?php echo $lang["lang.posters.2025.title"]; ?></h2>
            <p><?php echo $lang["lang.posters.2025.description"]; ?></p>
            <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="https://www.instagram.com/p/DI3-fPkt4EK/" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
      </li>

      <!-- 2024 -->
      <li class="list-group-item">
        <div class="row justify-content-center gy-4 gx-5">
          <div class="col-12 col-lg-4 text-center">
            <a href="/images/posters/cartel_2024-min.png" data-lightbox="gallery">
              <img class="rounded" src="/images/posters/cartel_2024_thumbnail-min.png" alt="<?php echo $lang["lang.posters.2024.alt"]; ?>" width="212" height="300">
            </a>
          </div>

          <div class="col-12 col-lg-6">
            <h2 class="mb-4"><?php echo $lang["lang.posters.2024.title"]; ?></h2>
            <p><?php echo $lang["lang.posters.2024.description"]; ?></p>
            <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="https://www.instagram.com/p/C6duqgQKiGc/" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
      </li>

      <!-- 2023 -->
      <li class="list-group-item">
        <div class="row justify-content-center gy-4 gx-5">
          <div class="col-12 col-lg-4 text-center">
            <a href="/images/posters/cartel_2023-min.png" data-lightbox="gallery">
              <img class="rounded" src="/images/posters/cartel_2023_thumbnail-min.png" alt="<?php echo $lang["lang.posters.2023.alt"]; ?>" width="212" height="300">
            </a>
          </div>

          <div class="col-12 col-lg-6">
            <h2 class="mb-4"><?php echo $lang["lang.posters.2023.title"]; ?></h2>
            <p><?php echo $lang["lang.posters.2023.description"]; ?></p>
            <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="https://www.instagram.com/p/Cq8gOnQvy3i/" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
      </li>

      <!-- 2022 -->
      <li class="list-group-item">
        <div class="row justify-content-center gy-4 gx-5">
          <div class="col-12 col-lg-4 text-center">
            <a href="/images/posters/cartel_2022.svg" data-lightbox="gallery">
              <img class="rounded" src="/images/posters/cartel_2022.svg" alt="<?php echo $lang["lang.posters.2022.alt"]; ?>" width="212" height="300">
            </a>
          </div>

          <div class="col-12 col-lg-6">
            <h2 class="mb-4"><?php echo $lang["lang.posters.2022.title"]; ?></h2>
            <p><?php echo $lang["lang.posters.2022.description"]; ?></p>
            <a class="icon-btn btn btn-lg btn-outline-ffscarlet" href="https://www.instagram.com/p/Cdd2ieDtcgu/" target="_blank">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
      </li>
    </ul>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->

  <!-- Lightbox2 JS -->
  <script src="/libraries/lightbox2/js/lightbox-plus-jquery.min.js"></script>
</body>