<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.timetable.title"]; ?></h1>

    <!-- Horario -->
    <?php
      $timetable = json_decode(file_get_contents(__DIR__ . '/horario-2022.json'));
      foreach ($timetable as $day) {
    ?>
      <h2 class="mb-5"><?php echo $lang["lang.timetable.day." . $day->dayName]; ?></h2>

      <?php foreach ($day->rooms as $room) { ?>
        <h3 class="mb-4"><?php echo $lang["lang.timetable.room." . $room->roomName]; ?></h3>

        <div class="row gy-5 mb-5">
          <?php foreach ($room->zones as $zone) { ?>
            <div class="col-12 col-lg-6">
              <h4 class="mb-3"><?php echo $lang["lang.timetable.zone." . $zone->zoneName]; ?></h4>

              <table class="table <?php
                  if ($room->roomName == "olarizu") echo "table-ffdiamond-semitransparent";
                  else echo "table-ffsunlight-semitransparent";
                ?> table-striped align-middle">
                <thead>
                  <tr>
                    <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
                    <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
                    <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($zone->activities as $activity) { ?>
                    <tr>
                      <th scope="row"><?php echo $activity->start; ?></th>
                      <th scope="row"><?php echo $activity->end; ?></th>
                      <td><?php echo $lang["lang.timetable.activity." . $activity->activityName]; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          <?php } ?>
        </div>
      <?php
      }
    }
    ?>

    <!-- <div class="text-center pb-3">
      <h2>En construcción...</h2>
    </div> -->
  </div>
  <!-- Main End -->

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>