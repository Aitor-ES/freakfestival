<body>
  <!-- Navbar Start -->
  <?php include "header.php"; ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <main class="container-md ff-gutter my-4 my-md-5">
    <div class="mb-5">
      <h1 class="ff-title mb-4"><?php echo $lang["lang.photos.title"]; ?></h1>
      <p class="ff-lead text-ffscarlet"><?php echo $lang["lang.photos.description"]; ?></p>
    </div>

    <!-- 2024 -->
    <div class="mb-5">
      <h2 class="mb-4"><?php echo $lang["lang.photos.2024.title"]; ?></h2>

      <!-- Friday -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.friday"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2024/min/Viernes") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2024/min/Viernes/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2024/thumbnails/Viernes/<?php echo $file->getFilename(); ?>" alt="" width="auto"
                  height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Saturday -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.saturday"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2024/min/Sábado") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2024/min/Sábado/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2024/thumbnails/Sábado/<?php echo $file->getFilename(); ?>" alt="" width="auto"
                  height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Sunday -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.sunday"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2024/min/Domingo") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2024/min/Domingo/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2024/thumbnails/Domingo/<?php echo $file->getFilename(); ?>" alt="" width="auto"
                  height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>
    </div>

    <!-- 2023 -->
    <div class="mb-5">
      <h2 class="mb-4"><?php echo $lang["lang.photos.2023.title"]; ?></h2>

      <!-- Stands, contributors and guests -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.stands-contributors-guests"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2023/min/Puestos, colaboradores e invitados") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2023/min/Puestos, colaboradores e invitados/<?php echo $file->getFilename(); ?>"
                data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2023/thumbnails/Puestos, colaboradores e invitados/<?php echo $file->getFilename(); ?>"
                  alt="" width="auto" height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Activities -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.activities"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2023/min/Actividades") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2023/min/Actividades/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2023/thumbnails/Actividades/<?php echo $file->getFilename(); ?>" alt="" width="auto"
                  height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Cosplay -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.cosplay"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2023/min/Cosplay") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2023/min/Cosplay/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2023/thumbnails/Cosplay/<?php echo $file->getFilename(); ?>" alt="" width="auto"
                  height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>
    </div>

    <!-- 2022 -->
    <div class="mb-5">
      <h2 class="mb-4"><?php echo $lang["lang.photos.2022.title"]; ?></h2>

      <!-- General -->
      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2022/min") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2022/min/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1" src="/images/photos/2022/thumbnails/<?php echo $file->getFilename(); ?>"
                  alt="" width="auto" height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Stands, contributors and guests -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.stands-contributors-guests"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2022/min/Puestos, colaboradores e invitados") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2022/min/Puestos, colaboradores e invitados/<?php echo $file->getFilename(); ?>"
                data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2022/thumbnails/Puestos, colaboradores e invitados/<?php echo $file->getFilename(); ?>"
                  alt="" width="auto" height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Activities -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.activities"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2022/min/Actividades") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2022/min/Actividades/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2022/thumbnails/Actividades/<?php echo $file->getFilename(); ?>" alt="" width="auto"
                  height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Cosplay -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.cosplay"]; ?></h3>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2022/min/Cosplay") as $file) {
          if (!$file->isFile())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2022/min/Cosplay/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1"
                  src="/images/photos/2022/thumbnails/Cosplay/<?php echo $file->getFilename(); ?>" alt="" width="auto"
                  height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>

      <!-- Video -->
      <h3 class="mb-3"><?php echo $lang["lang.photos.gallery.video"]; ?></h3>

      <div class="text-center">
        <iframe id="gallery-video" class="mb-5"
          src="https://drive.google.com/file/d/1J2vmd-zc02kKfumchDEKKgDNB6eJCGWu/preview" width="640"
          height="360"></iframe>
      </div>
    </div>

    <!-- 2018 -->
    <div class="mb-5">
      <h2 class="mb-4"><?php echo $lang["lang.photos.2018.title"]; ?></h2>

      <div class="row gy-4 mb-5 justify-content-center">
        <?php foreach (new DirectoryIterator(__DIR__ . "/../images/photos/2018/min") as $file) {
          if ($file->isDot())
            continue;
          ?>

            <div class="col-auto">
              <a href="/images/photos/2018/min/<?php echo $file->getFilename(); ?>" data-lightbox="gallery">
                <img class="border rounded p-1" src="/images/photos/2018/thumbnails/<?php echo $file->getFilename(); ?>"
                  alt="" width="auto" height="100px">
              </a>
            </div>

            <?php
        } ?>
      </div>
    </div>
  </main>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include "footer.php"; ?>
  <!-- Footer End -->

  <!-- Lightbox2 JS -->
  <script src="/libraries/lightbox2/js/lightbox-plus-jquery.min.js"></script>
</body>
