<?php require_once("lang/lang.es.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]; ?>">

  <head>
    <!-- Header tags and common CSS -->
    <?php
    $curPageName = "timetable";
    $pageTitle = $lang["lang.timetable.title"];
    require("include/head.php");
    ?>
  </head>

  <?php require("include/horario-de-actividades.php"); ?>

</html>
